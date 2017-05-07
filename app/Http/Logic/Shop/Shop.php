<?php
namespace App\Http\Logic\Shop;

use App\Models\Shop\Shop as ShopModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Shop
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
        return (new ShopModel())->getList($request);
    }

    /**
     * 根据Id 获取品牌信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new ShopModel())->show($id);
    }

    /**
     * 后台分页获取品牌信息
     *
     * @param Request $request
     * @return mixed
     */
    public function getShopsForAdmin(Request $request)
    {
        return ShopModel::paginate(20);
    }

    /**
     * 创建或更新品牌信息
     *
     * @param Collection $input
     * @param $id
     * @return mixed
     */
    public function store(Collection $input, $id)
    {
        return (new ShopModel())->store($input, $id);
    }

    /**
     * 删除某品牌
     *
     * @param int $id
     *
     * @return int
     */
    public function delete($id)
    {
        return (new ShopModel())->where('id', $id)->delete();
    }
}
