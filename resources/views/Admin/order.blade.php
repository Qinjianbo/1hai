<html>
<head>
    <title>吴涛租车平台后台登录</title>
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap.min.css">
    <script type="application/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
    <script src="/js/libs/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-inverse" role="navigation">
    　<div class="navbar-header" style="margin-left:100px">
        　    <a href="javascript:;" class="navbar-brand">吴涛租车平台后台管理系统</a>
        　</div>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="">当前管理员:{{ Session::get('username') }}</a></li>
        <li style="margin-right: 10px;"><a href="/admin/logout">退出登陆</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked" id="nav">
                <li class=""><a href="/admin/cars" id="car">车辆信息管理</a></li>
                <li class=""><a href="/admin/types">车辆类型管理</a></li>
                <li class=""><a href="/admin/brands">车辆品牌管理</a></li>
                {{--<li class=""><a href="/admin/properties">车辆属性管理</a></li>--}}
                <li class=""><a href="/admin/users">用户信息管理</a></li>
                <li class=""><a href="/admin/messages">留言信息管理</a></li>
                <li class=""><a href="/admin/shops">门店信息管理</a></li>
                <li class=""><a href="/admin/shopCarCityList">租售信息管理</a></li>
                <li class="active"><a href="/admin/orderList">订单信息管理</a></li>                           </ul>
        </div>
        <div class="col-md-10">
            <!--头部搜索及新增按钮 -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row" data-id="1" id="nowPage">
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>
            <!--车辆信息体-->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>订单id</th>
                    <th>订单状态</th>
                    <th>用户姓名</th>
                    <th>联系电话</th>
                    <th>店铺名称</th>
                    <th>车辆名称</th>
                    <th>价格</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $key => $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>
                            @if($order->status == 1)
                                下单成功
                            @elseif($order->status == 2)
                                付款成功
                            @elseif($order->status == 3)
                                订单已取消
                            @else
                                订单已完成
                            @endif
                        </td>
                        <td>{{ $users[$order['user_id']]->realname }}</td>
                        <td>{{ $users[$order['user_id']]->username }}</td>
                        <td>{{ $rents[$order['rent_id']]->shop_name }}</td>
                        <td>{{ $rents[$order['rent_id']]->name }}</td>
                        <td>{{ $rents[$order['rent_id']]->price }}</td>
                        <td>{{ date('Y-m-d H:i:s', $order->created_at) }}</td>
                        @if($order->status == 3)
                            <td>订单已取消</td>
                            @elseif($order->status == 4)
                            <td>订单已完成</td>
                            @elseif($order->status == 1)
                            <td>
                                <a href="javascript:;" onclick="changePayed({{$order->id}})">变为已付款</a>
                            </td>
                            @elseif($order->status == 2)
                            <td>
                                <a href="javascript:;" onclick="finishOrder({{ $order->id }})">变为已完成</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <!--分页导航-->
            {{ $orders->links() }}

            <script type="application/javascript">
                function changePayed(id) {
                    $.ajax({
                        url:"/admin/order/changePayed",
                        type:"get",
                        dataType:"json",
                        data:{
                            id:id,
                        },
                        success:function (data) {
                            if (data) {
                                alert("操作成功");
                                window.location.reload();
                            } else {
                                alert("操作失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                }

                function finishOrder(id) {
                    $.ajax({
                        url:"/admin/order/finishOrder",
                        type:"get",
                        dataType:"json",
                        data:{
                           id:id
                        },
                        success:function (data) {
                            if (data) {
                                alert("操作成功");
                                window.location.reload();
                            } else {
                                alert("操作失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                };
            </script>

        </div>
    </div>
</div>
</body>
</html>