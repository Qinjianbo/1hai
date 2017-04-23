<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        注册_吴涛租车
    </title>
    <script async="async">
        var appInsights = window.appInsights ||
            function(c) {
                function l(e) {
                    k[e] = function() {
                        var f = arguments;
                        k.queue.push(function() {
                            k[e].apply(k, f)
                        })
                    }
                }
                var k = {
                        config: c
                    },
                    a = document,
                    g = window,
                    h = "script",
                    b = a.createElement(h),
                    d,
                    j;
                for (b.src = c.url || "//az416426.vo.msecnd.net/scripts/a/ai.0.js", a.getElementsByTagName(h)[0].parentNode.appendChild(b), k.cookie = a.cookie, k.queue = [], d = ["Event", "Exception", "Metric", "PageView", "Trace"]; d.length;) {
                    l("track" + d.pop())
                }
                return c.disableExceptionTracking || (d = "onerror", l("_" + d), j = g[d], g[d] = function(i, n, p, q, t) {
                    var m = j && j(i, n, p, q, t);
                    return m !== !0 && k["_" + d](i, n, p, q, t),
                        m
                }),
                    k
            } ({
                instrumentationKey: "ac0e5caa-c6c7-4006-b89e-39a462718572"
            });
        window.appInsights = appInsights;
        appInsights.trackPageView();
    </script>
    <link href="/css/common.css" rel="stylesheet">
    <link href="/css/register/register.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="application/javascript" src="/js/libs/jquery.1.8.3.min.js"></script>
</head>
<body>
<div class="head-wrap">
    <div class="head">
        <a class="login-link" href="http://www.1hai.cn/" target="_self" title="一嗨租车">
        </a>
        <div class="head-nav">
            <span class="line">
						|
					</span>
            <span class="contact-info">
						服务热线：
						<em>
							400-888-6608
						</em>
					</span>
        </div>
    </div>
</div>
<div class="w1180">
    <div class="reg-details clear_float">
        <div class="reg-left">
            <h3>
                会员注册
            </h3>
            <form action="" id="myform" method="post">
                <div class="reg-info">
                    <div class="reg-li">
								<span>
									姓名 :
								</span>
                        <input class="input-name" id="TrueName" maxlength="20" name="TrueName"
                               placeholder="请输入您的真实姓名" type="text" value="" onblur="checkTrueName(this)">
                        <em>
                            *
                        </em>
                        <i class="error-msg" id="TrueName-error-msg">
                        </i>
                    </div>
                    <div class="reg-li">
								<span>
									手机号码 :
								</span>
                        <input class="input-phone" id="PhoneNumber" maxlength="15" name="PhoneNumber"
                               placeholder="请输入7到15位手机号码" type="text" value="" onblur="checkMobile(this)">
                        <em>
                            *
                        </em>
                        <i id="PhoneNumber-error-msg" class="error-msg">
                        </i>
                    </div>
                    <div class="reg-li">
								<span>
									图片验证码 :
								</span>
                        <input class="input-imgcode" id="txtCaptcha" maxlength="5" name="ImgCode"
                               placeholder="请输入您的图形验证码" type="text" value="" onblur="checkCaptcha(this)">
                        <img class="imgCaptcha" id="imgCaptcha" src="/captcha" onclick="reloadCaptcha(this)">
                        <em>
                            *
                        </em>
                        <i id="txtCaptcha-error-msg" class="error-msg">
                        </i>
                    </div>
                    <div class="reg-li clear_float">
								<span>
									设置密码 :
								</span>
                        <div class="reg-pwd">
                            <div id="pass">
                                <input class="input-pwd" id="password" name="Password" value="" type="password"
                                       maxlength="18" placeholder="6-18个字符，请使用英文字母、数字或者组合" onblur="checkPassword(this)">
                            </div>
                            <i id="pwd-state" class="pwd-hide">
                            </i>
                        </div>
                        <em>
                            *
                        </em>
                        <i id="password-error-msg" class="error-msg">
                        </i>
                    </div>
                    <div class="reg-operate">
                        <div class="reg-btn">
                            <a href="javascript:void(0)" type="submit" id="btnSubmit" class="reg-disable">
                                注册
                            </a>
                            <a href="javascript:void(0)" class="reg-loading">
                            </a>
                        </div>
                        <div class="reg-login">
                            已有账号，
                            <a href="/login">
                                直接登录 》
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="reg-right">
            <dl>
                <dt>
                    注册送好礼
                </dt>
                <dd class="reg-prompt">
                    现在注册即可获得
                </dd>
                <dd>
                    首日
                    <span>
								0
							</span>
                    租金
                </dd>
                <dd>
							<span>
								3
							</span>
                    倍积分
                </dd>
                <dd>
							<span>
								50
							</span>
                    元优惠券
                </dd>
            </dl>
            <div class="reg-banenr">
                <img src="/pictures/reg-banner.jpg" width="100%">
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer-box">
        <div class="footer-left">
            <p>
                <a href="http://www.1hai.cn/aboutus.aspx" rel="nofollow" target="_blank">
                    关于一嗨
                </a>
                |
                <a href="http://www.1hai.cn/1hai_union.aspx" target="_blank">
                    加盟合作
                </a>
                |
                <a href="http://www.1hai.cn/job/index.aspx" target="_blank">
                    招募英才
                </a>
                |
                <a href="http://www.1hai.cn/activity/active_iphone.aspx?from=foot" target="_blank">
                    移动客户端
                </a>
                |
                <a href="http://www.1hai.cn/help/index_help.aspx?from=foot" rel="nofollow"
                   target="_blank">
                    帮助中心
                </a>
                |
                <a href="http://www.1hai.cn/advice.aspx" rel="nofollow" target="_blank">
                    建议专区
                </a>
                |
                <a href="http://www.1hai.cn/contactus.aspx" rel="nofollow" target="_blank">
                    联系我们
                </a>
                |
                <a href="http://www.1hai.cn/link.aspx" rel="nofollow" target="_blank">
                    友情链接
                </a>
                | &nbsp;投诉通道：15921446112
            </p>
            <p>
                &nbsp;Copyright © 2007-2017 吴涛租车平台
            </p>
        </div>
    </div>
</div>
<script type="application/javascript" src="/js/common.js">
</script>
<script type="application/javascript">
    var btnSubmit = document.getElementById("btnSubmit");
    btnSubmit.onclick = function () {
        var TrueName = document.getElementById("TrueName");
        var PhoneNumber = document.getElementById("PhoneNumber");
        var txtCaptcha = document.getElementById("txtCaptcha");
        var password = document.getElementById("password");
        if (checkTrueName(TrueName)) {
            if (checkMobile(PhoneNumber)) {
                if (checkCaptcha(txtCaptcha)) {
                    if (checkPassword(password)) {
                        $.ajax({
                            url:"/api/user/reg",
                            type:"post",
                            data:{
                                username:trim(PhoneNumber.value),
                                captcha:trim(txtCaptcha.value),
                                password:trim(password.value),
                                realname:trim(TrueName.value)
                            },
                            dataType:'json',
                            success:function (data) {
                                if (data.errCode) {
                                    alert(data.message);
                                } else {
                                    alert("注册成功");
                                    window.location.href="/login";
                                }
                            },
                            error:function (data) {
                                alert("请检查网络");
                            }
                        })
                    } else {
                        password.focus();
                    }
                } else {
                    txtCaptcha.focus();
                }
            } else {
                PhoneNumber.focus();
            }
        } else {
            TrueName.focus();
        }
    }
</script>
</body>
</html>
