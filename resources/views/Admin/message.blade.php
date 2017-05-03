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
                <li class=""><a href="/admin/users">用户信息管理</a></li>
                <li class="active"><a href="/admin/messages">留言信息管理</a></li>
                <li class=""><a href="/admin/shops">门店信息管理</a></li>
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
                    <th>姓名</th>
                    <th>联系方式</th>
                    <th>时间</th>
                    <th>内容</th>
                    <th>操作</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $key => $message)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $message->realname }}</td>
                        <td>{{ $message->mobile }}</td>
                        <td>{{ date('Y-m-d H:i:s', $message->created_at) }}</td>
                        <td><div title="{{ $message->message }}">@if(strlen($message->message) > 10){{ mb_substr($message->message, 0, 10).'...' }}@else{{ mb_substr($message->message, 0, 10) }}@endif</div></td>
                        <td><a id="edit" href="javascript:;" style="cursor:pointer" onclick="edit({{ $message->id }})">查看全部留言内容并回复</a></td>
                        <td>
                            <a id="delete" style="cursor:pointer" href="javascript:;" onclick="changeShow({{ $message->id }})">
                                @if ($message->can_show == 1)
                                    前台隐藏
                                @elseif ($message->can_show == 0)
                                    前台展示
                                @endif
                            </a>
                        </td>
                        <input type="hidden" id="can_show" name="can_show" value="{{ $message->can_show }}">
                    </tr>
                @endforeach
                </tbody>
            </table>
            <br>
            <!--分页导航-->
            {{ $messages->links() }}

            <!--增加和修改的模态框-->
            <div class="modal" id="mymodal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            查看全部留言并回复
                        </div>
                        <div class="modal-body">
                            <form role="form" id="carform" action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id">
                                <div class="form-group">
                                    <label for="message">用户留言:</label>
                                    <p id="message"></p>
                                </div>
                                <div class="form-group">
                                    <label for="reply">回复内容:</label>
                                    <textarea id="reply" name="reply" rows="5" class="form-control" placeholder="请输入回复内容"></textarea>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="button" class="btn btn-primary" id="save">回复</button>
                        </div>
                    </div>
                </div>
            </div>
            <!--<script src="/Public/js/car/car.js"></script>-->
            <script type="application/javascript">
                function changeShow(id) {
                    var can_show = $("#can_show").val();
                    if (can_show == 1) {
                        can_show = can_show - 1;
                    } else if (can_show == 0) {
                        can_show = can_show + 1;
                    }
                    $.ajax({
                        url:"/admin/message/store",
                        type:"post",
                        data:{
                            id:id,
                            can_show:can_show
                        },
                        dataType:"json",
                        success:function (data) {
                            if (data) {
                                alert("更新成功");
                                location.reload();
                            } else {
                                alert("更新失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                }
                function edit(id) {
                    $.ajax({
                        type: "get",
                        url: "/admin/message/" + id,
                        data: {},
                        dataType: "json",
                        success: function (data) {
                            if (data == null) {
                                alert('没有对应信息');
                            } else {
                                $("#message").html(data.message);
                                $("#id").val(data.id);
                                if (data.reply) {
                                    var reply = $("#reply");
                                    var save = $("#save");
                                    reply.text(data.reply);
                                    reply.attr("disabled", "disabled");
                                    save.text("已回复");
                                    save.attr("disabled", "disabled");
                                }
                                $('#mymodal').modal();
                            }
                        }
                    })
                }
                $('#save').click(function(){
                    var reply = $("#reply").val();
                    var id = $("#id").val();
                    $.ajax({
                        type:"POST",
                        dataType:"json",
                        data:{
                            id:id,
                            reply:reply
                        },
                        url:"/admin/message/store",
                        success:function (data) {
                            if (data) {
                                alert("回复成功");
                                location.reload();
                            } else {
                                alert("回复失败");
                            }
                        },
                        error:function (data) {
                            console.log(data.responseText);
                            alert("请检查网络后重试");
                        }
                    });
                });
            </script>

        </div>
    </div>
</div>
</body>
</html>