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
                <li class="active"><a href="/admin/brands">车辆品牌管理</a></li>
                <li class=""><a href="/admin/properties">车辆属性管理</a></li>
                <li class=""><a href="/admin/photos">车辆图片管理</a></li>
                <li class=""><a href="/admin/users">用户信息管理</a></li>
                <li class=""><a href="/admin/messages">留言信息管理</a></li>
                <li class=""><a href="/admin/shops">门店信息管理</a></li>
                <li class=""><a href="/admin/cities">城市信息个管理</a></li>
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
                                <li><a id="add" class="btn btn-default">新增车辆品牌信息</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--车辆品牌信息体-->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>品牌名</th>
                    <th>创建时间</th>
                    <th>操作</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $key => $brand)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td>{{ $brand->created_at }}</td>
                        <td><a id="edit" href="javascript:;" style="cursor:pointer" onclick="edit({{ $brand->id }})">编辑</a></td>
                        <td>
                            <a id="delete" style="cursor:pointer" href="javascript:;" onclick="deleteBrand({{ $brand->id }})">删除</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <!--分页导航-->
            {{ $brands->links() }}

            <!--增加和修改的模态框-->
            <div class="modal" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            编辑/新增品牌信息
                        </div>
                        <div class="modal-body">
                            <form role="form" id="carform" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="brand_name">品牌名称:</label>
                                    <input type="text" name="brand_name" id="brand_name" class="form-control" placeholder="请输入品牌名称名称">
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
                function deleteBrand(id) {
                    $.ajax({
                        type:'get',
                        url:'/admin/brand/delete/'+id,
                        dataType:'json',
                        data:{
                        },
                        success:function (data) {
                            if (data) {
                                alert('删除成功');
                            } else {
                                alert("删除失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert('请稍后重试');
                        }
                    });
                }
                function edit(id) {
                    $.ajax({
                        type: "get",
                        url: "/admin/brand/" + id,
                        data: {},
                        dataType: "json",
                        success: function (data) {
                            if (data == null) {
                                alert('没有对应信息');
                            } else {
                                $('#id').val(data.id);
                                $('#brand_name').val(data.brand_name);
                                var nowPage = $('#nowPage').attr('data-id');
                                $('#mymodal').modal();
                            }
                        }
                    })
                }
                $('#add').click(function () {
                    $('#brand_name').val(null);
                    $('#id').val(null);
                    var nowPage = $('#nowPage').attr('data-id');
                    $('#mymodal').modal();
                });

                $('#save').click(function(){
                    var id = $('#id').val();
                    var brand_name = $('#brand_name').val();
                    $.ajax({
                        type:'post',
                        dataType:'json',
                        data:{
                            id:id,
                            brand_name:brand_name
                        },
                        url:'/admin/brand/store',
                        success:function (data) {
                            if (data) {
                                alert('添加或修改成功');
                                window.location.reload();
                            } else {
                                alert('添加或修改失败');
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert('请稍后重试');
                        }
                    });
                });
            </script>

        </div>
    </div>
</div>
</body>
</html>