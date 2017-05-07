<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Shop\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * 获取品牌列表
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function Shops(Request $request)
    {
        $shops = (new Shop())->getShopsForAdmin($request);

        return view('Admin.shop', ['shops' => $shops]);
    }

    /**
     * 获取某个品牌信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new Shop())->show($id);
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
        return (new Shop())
                ->store(collect($request->input())
                ->only(['shop_name']), $request->get('id'));
    }

    /**
     * 删除某品牌
     *
     * @param int $id
     * @return mixed
     */
    public function delete($id)
    {
        return (new Shop())->delete($id);
    }
}
