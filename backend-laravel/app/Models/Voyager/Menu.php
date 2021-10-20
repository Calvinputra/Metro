<?php

namespace App\Models\Voyager;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Voyager;

class Menu extends \TCG\Voyager\Models\Menu
{
    use HasFactory;
    public function items()
    {
        return $this->hasMany(Voyager::modelClass('MenuItem'))->orderBy('order');
    }
}
