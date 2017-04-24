<?php

namespace App\Http\Controller\User;

use Illuminate\Http\Request;
use App\User;

class PasswordController
{
    /**
     * change password
     *
     * @param $request
     *
     * @return Collection
     */
    public function change(Request $request): Collection
    {
        $rules = [
            'username' => 'required',
            'password' => 'required|alpha_dash',
            'new'  => 'required|alpha_dash'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return collect($validator->messages());
        }
                $criteria = [
                        'username' => $request->input('username'),
                        'password' => md5($request->input('password'))
                ];
                if ($user = User::where($criteria)->first()) {
                    $passLogic = new Password();
                    if ($passLogic->doChange($request, $user)) {
                        return collect(['code' => 200]);
                    } else {
                        return collect(['err' => 'Changing password failed!']);
                    }
                } else {
                        return collect(['err' => 'The original password is wrong!']);
                }

    }
}
