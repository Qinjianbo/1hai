<?php

namespace App\Models\Shop;

use App\Models\Model;
use Illuminate\Http\Request;

class Shop extends Model
{
    protected $table = 'wutao_shop';
    protected $guarded = [];
    public $timestamps = false;

    public function getList(Request $request)
    {
        return self::all();
    }
}
