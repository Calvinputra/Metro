<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class ShippingAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Pengiriman';
    }

    public function getIcon()
    {
        return 'voyager-truck';
    }

    public function getPolicy()
    {
        return 'read_detail';
    }

    public function getAttributes()
    {
        return [
            //'style' => 'margin-right:5px;',
            'class' => 'btn btn-sm btn-warning pull-right',
            'data-invoice-no' => $this->data->uuid,
            'data-key' => password_hash('9636421f4dc2c0d40762a2d92b67391c' . $this->data->id .  $this->data->created_at .  $this->data->updated_at,PASSWORD_DEFAULT),
            'data-toggle' => 'modal',
            'data-target' => '#shippingModal'
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
    public function shouldActionDisplayOnRow($row)
    {
        return $row->status_id == 2 || $row->status_id == 3;
    }
}
