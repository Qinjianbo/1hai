<?php

namespace App\Models\Order;

use App\Models\Model;

class Order extends Model
{
    protected $table = 'wutao_order';
    protected $guarded = [];
    public $timestamps = false;
}
