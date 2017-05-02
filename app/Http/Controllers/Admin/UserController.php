<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 获取用户列表
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function users(Request $request)
    {
        $users = (new User())->getUsersForAdmin($request);

        return view('Admin.user', ['users' => $users]);
    }

    /**
     * 获取某个用户的信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new User())->show($id);
    }

    /**
     * 审核通过或使失效
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function changeEnabled(Request $request, $id)
    {
        return (new User())
            ->store(collect($request->input())
                ->only(['enabled']), $id);
    }
}
