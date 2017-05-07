<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Rent as RentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Rent
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
        return (new RentModel())->getList($request);
    }

    /**
     * 根据Id 获取品牌信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new RentModel())->show($id);
    }

    /**
     * 后台分页获取品牌信息
     *
     * @param Request $request
     * @return mixed
     */
    public function getRentsForAdmin(Request $request)
    {
        return RentModel::paginate(20);
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
        return (new RentModel())->store($input, $id);
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
        return (new RentModel())->where('id', $id)->delete();
    }
}
