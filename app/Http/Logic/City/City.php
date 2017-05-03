<?php
namespace App\Http\Logic\Car;

use App\Models\City\City as CityModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class City
{
    /**
     * 获取城市列表
     *
     * @param Request $request
     *
     * @return Collection
     */
    public function getList(Request $request) : Collection
    {
        return (new CityModel())->getList($request);
    }

    /**
     * 根据Id 获取城市信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new CityModel())->show($id);
    }

    /**
     * 后台分页获取城市信息
     *
     * @param Request $request
     * @return mixed
     */
    public function getCitysForAdmin(Request $request)
    {
        return CityModel::paginate(20);
    }

    /**
     * 创建或更新城市信息
     *
     * @param Collection $input
     * @param $id
     * @return mixed
     */
    public function store(Collection $input, $id)
    {
        return (new CityModel())->store($input, $id);
    }

    /**
     * 删除某城市
     *
     * @param int $id
     *
     * @return int
     */
    public function delete($id)
    {
        return (new CityModel())->where('id', $id)->delete();
    }
}
