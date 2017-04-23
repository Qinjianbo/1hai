<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Property as PropertyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class Property
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
        return (new PropertyModel())->getList($request);
    }

    public function show($id)
    {
        return (new PropertyModel())->show($id);
    }

    public function getPropertiesForAdmin(Request $request)
    {
        return PropertyModel::paginate(20);
    }
}