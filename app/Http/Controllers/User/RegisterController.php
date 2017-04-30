<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Register;
use App\Models\User\User;
use Illuminate\Http\Request;
use App\Jobs\SendRegisterEmail;
use Validator;
use Illuminate\support\Collection;

class RegisterController extends Controller
{
    /**
     * doRegister 注册
     *
     * @param $request
     *
     * @return Collection
     */
    public function doRegister(Request $request): Collection
    {
        $userTableName = (new User())->getTable();
        $rules = ['username' => "required|digits:11|unique:{$userTableName},username"];
        $rules['password'] = 'required|alpha_dash';
        $rules['realname'] = 'required|string';
//        $rules['captcha'] = 'required|captcha';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return collect(['message' => $validator->messages(), 'errCode' => 1, 'data' => []]);
        }
        $registorLogic = new Register();
        if ($registorLogic->doRegisterByMobile($request)) {
            return collect(['message' => '注册成功', 'errCode' => 0, 'data' => []]);
        } else {
            return collect(['message' => '注册失败', 'errCode' => 1, 'data' => []]);
        }
    }
}
