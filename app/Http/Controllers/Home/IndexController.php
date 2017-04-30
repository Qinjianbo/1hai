<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
/**
 * 首页控制情
 *
 * 
 */
class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('Home.index');
    }
}
