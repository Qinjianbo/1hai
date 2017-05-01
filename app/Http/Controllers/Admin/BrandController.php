<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * 获取品牌列表
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function brands(Request $request)
    {
        $brands = (new Brand())->getBrandsForAdmin($request);

        return view('Admin.brand', ['brands' => $brands]);
    }

    /**
     * 获取某个品牌信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new Brand())->show($id);
    }

    /**
     * 创建或更新品牌
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        return (new Brand())
                ->store(collect($request->input())
                ->only(['brand_name']), $request->get('id'));
    }

    /**
     * 删除某品牌
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        return (new Brand())->delete($id);
    }
}
