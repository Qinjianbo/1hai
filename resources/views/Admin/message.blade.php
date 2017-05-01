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
                <li class=""><a href="/admin/properties">车辆属性管理</a></li>
                <li class=""><a href="/admin/photos">车辆图片管理</a></li>
                <li class=""><a href="/admin/users">用户信息管理</a></li>
                <li class="active"><a href="/admin/messages">留言信息管理</a></li>
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
                    <th>所属类型</th>
                    <th>所属品牌</th>
                    <th>创建时间</th>
                    <th>操作</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $key => $car)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $car->name }}</td>
                        <td>{{ $type[$car->typeid]->type_name }}</td>
                        <td>{{ $brands[$car->brandid]->brand_name }}</td>
                        <td>{{ $car->created_at }}</td>
                        <td><a id="edit" href="javascript:;" style="cursor:pointer" onclick="edit({{ $car->id }})">编辑</a></td>
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
                                <input type="text" hidden="" name="id">
                                <div class="form-group">
                                    <label for="modelName">名称:</label>
                                    <input type="text" name="carName" id="carName" class="form-control" placeholder="请输入车辆名称">
                                </div>
                                <div class="form-group">
                                    <label for="priceRange">价格区间:</label>
                                    <input type="text" name="priceRange" id="priceRange" class="form-control" placeholder="请输入价格区间">
                                </div>
                                <div class="form-group">
                                    <label for="allSpell">全拼</label>
                                    <input type="text" name="allSpell" id="allSpell" class="form-control" placeholder="请输入车型全拼">
                                </div>
                                <div class="form-group">
                                    <label for="source">来源</label>
                                    <input type="text" name="source" id="source" class="form-control" placeholder="请输入信息来源">
                                </div>
                                <div class="form-group">
                                    <label for="brief">简介</label>
                                    <textarea id="brief" name="brief" rows="5" class="form-control" placeholder="请输入简介内容"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="thumbnail">缩略图</label>
                                    <input type="file" id="thumbnail" name="thumbnail" class="form-control" placeholder="请选择图片">
                                    <img src="" style="width:100px;" name="thumbnail">
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
                                $('#mymodal input[name="id"]').val(data['id']);
                                $('#mymodal input[name="modelName"]').val(data['modelname']);
                                $('#mymodal input[name="priceRange"]').val(data['pricerange']);
                                $('#mymodal input[name="allSpell"]').val(data['allspell']);
                                $('#mymodal input[name="source"]').val(data['source']);
                                $('#mymodal textarea[name="brief"]').text(data['brief']);
                                var thumbnail = "http://www.boboidea.com/Uploads/car/thumbnail/"+data['id']+"/"+data['thumbnail'];
                                $('#mymodal img[name="thumbnail"]').attr('src', thumbnail);
                                var nowPage = $('#nowPage').attr('data-id');
                                $('#carform').attr('action',"/admin/car/addorupdatecar.html?nowPage="+nowPage);
                                $('#mymodal').modal();
                            }
                        }
                    })
                }
                $('#add').click(function () {
                    $('#mymodal input').val(null);
                    $('#mymodal textarea').val(null);
                    $('#mymodal img').attr('src', '');
                    var nowPage = $('#nowPage').attr('data-id');
                    $('#carform').attr('action',"/admin/car/addorupdatecar/nowPage/%2BnowPage%2B.html");
                    $('#mymodal').modal();
                });

                $('#save').click(function(){
                    $('#mymodal form').submit();
                });
            </script>

        </div>
    </div>
</div>
</body>
</html>