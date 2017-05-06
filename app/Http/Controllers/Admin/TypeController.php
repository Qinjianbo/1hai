<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * 获取类型列表
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function types(Request $request)
    {
        if ($request->get('all')) {
            $types = (new Type())->getList($request);
            echo $types;
            exit;
        }
        $types = (new Type())->getTypesForAdmin($request);

        return view('Admin.type', ['types' => $types]);
    }

    /**
     * 获取某个类型信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new Type())->show($id);
    }

    /**
     * 创建或更新类型信息
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        return (new Type())
            ->store(collect($request->input())
                ->only(['type_name']), $request->get('id'));
    }

    /**
     * 删除某类型
     *
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return (new Type())->delete($id);
    }
}
