<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>个人中心</title>
    <link rel="stylesheet" href="/css/index/public.css" />
    <link rel="stylesheet" href="/css/libs/bootstrap.min.css">
    <link rel="stylesheet" href="/css/center/center.css">
</head>
<body>
<div class="top">
    <div class="container">
        <div class="top_l fl">
            <ul class="clearfix" id="after_login" style="display: none">
                <li>欢迎会员：<a href="javascript:void(0)" id="center">一嗨会员</a></li>
                <li><a href="javascript:;" id="logout">退出</a></li>
            </ul>
            <ul class="clearfix" id="before_login">
                <li><a href="/login">登录</a></li>
                <li><a href="/register">免费注册</a></li>
            </ul>
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
<div class="container">
    <div class="left">
        <ul>
            <li class="active"><a href="/index.php/PersonalCenter/getInfo.html">个人信息</a></li>
            <li class=""><a href="/index.php/PersonalCenter/toMessage.html">个人信箱</a></li>
            <li class=""><a href="/index.php/PersonalCenter/toArticle.html">我的文章</a></li>
            <li class=""><a href="/index.php/PersonalCenter/toQuestion.html">我的提问</a></li>
            <li class=""><a href="/index.php/PersonalCenter/toItem.html">我的项目</a></li>
            <li class=""><a href="/index.php/PersonalCenter/toChangePwd.html">修改密码</a></li>
        </ul>
    </div>
    <div class="right">
        <!--个人信息div-->
        <div class="center personal-info ">
            <form id="info_form">
                <label>昵称</label>
                <input type="text" name="nickname" id="nickname" value="小白羊"><br>
                <label>真实姓名</label>
                <input type="text" name="realname" id="realname" value="秦建波"><br>
                <label>手机号码</label>
                <input type="text" name="mobile" id="mobile" value="15921446112"><br>
                <label>qq号码</label>
                <input type="text" name="qq" id="qq" value="279250819"><br>
                <label>email地址</label>
                <input type="email" name="email" id="email" value="279250819@qq.com"><br>
                <label>微信号码</label>
                <input type="text" name="wechat" id="wechat" value="15921446112"><br>
            </form>
            <button class="btn btn-danger" id="1" onclick="submitInfo(this.id)">修改个人信息</button>
        </div>
        <!--密码信息div-->
        <div class="center password hide">
            <form id="password_form">
                <label>原密码</label>
                <input type="password" name="prepwd" id="oldpwd"><br>
                <label>新密码</label>
                <input type="password" name="newpwd" id="newpwd"><br>
                <label>再次输入新密码</label>
                <input type="password" name="secnewpwd" id="secnewpwd"><br>
                <button type="reset" class="btn btn-default">重置</button>
            </form>
            <button class="btn btn-danger" id="1" onclick="changePwd(this.id)">确认修改密码
            </button>
        </div>
        <!--个人信箱div-->
        <div class="center hide">
            <ul class="msgTab">
                <li class=""><a href="/index.php/PersonalCenter/toMessage/status/0.html">未读消息</a></li>
                <li class=""><a href="/index.php/PersonalCenter/toMessage/status/1.html">已读消息</a></li>
                <li class=""><a href="/index.php/PersonalCenter/toMessage/status/2.html">全部消息</a></li>
            </ul>
            <div class="msgBody">
                <p class="text-center">暂时没有消息</p>

            </div>
        </div>
        <!--我的文章-->
        <div class="article center hide">
            <div class="tab">
                <button class="btn btn-info" onclick="addArticle()">添加新文章</button>
            </div>
            <p class="text-center">暂时没有文章</p>
        </div>
        <!--编辑文章模态框-->
        <div class="modal" id="editArticleModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title">编辑/添加文章</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="javascript:void(0);">
                            <input type="text" hidden="" value="" id="article_id">
                            <div class="form-group">
                                <label for="article_title">文章标题</label>
                                <input type="text" id="article_title" required="required" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="article_content">文章内容</label>
                                <textarea rows="25" id="article_content" required="required" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="button" id="edit_btn" onclick="changeEdit()" class="btn btn-info form-control">编辑
                                </button>
                                <button type="submit" id="submit_btn" onclick="submitArticle()" class="btn btn-info form-control">提交
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--我的提问-->
        <div class="article center hide">
            <div class="tab">
                <button class="btn btn-info" onclick="addQuestion()">进行提问</button>
            </div>
            <p class="text-center">暂时没有任何提问</p>
        </div>
        <div class="modal" id="quesiton_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4>提出问题</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="javascript:void(0);">
                            <input type="text" hidden="" id="question_id">
                            <div class="form-group">
                                <label for="question_title">问题标题</label>
                                <input type="text" id="question_title" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>问题内容</label>
                                <textarea id="question_content" rows="10" cols="100" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" onclick="submitQuestion()" class="form-control btn btn-info">提问
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--我的项目-->
        <div class="article center hide">
            <div class="tab">
                <button class="btn btn-info" onclick="toAddItem()">申报项目</button>
            </div>
            <p class="text-center">暂时没有任何提问</p>
        </div>
        <div class="modal" id="addItemModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4>项目申报</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label>项目题目</label>
                                <input type="text" id="item_title" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>项目类型</label>
                                <input type="radio" value="1" name="item_type" checked="">大创
                                <input type="radio" value="2" name="item_type">太阳鸟
                                <input type="radio" value="3" name="item_type">工作室自拟
                            </div>
                            <div class="form-group">
                                <label>项目组成员学号（学号间以|分割，如单人则只填写自己学号即可）</label>
                                <input type="text" id="member_nos" class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <label>项目主要内容（可以谈谈项目意义所在以及如何实现）</label>
                                <textarea class="form-control" rows="10" cols="100" id="item_content" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <button type="reset" class="btn btn-danger">重置内容</button>
                                <button type="button" onclick="addItem()" class="btn btn-info">确认申报</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!--尾部	-->
<div class="footer">
    <div class="container">
        <div class="advantage">
            <ul class="clearfix">
                <li>{{ $cityCount }}座城市</li>
                <li>{{ $shopCount }}服务网点</li>
                <li>{{ $carCount }}种车型</li>
                <li>24小时服务</li>
                <li>国际租车</li>
            </ul>
        </div>
    </div>
    <div>
        <p>版权所有&copy吴涛租车平台</p>
    </div>
</div>
<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/js/index/index.js" ></script>
<script type="text/javascript" src="/js/libs/jquery.cookie.js"></script>
<script type="text/javascript" src="/js/inout.js"></script>
<script type="text/javascript">
    $(document).ready((function () {
        $(".type-box a").click(function(){
            $(this).css({"background":"blue","color":"white"});
        });
        $(".brand-box-list a").click(function(){
            $(this).css({"background":"blue","color":"white"});
        });
        $(".order-btn").click(function () {
            var id = $(this).attr("data-title");
            $.ajax({
                url:"/order",
                type:"post",
                data:{
                    id:id
                },
                dataType:"json",
                success:function (data) {
                    if (data.status == 1) {
                        alert("预订成功,稍后将有工作人员与您进行联系");
                    } else if (data.status == 2) {
                        alert(data.errorMsg);
//                                window.location.href = "/login";
                    } else if (data.status == 3) {
                        alert(data.errorMsg);
//                                window.location.href = "/self";
                    } else {
                        console.log(data.responseText);
                    }
                },
                error:function (data) {
                    console.log(data.responseText);
                    alert("出错了，请稍后再试");
                }
            })
        })
    }));
</script>
</body>
</html>
