<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        登录_吴涛租车
    </title>
    <link href="/css/common.css" rel="stylesheet">
    <link href="/css/login/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="application/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
</head>
<body>
<div class="head-wrap">
    <div class="head">
        <a class="login-link" href="/" target="_self" title="吴涛租车平台租车">
        </a>
        <div class="head-nav">
            <a href="">
                体验分享
            </a>
            <span class="line">
						|
					</span>
            <span class="contact-info">
						服务热线：
						<em>
							888-8888-8888
						</em>
					</span>
        </div>
    </div>
</div>
<form action="" method="post">
     <div class="login-wrap" id="loginFrom">
        <div class="login-box login-pd">
            <a class="mobile-link" href="/"
               target="_blank" title="吴涛租车平台手机版">
            </a>
            <div class="login-pannel">
                <div class="login-form">
                    <div class="login-title">
                        会员登录
                        <span>
									<a href="/register">
										立即注册
									</a>
									，享专属优惠！
								</span>
                    </div>
                    <div class="login-way">
                        <label>
                            <input name="longintype" type="radio" checked="checked" value="">
                            手机号登录
                        </label>
                        {{--<label>--}}
                            {{--<input name="longintype" type="radio" value="">--}}
                            {{--快速登录--}}
                        {{--</label>--}}
                    </div>
                    <form action="" method="post">
                    <div class="login-wayinfo">
                        <div class="login-common">
                            <p>
                                登录名
                                <input autocomplete="off" class="user-name" id="txtLoginName" maxlength="50"
                                       onblur="checkMobile(this)" name="LoginName" placeholder="请输入注册手机号" type="text" value="">
                            </p>
                            <i class="error-msg" id="txtLoginName-error-msg"></i>
                            <p>
                                密　码
                                <input autocomplete="off" id="txtPassword" maxlength="18" name="LoginPassword"
                                       onblur="checkPassword(this)" placeholder="请输入密码" type="password" value="">
                            </p>
                            <i class="error-msg" id="txtPassword-error-msg"></i>
                            {{--<p class="panel-captcha">--}}
                                {{--验证码--}}
                                {{--<input id="txtcaptcha" name="Captcha" autocomplete="off" class="input-code"--}}
                                       {{--maxlength="5" type="text" onblur="checkCaptcha(this)">--}}
                                {{--<span class="ident-code">--}}
											{{--<img id="imgCaptcha" title="换一张" src="/captcha" onclick="reloadCaptcha(this)">--}}
										{{--</span>--}}
                            {{--</p>--}}
                            <i class="error-msg" id="txtcaptcha-error-msg"></i>
                            <div class="error-msg">
                            </div>
                            {{--<p class="forget">--}}
                                {{--<a href="https://my.1hai.cn/FindPassword">--}}
                                    {{--忘记密码?--}}
                                {{--</a>--}}
                            {{--</p>--}}
                            <div class="login-btn">
                                <a href="javascript:void(0)" title="登录" id="ahrLogin">
                                    登录
                                </a>
                                <a class="loading" id="loading" title="登录" style="display:none">
                                </a>
                            </div>
                        </div>
                        <div class="login-quick" style="display:none;">
                            <p>
                                手机号
                                <input id="MobilePhoneNo" name="" autocomplete="off" class="" maxlength="15"
                                       placeholder="请输入手机号" type="text">
                            </p>
                            <!--<p class="quick-check" style="display:block;" id="quick_Captcha">
                                验证码
                                <input id="quick_txtcaptcha" name="Captcha" autocomplete="off" class="quick-code"
                                       maxlength="4" type="text" placeholder="请输入验证码">
                                <span class="ident-code">
											<img id="quick_imgCaptcha" title="换一张" src=""
                                                 style="width: 99px; height: 33px; margin-left: 5px; vertical-align: middle;">
										</span>
                            </p>-->
                            <!--<p class="quick-check">
                                校验码
                                <input id="phoneCode" name="" autocomplete="off" class="quick-code" maxlength="6"
                                       placeholder="请输入您的图形验证码" type="text">
                                <input id="J_quickcode" type="button" class="quick-codebtn" value="获取校验码">
                            </p>
                            <p class="login-error">
                            </p>-->
                            <div class="login-btn">
                                <a href="javascript:void(0)" title="登录" id="quick_ahrLogin">
                                    登录
                                </a>
                                <a class="loading" id="quick_loading" title="登录" style="display:none">
                                </a>
                            </div>
                        </div>
                    </div>
                    </form>
                <div class="login-btm">
							<span>
								欢迎使用吴涛租车平台
								<i>
									wutao.car.com
								</i>
							</span>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="footer">
    <div class="footer-box">
        <div class="footer-left">
            <p>
                <a href="" rel="nofollow" target="_blank">
                    关于平台
                </a>
                |
                <a href="" target="_blank">
                    加盟合作
                </a>
                |
                <a href="" target="_blank">
                    招募英才
                </a>
                |
                <a href="" target="_blank">
                    移动客户端
                </a>
                |
                <a href="" rel="nofollow"
                   target="_blank">
                    体验分享
                </a>
                |
                <a href="" rel="nofollow" target="_blank">
                    建议专区
                </a>
                |
                <a href="" rel="nofollow" target="_blank">
                    联系我们
                </a>
                |
                <a href="" rel="nofollow" target="_blank">
                    友情链接
                </a>
                | &nbsp;投诉通道：888-8888-8888 &nbsp;
            </p>
            <p>
                &nbsp;Copyright © 2007-2017 吴涛租车信息技术服务有限公司
                <a href="" target="_blank" rel="nofollow">
                    ICP证：沪B2-20140130
                </a>
            </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/common.js"></script>
<script type="text/javascript" src="/js/libs/jquery.cookie.js"></script>
<script type="text/javascript">
    $(function() {
        $(".login-way input").click(function() {
                $(this).attr("checked", true);
                $(".login-wayinfo > div").hide().eq($('.login-way input').index(this)).show();
            });
    });
    var ahrLogin = $("#ahrLogin");
    ahrLogin.click(function () {
        var txtLoginName = document.getElementById("txtLoginName");
        var txtPassword = document.getElementById("txtPassword");
        if (checkMobile(txtLoginName)) {
            if (checkPassword(txtPassword)) {
                    $.ajax({
                        url:"/user/login",
                        type:"post",
                        dataType:"json",
                        data:{
                            username:trim(txtLoginName.value),
                            password:trim(txtPassword.value),
                        },
                        success:function (data) {
                            if (data.errCode) {
                                if (data.message.username != undefined){
                                    alert(data.message.username);
                                } else {
                                    alert(data.message);
                                }
                            } else {
                                alert(data.message);
                                window.location.href = document.referrer;
                            }
                        },
                        error:function (data) {
                            alert("请检查网络后重试");
                        }
                    });
            } else {
                txtPassword.focus();
            }
        } else {
            txtLoginName.focus();
        }
    })
</script>
</body>

</html>