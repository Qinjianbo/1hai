<html>
<head>
    <title>吴涛租车平台后台登录</title>
    <link rel="stylesheet" type="text/css" href="/css/libs/bootstrap.min.css">
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
                <li class="active">
                    <a href="/admin/car/getcarlist.html" id="car">车辆管理</a>
                </li>
                <li class=""><a href="/admin/album/getalbumlist.html">相册管理</a></li>
                <li><a href="##">帅哥图片管理</a></li>
                <li><a href="##">名表管理</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <!--头部搜索及新增按钮 -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="row" data-id="1" id="nowPage">
                        <div class="col-md-6">
                            <form action="/admin/car/search.html" class="navbar-form bavbar-left" role="search" method="post">
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
                    <th>价格区间</th>
                    <th>全拼</th>
                    <th>操作</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>东风御风</td>
                    <td>14.28-24.78万</td>
                    <td>lenglianxilie</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1345)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1345/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>2</td>
                    <td>菲亚特Tipo</td>
                    <td>暂无报价</td>
                    <td>feiyatetipo</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1343)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1343/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>3</td>
                    <td>途腾T2</td>
                    <td>6.38-8.58万</td>
                    <td>tutengt2</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1340)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1340/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>4</td>
                    <td>小柴神</td>
                    <td>暂无报价</td>
                    <td>xiaochaishen</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1339)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1339/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>5</td>
                    <td>福仕达新腾达</td>
                    <td>3.88万</td>
                    <td>xintengda</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1336)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1336/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>6</td>
                    <td>途腾T1</td>
                    <td>5.98-6.98万</td>
                    <td>tutengt1</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1335)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1335/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>7</td>
                    <td>Hemera</td>
                    <td>暂无报价</td>
                    <td>hemera</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1334)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1334/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>8</td>
                    <td>傲骏</td>
                    <td>5.28-6.18万</td>
                    <td>aojun</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1333)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1333/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>9</td>
                    <td>成功V2</td>
                    <td>3.88-4.18万</td>
                    <td>chenggongv2</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1332)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1332/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>10</td>
                    <td>摩根plus 8</td>
                    <td>248.00万</td>
                    <td>mogenplus8</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1331)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1331/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>11</td>
                    <td>摩根Plus 4</td>
                    <td>120.00-130.00万</td>
                    <td>mogenplus4</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1330)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1330/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>12</td>
                    <td>途腾T3</td>
                    <td>6.98-8.38万</td>
                    <td>tutengt3</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1328)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1328/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>13</td>
                    <td>陆程</td>
                    <td>暂无报价</td>
                    <td>meiyalucheng</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1327)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1327/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>14</td>
                    <td>摩根Aero</td>
                    <td>323.75-417.19万</td>
                    <td>mogenaero</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1326)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1326/nowPage/1.html">删除</a></td>
                </tr><tr>
                    <td>15</td>
                    <td>成功V1</td>
                    <td>3.08-4.00万</td>
                    <td>chenggongv1</td>
                    <td><a id="edit" style="cursor:pointer" onclick="edit(1325)">编辑</a></td>
                    <td><a href="/admin/car/delete/carId/1325/nowPage/1.html">删除</a></td>
                </tr>  </tbody>
            </table>
            <br>
            <!--分页导航-->
            <div class="page"><div>  <span class="current">1</span><a class="num" href="/admin/car/getcarlist/p/2.html">2</a><a class="num" href="/admin/car/getcarlist/p/3.html">3</a><a class="num" href="/admin/car/getcarlist/p/4.html">4</a><a class="num" href="/admin/car/getcarlist/p/5.html">5</a><a class="num" href="/admin/car/getcarlist/p/6.html">6</a><a class="num" href="/admin/car/getcarlist/p/7.html">7</a><a class="num" href="/admin/car/getcarlist/p/8.html">8</a><a class="num" href="/admin/car/getcarlist/p/9.html">9</a><a class="num" href="/admin/car/getcarlist/p/10.html">10</a><a class="num" href="/admin/car/getcarlist/p/11.html">11</a> <a class="next" href="/admin/car/getcarlist/p/2.html">&gt;&gt;</a> <a class="end" href="/admin/car/getcarlist/p/80.html">80</a></div></div>

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
                                    <input type="text" name="modelName" id="modelName" class="form-control" placeholder="请输入车型名称">
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
            <script>
                function edit(id) {
                    $.ajax({
                        type: "POST",
                        url: "/admin/car/getcar.html",
                        data: {
                            carId: id,
                        },
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
                })
            </script>

        </div>
    </div>
</div>
<script src="/Public/bootstrap-3.3.5/js/bootstrap.min.js"></script>
</body>
</html>