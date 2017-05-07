<?php

namespace App\Models\Car;

use App\Models\Model;
use Illuminate\Http\Request;

class Rent extends Model
{
    protected $table = 'wutao_shop_car_city';
    protected $guarded = [];
    public $timestamps = false;

    public function getList(Request $request)
    {
        return self::all();
    }
}
