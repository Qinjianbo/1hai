<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Support\Collection;

class Model extends BaseModel
{
    /**
     * 根据Id获取指定数据
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return self::find($id);
    }

    /**
     * 更新或创建数据
     *
     * @param Collection $input
     * @param $id
     *
     * @return mixed
     */
    public function store(Collection $input, $id)
    {
        if ($id > 0) {
            $input->put('updated_at', time());
            $this->findOrFail($id)->update($input->toArray());
        } else {
            $input->put('created_at', time());
            $input->put('updated_at', time());
            $id = $this->create($input->toArray())->{$this->primaryKey};
        }

        return $id;
    }
}
