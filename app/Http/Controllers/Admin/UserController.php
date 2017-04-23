<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users(Request $request)
    {
        $users = (new User())->getUsersForAdmin($request);

        return view('Admin.user', ['users' => $users]);
    }

    public function show($id)
    {
        return (new User())->show($id);
    }
}