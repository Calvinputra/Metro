<?php

namespace App\Http\Controllers\Vendor\Voyager;

use App\Models\Attribute;
use App\Models\ProductAttribute;
use Auth;
use Illuminate\Http\Request;
use TCG\Voyager\Events\BreadDataAdded;
use TCG\Voyager\Events\BreadDataUpdated;
use Validator;
use Voyager;
use App\Models\Transaction;
use App\Models\TransactionStatus;
use App\Models\AccountLedger;
use App\Jobs\RecalculateAccountLedgerJob;

class TransactionController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController
{
    public function doFinishTransaction($transaction)
    {
        //update transaction to selesai
        $transaction = tap($transaction)->update([
            'status_id' => 4
        ]);

        //update log
        $transaction->transactionLogs()->create([
            'status_id' => 4,
            'status' => TransactionStatus::find(4)->name,
        ]);

        //create ledger
        $account_ledger = AccountLedger::create([
            'value' => $transaction->grand_total * -1,
            'transaction_id' => $transaction->id,
            'account_id' => 2, //saldo di tahan
            'description' => 'Transaksi selesai atas nama ' . $transaction->customer_name . ' invoice ' . $transaction->uuid,
        ]);
        //recalculate account ledger
        dispatch(new RecalculateAccountLedgerJob($account_ledger));


        //create ledger
        $account_ledger = AccountLedger::create([
            'value' => $transaction->grand_total,
            'transaction_id' => $transaction->id,
            'account_id' => 1, //saldo
            'description' => 'Transaksi selesai atas nama ' . $transaction->customer_name . ' invoice ' . $transaction->uuid,
        ]);
        //recalculate account ledger
        dispatch(new RecalculateAccountLedgerJob($account_ledger));
        //return message
    }
    public function finishTransaction(Request $request)
    {
        $this->validate($request, [
            '_key' => 'required',
            'uuid' => 'exists:transactions,uuid',
        ]);
        //validate token
        $transaction = Transaction::where('uuid', $request->uuid)->first();
        $token = '9636421f4dc2c0d40762a2d92b67391c' . $transaction->id . $transaction->created_at . $transaction->updated_at;
        if (!password_verify($token, $request->_key)) {
            return redirect()->back()->with(['error' => 'Please try again!']);
        }

        if ($transaction) {
            $this->doFinishTransaction($transaction);
            return redirect()->back()->with(['success' => 'Successfully Finish a Transaction!']);
        } else {
            return redirect()->back()->with(['error' => 'Transaction not found!']);
        }
    }
    public function addShippingNo(Request $request)
    {
        $this->validate($request, [
            '_key' => 'required',
            'uuid' => 'exists:transactions,uuid',
            'shipping_no' => 'required'
        ]);
        //validate token
        $transaction = Transaction::where('uuid', $request->uuid)->first();
        $token = '9636421f4dc2c0d40762a2d92b67391c' . $transaction->id . $transaction->created_at . $transaction->updated_at;
        if (password_verify($token, $request->_key)) {
            $ts = TransactionStatus::find(3);
            $transaction->update([
                'resi_no' => $request->shipping_no,
                'admin_id' => Auth::id(),
                'status_id' => 3,

            ]);
            $transaction->transactionLogs()->create([
                'transaction_id' => $transaction->id,
                'status_id' => 3,
                'status' => $ts->name ?? 'SEDANG DIKIRIM',
                'notes' => Auth::user()->name . " mengubah nomer resi menjadi " . $request->shipping_no,
            ]);
            return redirect()->back()->with(['success' => 'Successfully update shipping no!']);
        } else {
            return redirect()->back()->with(['error' => 'Injected Key, Please try again!']);
        }
    }
    //***************************************
    //               ____
    //              |  _ \
    //              | |_) |
    //              |  _ <
    //              | |_) |
    //              |____/
    //
    //      Browse our Data Type (B)READ
    //
    //****************************************

    public function index(Request $request)
    {
        // GET THE SLUG, ex. 'posts', 'pages', etc.
        $slug = $this->getSlug($request);

        // GET THE DataType based on the slug
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();

        // Check permission
        $this->authorize('browse', app($dataType->model_name));

        $getter = $dataType->server_side ? 'paginate' : 'get';

        $search = (object) ['value' => $request->get('s'), 'key' => $request->get('key'), 'filter' => $request->get('filter')];

        $searchNames = [];
        if ($dataType->server_side) {
            $searchNames = $dataType->browseRows->mapWithKeys(function ($row) {
                return [$row['field'] => $row->getTranslatedAttribute('display_name')];
            });
        }

        $orderBy = $request->get('order_by', $dataType->order_column);
        $sortOrder = $request->get('sort_order', $dataType->order_direction);
        $usesSoftDeletes = false;
        $showSoftDeleted = false;

        // Next Get or Paginate the actual content from the MODEL that corresponds to the slug DataType
        if (strlen($dataType->model_name) != 0) {
            $model = app($dataType->model_name);

            $query = $model::select($dataType->name . '.*');

            if ($dataType->scope && $dataType->scope != '' && method_exists($model, 'scope' . ucfirst($dataType->scope))) {
                $query->{$dataType->scope}();
            }

            // Use withTrashed() if model uses SoftDeletes and if toggle is selected
            if ($model && in_array(SoftDeletes::class, class_uses_recursive($model)) && Auth::user()->can('delete', app($dataType->model_name))) {
                $usesSoftDeletes = true;

                if ($request->get('showSoftDeleted')) {
                    $showSoftDeleted = true;
                    $query = $query->withTrashed();
                }
            }

            // If a column has a relationship associated with it, we do not want to show that field
            $this->removeRelationshipField($dataType, 'browse');

            if ($search->value != '' && $search->key && $search->filter) {
                $search_filter = ($search->filter == 'equals') ? '=' : 'LIKE';
                $search_value = ($search->filter == 'equals') ? $search->value : '%' . $search->value . '%';

                $searchField = $dataType->name . '.' . $search->key;
                if ($row = $this->findSearchableRelationshipRow($dataType->rows->where('type', 'relationship'), $search->key)) {
                    $query->whereIn(
                        $searchField,
                        $row->details->model::where($row->details->label, $search_filter, $search_value)->pluck('id')->toArray()
                    );
                } else {
                    if ($dataType->browseRows->pluck('field')->contains($search->key)) {
                        $query->where($searchField, $search_filter, $search_value);
                    }
                }
            }

            //filter
            $filterNotFound = false;
            if ($request->page_filter == 'selesai') {
                $query->where('status_id', 4);
            } else if ($request->page_filter == 'berlangsung') {
                $query->whereIn('status_id', [2, 3]);
            } else if ($request->page_filter == 'tidak_berhasil') {
                $query->where('status_id', 5);
            } else {
                //$query->whereIn('status_id',[2,3]);
                //$query->where('status_id','<>',1); //bukan yg menunggu pembayaran

                $filterNotFound = true;
            }
            //end filter


            $row = $dataType->rows->where('field', $orderBy)->firstWhere('type', 'relationship');
            if ($orderBy && (in_array($orderBy, $dataType->fields()) || !empty($row))) {
                $querySortOrder = (!empty($sortOrder)) ? $sortOrder : 'desc';
                if (!empty($row)) {
                    $query->select([
                        $dataType->name . '.*',
                        'joined.' . $row->details->label . ' as ' . $orderBy,
                    ])->leftJoin(
                        $row->details->table . ' as joined',
                        $dataType->name . '.' . $row->details->column,
                        'joined.' . $row->details->key
                    );
                }

                $dataTypeContent = call_user_func([
                    $query->orderBy($orderBy, $querySortOrder),
                    $getter,
                ]);
            } elseif ($model->timestamps) {
                $dataTypeContent = call_user_func([$query->latest($model::CREATED_AT), $getter]);
            } else {
                $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), $getter]);
            }

            // Replace relationships' keys for labels and create READ links if a slug is provided.
            $dataTypeContent = $this->resolveRelations($dataTypeContent, $dataType);
        } else {
            // If Model doesn't exist, get data from table name
            $dataTypeContent = call_user_func([DB::table($dataType->name), $getter]);
            $model = false;
        }

        // Check if BREAD is Translatable
        $isModelTranslatable = is_bread_translatable($model);

        // Eagerload Relations
        $this->eagerLoadRelations($dataTypeContent, $dataType, 'browse', $isModelTranslatable);

        // Check if server side pagination is enabled
        $isServerSide = isset($dataType->server_side) && $dataType->server_side;

        // Check if a default search key is set
        $defaultSearchKey = $dataType->default_search_key ?? null;

        // Actions
        $actions = [];
        if (!empty($dataTypeContent->first())) {
            foreach (Voyager::actions() as $action) {
                $action = new $action($dataType, $dataTypeContent->first());

                if ($action->shouldActionDisplayOnDataType()) {
                    $actions[] = $action;
                }
            }
        }

        // Define showCheckboxColumn
        $showCheckboxColumn = false;
        if (Auth::user()->can('delete', app($dataType->model_name))) {
            $showCheckboxColumn = true;
        } else {
            foreach ($actions as $action) {
                if (method_exists($action, 'massAction')) {
                    $showCheckboxColumn = true;
                }
            }
        }

        // Define orderColumn
        $orderColumn = [];
        if ($orderBy) {
            $index = $dataType->browseRows->where('field', $orderBy)->keys()->first() + ($showCheckboxColumn ? 1 : 0);
            $orderColumn = [[$index, $sortOrder ?? 'desc']];
        }

        // Define list of columns that can be sorted server side
        $sortableColumns = $this->getSortableColumns($dataType->browseRows);

        $view = 'voyager::bread.browse';

        if (view()->exists("voyager::$slug.browse")) {
            $view = "voyager::$slug.browse";
        }

        return Voyager::view($view, compact(
            'actions',
            'dataType',
            'dataTypeContent',
            'isModelTranslatable',
            'search',
            'orderBy',
            'orderColumn',
            'sortableColumns',
            'sortOrder',
            'searchNames',
            'isServerSide',
            'defaultSearchKey',
            'usesSoftDeletes',
            'showSoftDeleted',
            'showCheckboxColumn',
            'filterNotFound'
        ));
    }
}
