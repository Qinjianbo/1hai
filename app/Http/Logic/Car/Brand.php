<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Brand as BrandModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class Brand
{
    /**
     * 获取品牌列表
     *
     * @param Request $request
     *
     * @return Collection
     */
    public function getList(Request $request) : Collection
    {
        return (new BrandModel())->getList($request);
    }
}