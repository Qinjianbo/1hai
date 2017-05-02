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
    
    /**
     * 创建或更新属性信息
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        return (new Property())
            ->store(collect($request->input())
                ->only(['property_name']), $request->get('id'));
    }

    public function delete($id)
    {
        return (new Property())->delete($id);
    }
}
