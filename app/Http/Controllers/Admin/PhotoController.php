<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\Car\Info;
use App\Http\Logic\Car\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function photos(Request $request)
    {
        $photos = (new Photo())->getPhotosForAdmin($request);
        $cars = (new Info())->getList($request);

        return view('Admin.photo', ['photos' => $photos, 'cars' => $cars]);
    }

    public function show($id)
    {
        return (new Photo())->show($id);
    }
}