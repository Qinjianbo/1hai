<?php

namespace App\Http\Logic\User;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Models\User\User;

class Password
{
    /**
     * change password
     *
     * @param $request
     *
     * @return Collection
     */
    public function doChange(Request $request, User $user): Collection
    {
        $user->password = md5($request->input('password'));
        if ($user->save()) {
            return true;
        } else {
            return false;
        }
    }
}
