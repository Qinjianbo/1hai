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
<div class="top">
    <div class="container">
        <div class="top_l fl">
            @if(session('user') && !session('user')->isEmpty())
                <ul class="clearfix">
                    <li>欢迎会员：<a href="javascript:void(0)" id="center">{{ session('user')['realname'] ?? '一嗨会员' }}</a></li>
                    <li><a href="/user/logout" id="logout">退出</a></li>
                </ul>
            @else
                <ul class="clearfix">
                    <li><a href="/login">登录</a></li>
                    <li><a href="/register">免费注册</a></li>
                </ul>
            @endif
        </div>
        <div class="top_r fr">
            <ul class="clearfix">
                <li><a href="/message">精彩提问</a></li>
                <li><a href="/about">关于我们</a></li>
                <li><a href="/contact">联系我们</a></li>
                <li><a href="/help">帮助中心</a></li>
                <li><a href="">400-888-6608</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="left">
        <ul>
            <li class="{{ $personal ?? '' }}"><a href="/center/{{ cookie('user') }}">个人信息</a></li>
            <li class="{{ $password ?? '' }}"><a href="/index.php/PersonalCenter/toChangePwd.html">修改密码</a></li>
            <li class="{{ $order ?? '' }}"><a href="/index.php/PersonalCenter/toChangePwd.html">我的订单</a></li>
        </ul>
    </div>
    <div class="right">
        <!--个人信息div-->
        <div class="center personal-info {{ $personal_hide ?? '' }}">
            <form id="info_form">
                <label>真实姓名</label>
                <input type="text" name="realname" id="realname" value="{{ $user->realname }}"><br>
                <label>手机号码</label>
                <input type="text" name="mobile" id="mobile" value="{{ $user->username }}"><br>
                <label>身份证号</label>
                <input type="text" name="mobile" id="mobile" value="{{ $user->idcard }}"><br>
            </form>
            <button class="btn btn-danger" id="{{ $user->id }}" onclick="submitInfo(this.id)">修改个人信息</button>
        </div>
        <!--密码信息div-->
        <div class="center password {{ $password_hide ?? ''}}">
            <form id="password_form">
                <label>原密码</label>
                <input type="password" name="prepwd" id="oldpwd"><br>
                <label>新密码</label>
                <input type="password" name="newpwd" id="newpwd"><br>
                <label>再次输入新密码</label>
                <input type="password" name="secnewpwd" id="secnewpwd"><br>
                <button type="reset" class="btn btn-default">重置</button>
            </form>
            <button class="btn btn-danger" id="1" onclick="changePwd(this.id)">确认修改密码
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
            </table>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--尾部	-->
<div class="footer">
    <div class="container">
        <div class="advantage">
            <ul class="clearfix">
                <li>{{ $cityCount }}座城市</li>
                <li>{{ $shopCount }}服务网点</li>
                <li>{{ $carCount }}种车型</li>
                <li>24小时服务</li>
                <li>国际租车</li>
            </ul>
        </div>
    </div>
    <div>
        <p>版权所有&copy吴涛租车平台</p>
    </div>
</div>
<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/index/index.js" ></script>
<script type="text/javascript" src="/js/libs/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/inout.js"></script>
<script type="text/javascript">
    $(document).ready((function () {
        $(".type-box a").click(function(){
            $(this).css({"background":"blue","color":"white"});
        });
        $(".brand-box-list a").click(function(){
            $(this).css({"background":"blue","color":"white"});
        });
        $(".order-btn").click(function () {
            var id = $(this).attr("data-title");
            $.ajax({
                url:"/order",
                type:"post",
                data:{
                    id:id
                },
                dataType:"json",
                success:function (data) {
                    if (data.status == 1) {
                        alert("预订成功,稍后将有工作人员与您进行联系");
                    } else if (data.status == 2) {
                        alert(data.errorMsg);
//                                window.location.href = "/login";
                    } else if (data.status == 3) {
                        alert(data.errorMsg);
//                                window.location.href = "/self";
                    } else {
                        console.log(data.responseText);
                    }
                },
                error:function (data) {
                    console.log(data.responseText);
                    alert("出错了，请稍后再试");
                }
            })
        })
    }));
</script>
</body>
</html>
