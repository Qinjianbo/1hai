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
                <li class="active"><a href="/admin/users">用户信息管理</a></li>
                <li class=""><a href="/admin/messages">留言信息管理</a></li>
                <li class=""><a href="/admin/shops">门店信息管理</a></li>
                <li class=""><a href="/admin/shopCarCityList">租售信息管理</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <!--头部搜索及新增按钮 -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row" data-id="1" id="nowPage">
                        <div class="col-md-6">
                            {{--<form action="/admin/car/search" class="navbar-form bavbar-left" role="search" method="get">--}}
                                {{--<div class="form-group">--}}
                                    {{--<input type="text" class="form-control" placeholder="请输入搜索关键词" name="keyword">--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="btn btn-default">搜索</button>--}}
                            {{--</form>--}}
                        </div>

                        <div class="col-md-4 col-md-offset-2">
                            <ul class="nav navbar-nav">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--用户信息主体-->
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th>编号</th>
                    <th>真实名字</th>
                    <th>手机号码</th>
                    <th>身份证号</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->realname }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->idcard }}</td>
                        <td>{{ date('Y-m-d H:i:s', $user->created_at) }}</td>
                        <td>
                            <a id="delete" style="cursor:pointer" href="javascript:;" onclick="changeEnabled({{ $user->id }})">
                                @if ($user->enabled == 1)
                                    使失效
                                @elseif ($user->enabled == 0)
                                    审核通过
                                @endif
                            </a>
                        </td>
                        <input type="hidden" id="enabled{{ $user->id }}" value="{{ $user->enabled }}">
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <!--分页导航-->
            {{ $users->links() }}

            <!--增加和修改的模态框-->
            <div class="modal" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            身份证图片信息
                        </div>
                        <div class="modal-body">
                            <form role="form" id="carform" action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <img src="" name="id_card" id="id_card" alt="暂无身份证图片信息">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--<script src="/Public/js/car/car.js"></script>-->
            <script type="application/javascript">
                function changeEnabled(id) {
                    var enabled = $("#enabled" + id).val();
                    if (enabled == 0) {
                        enabled = enabled + 1;
                    } else if(enabled == 1) {
                        enabled = enabled - 1;
                    }
                    $.ajax({
                        type:"get",
                        dataType:"json",
                        data:{
                            enabled:enabled
                        },
                        url:"/admin/user/changeEnabled/"+id,
                        success:function (data) {
                            if (data) {
                                alert("变更成功");
                                location.reload();
                            } else {
                                alert("变更失败");
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
                        url: "/admin/user/" + id,
                        data: {},
                        dataType: "json",
                        success: function (data) {
                            if (data == null) {
                                alert('没有对应信息');
                            } else {
                                $("#id_card").attr('src', data.card_pic_path);
                                var nowPage = $('#nowPage').attr('data-id');
                                $('#mymodal').modal();
                            }
                        }
                    })
                }
            </script>

        </div>
    </div>
</div>
</body>
</html>