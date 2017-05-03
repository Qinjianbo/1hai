<?php

namespace App\Models\City;

use App\Models\Model;

class City extends Model
{
    protected $table = 'wutao_city';
    protected $guarded = [];
    public $timestamps = false;

    public function getList(Request $request)
    {
        return self::all();
    }
}
