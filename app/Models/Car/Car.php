<?php

namespace App\Models\Car;

use App\Models\Model;
use Illuminate\Http\Request;

class Car extends Model
{
    protected $table = 'wutao_car_info';
    protected $guarded = [];
    public $timestamps = false;

    public function getList(Request $request)
    {
        return self::all();
    }
}
