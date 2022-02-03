<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\AccountLedger;
use App\Models\TransactionStatus;
use Illuminate\Http\Request;
use App\Jobs\RecalculateAccountLedgerJob;

class PaymentController extends Controller
{

    public function __construct()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = env('MIDTRANS_SECRET_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
    }
    public function midtransNotification(Request $request)
    {
        $transaction = Transaction::where('uuid', $request->order_id)->first();
        $key_data = $request->order_id;
        $key_data .= $request->status_code;
        $key_data .= $request->gross_amount;
        $key_data .= env("MIDTRANS_SECRET_KEY");
        $expected_key = hash("sha512", $key_data);
        if ($transaction) {
            if ($expected_key == $request->signature_key) {
                if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                    //success
                    //update transaction to sedang di proses
                    $transaction = tap($transaction)->update([
                        'status_id' => 2
                    ]);

                    //update log
                    $transaction->transactionLogs()->create([
                        'status_id' => 2,
                        'status' => TransactionStatus::find(2)->name,
                    ]);

                    //create ledger
                    $data_ledger = [
                        'value' => $transaction->grand_total,
                        'transaction_id' => $transaction->id,
                        'account_id' => 2, //saldo di tahan
                        'description' => 'Transfer dari ' . $transaction->customer_name . ' invoice ' . $transaction->uuid,
                    ];
                    $account_ledger = AccountLedger::where('transaction_id', $transaction->id)->where('account_id', 2)->where('value', $transaction->grand_total)->first();
                    if ($account_ledger) {
                        $account_ledger = tap($account_ledger)->update($data_ledger);
                    } else {
                        $account_ledger = AccountLedger::create($data_ledger);
                    }

                    //recalculate account ledger
                    dispatch(new RecalculateAccountLedgerJob($account_ledger));
                } else if ($request->transaction_status == 'deny' || $request->transaction_status == 'cancel') {
                    //update transaction to gagal
                    $transaction = tap($transaction)->update([
                        'status_id' => 5
                    ]);

                    //update log
                    $transaction->transactionLogs()->create([
                        'status_id' => 5,
                        'status' => TransactionStatus::find(2)->name,
                    ]);
                } else if ($request->transaction_status == 'expire') {
                    //update
                    $transaction = tap($transaction)->update([
                        'status_id' => 5,
                    ]);

                    //update log
                    $transaction->transactionLogs()->create([
                        'status_id' => 1,
                        'status' => "KODE PEMBAYARAN EXPIRED",
                    ]);
                } else {
                }
            } else {
                return response()->json([
                    'success' => false,
                    'data' => 'Invalid Key!',
                ]);
            }
        } else {
            return response()->json([
                'success' => false,
                'data' => 'Order Id not found!',
            ]);
        }
    }
    public function getSnapToken($transaction)
    {
        $data = ['success' => true];

        $names = explode(" ", $transaction->customer_name);
        $customer_first_name = "";
        $customer_last_name = "";
        $counter = 0;
        foreach ($names as $name) {
            if ($counter == count($names) - 1) {
                //ambil paling belakang 
                $customer_last_name = $name;
            } else {
                $customer_first_name .= $name;
            }
            $counter++;
        }



        $params = [
            'transaction_details' => [
                'order_id' => $transaction->uuid,
                'gross_amount' => $transaction->grand_total
            ],
            'customer_details' => [
                'first_name' => $customer_first_name,
                'last_name' => $customer_last_name,
                'email' => $transaction->customer_email,
                'phone' => $transaction->customer_phone
            ]
        ];




        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $data['data'] = $snapToken;
        return json_encode($data);
    }
    public function checkTransactionStatus($uuid)
    {

        $transaction = Transaction::where('uuid', $uuid)->first();
        if ($transaction) {

            $status = \Midtrans\Transaction::status($uuid);;
            return response()->json([
                'success' => true,
                'data' => $status,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'data' => "Order Id not found.",
            ]);
        }
    }
}
