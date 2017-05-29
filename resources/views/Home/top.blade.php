<div class="top">
    <div class="container">
        <div class="top_l fl">
            @if(session('user') && !session('user')->isEmpty())
                <ul class="clearfix">
                    <li>欢迎会员：<a href="/center/{{ session('user')['id'] ?? 0 }}" id="center" target="_blank">{{ session('user')['realname'] ?? '一嗨会员' }}</a></li>
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