<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SellItem extends Model
{
    protected $table='sell_items';
    public $primary_key='id';
    public $timestamps=true;
}
