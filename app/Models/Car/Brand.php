<?php

namespace App\Models\Car;

use App\Models\Model;
use Illuminate\Http\Request;

class Brand extends Model
{
    protected $table = 'wutao_car_brand';

    public function getList(Request $request)
    {
        return self::all();
    }
}
