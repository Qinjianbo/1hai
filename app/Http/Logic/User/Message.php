<?php
namespace App\Http\Logic\User;

use App\Models\User\Message as MessageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class Message
{
    /**
     * 获取消息列表
     *
     * @param Request $request
     *
     * @return Collection
     */
    public function getList(Request $request) : Collection
    {
        return (new MessageModel())->getList($request);
    }

    /**
     * 根据Id 获取消息信息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new MessageModel())->show($id);
    }

    /**
     * 后台分页获取消息信息
     *
     * @param Request $request
     * @return mixed
     */
    public function getMessagesForAdmin(Request $request)
    {
        return MessageModel::orderBy('created_at', 'desc')->orderBy('updated_at', 'desc')->paginate(20);
    }

    /**
     * 创建或更新消息信息
     *
     * @param Collection $input
     * @param $id
     * @return mixed
     */
    public function store(Collection $input, $id)
    {
        return (new MessageModel())->store($input, $id);
    }
}
