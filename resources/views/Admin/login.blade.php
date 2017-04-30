<html>
<head>
    <title>吴涛租车平台后台登录</title>
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap.min.css">
</head>
<body style="background: #333333">
<div class="container" style="margin: 10% auto;">
    <div class="row">
        <div class="col-xs-4"></div>
        <div class="col-xs-4" style="border: 1px solid black;padding: 10px;">
            <p class="text-center" style="font-size: 20px;color: #FFFFFF">吴涛租车平台后台登录</p>
            <form action="/admin/login" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <input type="text" name="username" placeholder="请输入用户名" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="请输入密码" class="form-control">
                </div>
                <button type="reset" class="btn btn-default pull-right">重置</button>
                <button type="submit" class="btn btn-primary pull-right" style="margin-right:10px;">登陆</button>
            </form>
            <div><p style="font-size: 20px;color: red">{{ $message }}</p></div>
        </div>
        <div class="col-xs-4"></div>
    </div>
</div>
</body>
</html>