<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * 获取消息列表
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function messages(Request $request)
    {
        $messages = (new Message())->getMessagesForAdmin($request);

        return view('Admin.message', ['messages' => $messages]);
    }

    /**
     * 获取某个消息
     *
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return (new Message())->show($id);
    }

    /**
     * 创建或更新消息信息
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        if ($request->get('reply')) {
            $only = ['reply'];
        } elseif($request->exists('can_show')) {
            $only = ['can_show'];
        }
        return (new Message())
                ->store(collect($request->input())
                ->only($only), $request->get('id'));
    }
}
