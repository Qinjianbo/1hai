<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Property as PropertyModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Property
{
    /**
     * 获取属性列表
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

     /**
     * 创建或更新属性信息
     *
     * @param Collection $input
     * @param $id
     * @return mixed
     */
    public function store(Collection $input, $id)
    {
        return (new PropertyModel())->store($input, $id);
    }

    public function delete($id)
    {
        return (new PropertyModel())->where('id', $id)->delete();
    }
}
