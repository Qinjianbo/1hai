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
                <li class="active"><a href="/admin/shopCarCityList">租售信息管理</a></li>
                <li class=""><a href="/admin/orderList">订单信息管理</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <!--头部搜索及新增按钮 -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row" data-id="1" id="nowPage">
                        <div class="col-md-6">
                        </div>

                        <div class="col-md-4 col-md-offset-2">
                            <ul class="nav navbar-nav">
                                <li><a id="add" class="btn btn-default">新增店铺信息</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--车辆信息体-->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>店铺名称</th>
                    <th>所在城市</th>
                    <th>车辆名称</th>
                    <th>租赁价格</th>
                    <th>创建时间</th>
                    <th>操作</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($rents as $key => $rent)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ isset($shops[$rent->shop_id]) ? $shops[$rent->shop_id]->shop_name : '' }}</td>
                        <td>{{ isset($cities[$rent->city_id]) ? $cities[$rent->city_id]->city_name : '' }}</td>
                        <td>{{ isset($cars[$rent->car_id]) ? $cars[$rent->car_id]->name : '' }}</td>
                        <td>{{ $rent->price }}</td>
                        <td>{{ date('Y-m-d H:i:s', $rent->created_at) }}</td>
                        <td><a id="edit" href="javascript:;" style="cursor:pointer" onclick="edit({{ $rent->id }})">编辑</a></td>
                        <td><a id="delete" href="javascript:;" style="cursor:pointer" onclick="deleteRent({{ $rent->id }})">删除</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <!--分页导航-->
            {{ $rents->links() }}

            <!--增加和修改的模态框-->
            <div class="modal" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            编辑/新增租售信息
                        </div>
                        <div class="modal-body">
                            <form role="form" id="rent_form" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="shops">店铺名称</label>
                                    <select class="form-control" id="shops" name="shop_id">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cities">城市名称</label>
                                    <select class="form-control" id="cities" name="city_id">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cars">车辆名称</label>
                                    <select class="form-control" id="cars" name="car_id">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">租赁价格:</label>
                                    <input type="text" name="price" id="price" class="form-control" placeholder="请输入租赁价格">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-primary" id="save">保存</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--<script src="/Public/js/car/car.js"></script>-->
            <script type="application/javascript">
                function deleteRent(id) {
                    $.ajax({
                        url:"/admin/shopCarCity/delete/" + id,
                        data:{
                        },
                        type:"get",
                        dataType:"json",
                        success:function (data) {
                            if (data) {
                                alert("删除成功");
                                location.reload();
                            } else {
                                alert("删除失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("操作失败，请稍后重试");
                        }
                    });
                }
                function edit(id) {
                    $.ajax({
                        type: "get",
                        url: "/admin/shopCarCity/" + id,
                        data: {},
                        dataType: "json",
                        success: function (data) {
                            if (data == null) {
                                alert('没有对应信息');
                            } else {
                                $("#id").val(data.id);
                                $("#price").val(data.price);
                                $("#shops").html(null);
                                $("#cars").html(null);
                                $("#cities").html(null);
                                getShops(data.shop_id);
                                getCars(data.car_id);
                                getCities(data.city_id);
                                var nowPage = $('#nowPage').attr('data-id');
                                $('#mymodal').modal();
                            }
                        }
                    })
                }
                $('#add').click(function () {
                    $('#mymodal input').val(null);
                    $("#shops").html(null);
                    $("#cars").html(null);
                    $("#cities").html(null);
                    getShops();
                    getCars();
                    getCities();
                    var nowPage = $('#nowPage').attr('data-id');
                    $('#mymodal').modal();
                });

                $('#save').click(function(){
                    $.ajax({
                        url:"/admin/shopCarCity/store",
                        type:"post",
                        dataType:"json",
                        data:$("#rent_form").serialize(),
                        success:function (data) {
                            if (data) {
                                alert("添加或修改成功");
                                location.reload();
                            } else {
                                alert("添加或修改失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("操作失败，请稍后重试");
                        }
                    });
                });
                function getShops(shop_id) {
                    $.ajax({
                        url:"/admin/shops",
                        type:"get",
                        dataType:"json",
                        data:{
                            all:1
                        },
                        success:function (data) {
                            var shops = $("#shops");
                            console.log(data);
                            for(var i = 0; i < data.length; i++){
                                var option = $("<option></option>");
                                option.attr("id", data[i].id);
                                option.attr("name", "shop_id");
                                option.attr("value", data[i].id);
                                option.html(data[i].shop_name);
                                if (shop_id == data[i].id) {
                                    option.attr("selected", "selected");
                                }
                                if (shop_id == undefined && i == 0) {
                                    option.attr("selected", "selected");
                                }
                                shops.append(option);
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                };
                function getCities(city_id) {
                    $.ajax({
                        url:"/admin/cities",
                        type:"get",
                        dataType:"json",
                        data:{
                            all:1
                        },
                        success:function (data) {
                            var cities = $("#cities");
                            console.log(data);
                            for(var i = 0; i < data.length; i++){
                                var option = $("<option></option>");
                                option.attr("id", data[i].id);
                                option.attr("name", "city_id");
                                option.attr("value", data[i].id);
                                option.html(data[i].city_name);
                                if (city_id == data[i].id) {
                                    option.attr("selected", "selected");
                                }
                                if (city_id == undefined && i == 0) {
                                    option.attr("selected", "selected");
                                }
                                cities.append(option);
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                };
                function getCars(car_id) {
                    $.ajax({
                        url:"/admin/cars",
                        type:"get",
                        dataType:"json",
                        data:{
                            all:1
                        },
                        success:function (data) {
                            var cars = $("#cars");
                            console.log(data);
                            for(var i = 0; i < data.length; i++){
                                var option = $("<option></option>");
                                option.attr("id", data[i].id);
                                option.attr("name", "car_id");
                                option.attr("value", data[i].id);
                                option.html(data[i].name);
                                if (car_id == data[i].id) {
                                    option.attr("selected", "selected");
                                }
                                if (car_id == undefined && i == 0) {
                                    option.attr("selected", "selected");
                                }
                                cars.append(option);
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