<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\support\Collection;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('Admin.index');
    }
}