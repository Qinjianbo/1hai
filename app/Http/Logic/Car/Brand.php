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

    /**
     * 根据Id 获取品牌信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new BrandModel())->show($id);
    }

    /**
     * 后台分页获取品牌信息
     *
     * @param Request $request
     * @return mixed
     */
    public function getBrandsForAdmin(Request $request)
    {
        return BrandModel::paginate(20);
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
        return (new BrandModel())->store($input, $id);
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
        return (new BrandModel())->where('id', $id)->delete();
    }
}
