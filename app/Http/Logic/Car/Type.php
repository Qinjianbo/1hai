<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Type as TypeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Type
{

    /**
     * 获取类型列表
     *
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getList(Request $request)
    {
        return (new TypeModel())->getList($request);
    }

    /**
     * 根据Id 获取类型信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new TypeModel())->show($id);
    }

    /**
     * 分页获取类型列表
     *
     * @param Request $request
     * @return mixed
     */
    public function getTypesForAdmin(Request $request)
    {
        return TypeModel::paginate(20);
    }

    /**
     * 创建或更新类型信息
     *
     * @param Collection $input
     * @param $id
     * @return mixed
     */
    public function store(Collection $input, $id)
    {
        return (new TypeModel())->store($input, $id);
    }

    /**
     * 删除某类型信息
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return (new TypeModel())->where('id', $id)->delete();
    }
}
