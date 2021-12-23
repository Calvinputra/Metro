<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class TransactionDetailAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Lihat Detail Transaksi';
    }

    public function getIcon()
    {
        return 'voyager-list';
    }

    public function getPolicy()
    {
        return 'read_detail';
    }

    public function getAttributes()
    {
        return [
            //'style' => 'margin-right:5px;',
            'class' => 'btn btn-sm btn-primary pull-right',
            'data-invoice-no' => $this->data->uuid,
            'data-customer-name' => $this->data->customer_name,
            'data-customer-phone' => $this->data->customer_phone,
            'data-date-view' => date('d F Y', strtotime($this->data->date)),
            'data-address' => $this->data->shipping_address,
            'data-subtotal' => number_format($this->data->total_price, '0', ',', '.'),
            'data-shipping-cost' => number_format($this->data->shipping_cost, '0', ',', '.'),
            'data-grand-total' => number_format($this->data->grand_total, '0', ',', '.'),
            'data-details' => str_replace('"', "'", json_encode($this->data->transactionDetails)),
            'data-toggle' => 'modal',
            'data-target' => '#detailTransaksiModal'
        ];
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'transactions';
    }

    public function getDefaultRoute()
    {
        return 'javascript::';
    }
}
