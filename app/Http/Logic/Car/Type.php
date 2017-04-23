<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Type as TypeModel;
use Illuminate\Http\Request;

class Type
{

    public function getList(Request $request)
    {
        return (new TypeModel())->getList($request);
    }
}