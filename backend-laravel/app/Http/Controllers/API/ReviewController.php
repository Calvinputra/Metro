<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Customer::where('token', '=', request()->bearerToken())->first();
        if ($user) {

            $rules = [
                'rating'    => 'required|numeric|between:0,5.0',
                'transaction_id' => 'required',
                'product_id' => 'required',
            ];
            $messages = [
                'rating.required'        => 'Rating wajib diisi',
                'rating.numeric'         => 'Rating wajib diisi dengan angka [ 0.0 - 5.0]',
                'rating.between'         => 'Rating wajib diisi dengan angka [ 0.0 - 5.0]',
                'transaction_id.reqired' => 'Transaction wajib diisi',
                'product_id.required'    => 'Product wajib diisi',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
            //
            if ($validator->fails()) {
                return response([
                    'success' => false,
                    'message' => $validator->errors(),
                ], 201);
            }

            $transaction = Transaction::where('id', $request->transaction_id)->where('customer_id', $user->id)->first();
            if (!$transaction) {
                return response([
                    'success' => false,
                    'message' => ['msg' => ['Transaction not Found!.']],
                ], 200);
            }

            //validate product exists 
            $flag = false;
            foreach ($transaction->transactionDetails as $key => $detail) {
                if ($detail->product_id == $request->product_id) {
                    $flag = true;
                }
            }
            if (!$flag) {
                return response([
                    'success' => false,
                    'message' => ['msg' => ['Product not found in the transaction!.']],
                ], 200);
            }

            //success

            //TODO input data
        } else {
            return response()->json([
                'data'   => 'Unauthorized Action',
                'status' => 503,
                'success' => false,
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
