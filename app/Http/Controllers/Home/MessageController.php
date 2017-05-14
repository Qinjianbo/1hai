<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Logic\User\Message;
use Illuminate\Http\Request;

/**
 * 留言控制情
 *
 *
 */
class MessageController extends Controller
{
    public function store(Request $request)
    {
        $only = [
            'mobile'   => 'mobile',
            'message'  => 'message',
            'realname' => 'realname',
            'eamil'    => 'email',
            'qq'       => 'qq',
            'wechat'   => 'wechat',
        ];
        return (new Message())
            ->store(collect($request->input())
                ->only($only), $request->get('id'));
    }
}
