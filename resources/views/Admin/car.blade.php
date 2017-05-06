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
                <li class="active"><a href="/admin/cars" id="car">车辆信息管理</a></li>
                <li class=""><a href="/admin/types">车辆类型管理</a></li>
                <li class=""><a href="/admin/brands">车辆品牌管理</a></li>
                <li class=""><a href="/admin/properties">车辆属性管理</a></li>
                <li class=""><a href="/admin/users">用户信息管理</a></li>
                <li class=""><a href="/admin/messages">留言信息管理</a></li>
                <li class=""><a href="/admin/shops">门店信息管理</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <!--头部搜索及新增按钮 -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row" data-id="1" id="nowPage">
                        <div class="col-md-6">
                            <form action="/admin/car/search" class="navbar-form bavbar-left" role="search" method="get">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="请输入搜索关键词" name="keyword">
                                </div>
                                <button type="submit" class="btn btn-default">搜索</button>
                            </form>
                        </div>

                        <div class="col-md-4 col-md-offset-2">
                            <ul class="nav navbar-nav">
                                <li><a id="add" class="btn btn-default">新增车辆信息</a></li>
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
                    <th>名字</th>
                    <th>车辆属性</th>
                    <th>所属类型</th>
                    <th>所属品牌</th>
                    <th>创建时间</th>
                    <th colspan="3">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $key => $car)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $car->properties }}</td>
                        <td>{{ isset($type[$car->typeid])?$type[$car->typeid]->type_name:'' }}</td>
                        <td>{{ isset($brands[$car->brandid])?$brands[$car->brandid]->brand_name:'' }}</td>
                        <td>{{ $car->created_at }}</td>
                        <td><a id="edit" href="javascript:;" style="cursor:pointer" onclick="edit({{ $car->id }})">编辑</a></td>
                        <td><a id="check_photo" href="javascript:;" style="cursor:pointer" onclick="check_photo({{ $car->car_photo_path }})">查看图片</a></td>
                        <td>
                            <a id="delete" style="cursor:pointer" href="javascript:;" onclick="changeValid({{ $car->id }})">
                                @if ($car->valid == 1)
                                    使失效
                                @elseif ($car->valid == 0)
                                    使有效
                                @endif
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <!--分页导航-->
            {{ $cars->links() }}

            <!--增加和修改的模态框-->
            <div class="modal" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            编辑/新增车辆信息
                        </div>
                        <div class="modal-body">
                            <form role="form" id="carform" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="name">车辆名称:</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="请输入车辆名称">
                                </div>
                                <div class="form-group">
                                    <label for="properties">车辆属性:</label>
                                    <input type="text" name="properties" id="properties" class="form-control" placeholder="请输入车辆属性(多个用英文','隔开)">
                                </div>
                                <div class="form-group">
                                    <label for="types">所属分类</label>
                                    <select class="form-control" id="types" name="types">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="brands">所属品牌</label>
                                    <select class="form-control" id="brands" name="brands">
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="thumbnail">缩略图</label>
                                    <input type="file" id="thumbnail" name="thumbnail" class="form-control" placeholder="请选择图片" onchange="doUpload()">
                                    <input type="hidden" id="thumbnail_path" name="thumbnail_path" value="">
                                    <img src="" alt="暂时无图片" id="thumbnail_src"/>
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
                function changeValid(id) {
                    alert(id);
                }
                function edit(id) {
                    $.ajax({
                        type: "get",
                        url: "/admin/car/" + id,
                        data: {},
                        dataType: "json",
                        success: function (data) {
                            if (data == null) {
                                alert('没有对应信息');
                            } else {
                                $("#id").val(data.id);
                                $("#name").val(data.name);
                                $("#properties").val(data.properties);
                                console.log(data);
                                $('#brands').html(null);
                                $("#types").html(null);
                                getBrands(data.brandid);
                                getTypes(data.typeid);
                                var nowPage = $('#nowPage').attr('data-id');
                                $('#mymodal').modal();
                            }
                        }
                    })
                }
                $('#add').click(function () {
                    $('#mymodal input').val(null);
                    $('#brands').html(null);
                    $("#types").html(null);
                    getBrands();
                    getTypes();
                    $('#mymodal').modal();
                });

                $('#save').click(function(){
                    $.ajax({
                        url:"/admin/car/store",
                        type:"POST",
                        dataType:"json",
                        data:$("#carform").serialize(),
                        success:function (data) {
                            console.log(data.responseText);
                            if (data == null) {
                                alert("添加或修改失败");
                            } else {
                                alert("添加或修改成功");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                });
                function getBrands(car_brand_id) {
                    $.ajax({
                        url:"/admin/brands",
                        type:"get",
                        dataType:"json",
                        data:{
                            all:1
                        },
                        success:function (data) {
                            var brands = $("#brands");
                            console.log(data);
                            for(var i = 0; i < data.length; i++){
                                var option = $("<option></option>");
                                option.attr("id", data[i].id);
                                option.attr("name", "brandid");
                                option.attr("value", data[i].id);
                                option.html(data[i].brand_name);
                                if (car_brand_id == data[i].id) {
                                    option.attr("selected", "selected");
                                }
                                if (car_brand_id == undefined && i == 0) {
                                    option.attr("selected", "selected");
                                }
                                brands.append(option);
                            }

                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                };
                function getTypes(car_type_id) {
                    $.ajax({
                        url:"/admin/types",
                        type:"get",
                        dataType:"json",
                        data:{
                            all:1
                        },
                        success:function (data) {
                            var types = $("#types");
                            console.log(data);
                            for(var i = 0; i < data.length; i++){
                                var option = $("<option></option>");
                                option.attr("id", data[i].id);
                                option.attr("name", "typeid");
                                option.attr("value", data[i].id);
                                option.html(data[i].type_name);
                                if (car_type_id == data[i].id) {
                                    option.attr("selected", "selected");
                                }
                                if (car_type_id == undefined && i == 0) {
                                    option.attr("selected", "selected");
                                }
                                types.append(option);
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                };
                function doUpload() {
                    var formData = new FormData($("#thumbnail"));
                    $.ajax({
                        url: '/upload' ,
                        type: 'get',
                        data:formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {
                            console.log('上传图片完成');
                            $("#thumbnail_path").val(data);
                            $("#thumbnail_src").attr('src', data);
                        },
                        error: function (data) {
                            console.log(data.responseText);
                        }
                })
                }
            </script>

        </div>
    </div>
</div>
</body>
</html>