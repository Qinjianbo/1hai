<?php
namespace App\Http\Logic\Car;

use App\Models\User\User as UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class User
{
    /**
     * 获取用户列表
     *
     * @param Request $request
     *
     * @return Collection
     */
    public function getList(Request $request) : Collection
    {
        return (new UserModel())->getList($request);
    }

    public function show($id)
    {
        return (new UserModel())->show($id );
    }

    public function getUsersForAdmin(Request $request)
    {
        return UserModel::paginate(20);
    }
}