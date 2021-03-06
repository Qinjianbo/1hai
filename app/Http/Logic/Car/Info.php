<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Car as CarModel;
use App\Models\Car\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Info
{
    public function getList(Request $request) : Collection
    {
        return (new CarModel())->getList($request);
    }
    /**
     * 获取车辆信息（后台使用）
     *
     * @param Request $request
     * @return mixed
     */
    public function getCarForAdmin(Request $request)
    {
        return Car::paginate(20);
    }
    /**
     * 获取某车辆信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return Car::where('id', $id)->first();
    }

    public function store(Collection $input, $id)
    {
        return (new CarModel())->store($input, $id);
    }
}
