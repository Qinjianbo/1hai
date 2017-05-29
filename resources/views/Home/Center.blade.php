<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>个人中心</title>
    <link rel="stylesheet" href="/css/index/public.css" />
    <link rel="stylesheet" href="/css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/css/center/center.css">
</head>
<body>
@include('Home.top')
<div class="container">
    <div class="left">
        <ul>
            <li class="{{ $personal ?? '' }}"><a href="/center/{{ $user->id }}">个人信息</a></li>
            <li class="{{ $password ?? '' }}"><a href="/center/passwordIndex">修改密码</a></li>
            <li class="{{ $order ?? '' }}"><a href="">我的订单</a></li>
        </ul>
    </div>
    <div class="right">
        <!--个人信息div-->
        <div class="center personal-info {{ $personal_hide ?? '' }}">
            <form id="info_form">
                <label>真实姓名</label>
                <input type="text" name="realname" id="realname" value="{{ $user->realname }}"><br>
                <label>身份证号</label>
                <input type="text" name="idcard" id="idcard" value="{{ $user->idcard }}"><br>
            </form>
            <button class="btn btn-danger" data-title="{{ $user->id }}" id="changeinfobtn">修改个人信息</button>
        </div>
        <!--密码信息div-->
        <div class="center password {{ $password_hide ?? ''}}">
            <form id="password_form">
                <label>原密码</label>
                <input type="password" name="oldpwd" id="oldpwd"><br>
                <label>新密码</label>
                <input type="password" name="newpwd" id="newpwd"><br>
                <label>再次输入新密码</label>
                <input type="password" name="secnewpwd" id="secnewpwd"><br>
                <button type="reset" class="btn btn-default">重置</button>
            </form>
            <button class="btn btn-danger" data-title="{{ $user->id }}" id="changepwdbtn">确认修改密码
            </button>
        </div>

        <div class="center personal-info {{ $order_hide ?? '' }}">
            <table class="table table-bordered">
                <thead>
                <th>订单编号</th>
                <th>订单状态</th>
                <th>门店名称</th>
                <th>车辆信息</th>
                <th>租售价格</th>
                <th>操作</th>
                </thead>
                <tbody>
                @if(!$order_hide)
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--尾部	-->
@include('Home.footer')
<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/index/index.js" ></script>
<script type="text/javascript" src="/js/center/center.js"></script>
</body>
</html>
