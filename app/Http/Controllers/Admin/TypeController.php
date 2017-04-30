<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function types(Request $request)
    {
        $types = (new Type())->getTypesForAdmin($request);

        return view('Admin.type', ['types' => $types]);
    }

    public function show($id)
    {
        return (new Type())->show($id);
    }
}
