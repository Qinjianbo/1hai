<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function properties(Request $request)
    {
        $properties = (new Property())->getPropertiesForAdmin($request);

        return view('Admin.property', ['properties' => $properties]);
    }

    public function show($id)
    {
        return (new Property())->show($id);
    }
}
