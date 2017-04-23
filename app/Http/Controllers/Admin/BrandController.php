<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brands(Request $request)
    {
        $brands = (new Brand())->getBrandsForAdmin($request);

        return view('Admin.brand', ['brands' => $brands]);
    }

    public function show($id)
    {
        return (new Brand())->show($id);
    }
}