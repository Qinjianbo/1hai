<?php
namespace App\Http\Logic\Car;

use App\Models\Car\Photo as PhotoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Photo
{
    /**
     * 获取品牌列表
     *
     * @param Request $request
     *
     * @return Collection
     */
    public function getList(Request $request) : Collection
    {
        return (new PhotoModel())->getList($request);
    }

    public function show($id)
    {
        return (new PhotoModel())->show($id);
    }

    public function getPhotosForAdmin(Request $request)
    {
        return PhotoModel::paginate(20);
    }
}
