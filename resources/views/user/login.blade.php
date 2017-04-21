<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        登录_吴涛租车
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
    <link href="/css/login/login.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
<div class="head-wrap">
    <div class="head">
        <a class="login-link" href="http://www.1hai.cn/" target="_self" title="一嗨租车">
        </a>
        <div class="head-nav">
            <a href="http://www.1hai.cn/help/index.aspx">
                帮助中心
            </a>
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
<form action="" method="post">
     <div class="login-wrap" id="loginFrom">
        <div class="login-box login-pd">
            <a class="mobile-link" href="http://www.1hai.cn/activity/active_mobile.aspx?f=Login"
               target="_blank" title="一嗨租车手机版">
            </a>
            <div class="login-pannel">
                <div class="login-form">
                    <div class="login-title">
                        会员登录
                        <span>
									<a href="https://my.1hai.cn/Register">
										立即注册
									</a>
									，享专属优惠！
								</span>
                    </div>
                    <div class="login-way">
                        <label>
                            <input name="longintype" type="radio" checked="checked" value="">
                            普通登录
                        </label>
                        <label>
                            <input name="longintype" type="radio" value="">
                            快速登录
                        </label>
                    </div>
                    <div class="login-wayinfo">
                        <div class="login-common">
                            <p>
                                登录名
                                <input autocomplete="off" class="user-name" id="txtLoginName" maxlength="50"
                                       name="LoginName" placeholder="请输入用户名/手机号/邮箱" type="text" value="">
                            </p>
                            <p>
                                密　码
                                <input autocomplete="off" id="txtPassword" maxlength="18" name="LoginPassword"
                                       placeholder="请输入密码" type="password" value="">
                            </p>
                            <p class="panel-captcha">
                                验证码
                                <input id="txtcaptcha" name="Captcha" autocomplete="off" class="input-code"
                                       maxlength="4" type="text">
                                <span class="ident-code">
											<img id="imgCaptcha" title="换一张" src="/captcha">
										</span>
                            </p>
                            <div class="error-msg">
                            </div>
                            <p class="forget">
                                <a href="https://my.1hai.cn/FindPassword">
                                    忘记密码?
                                </a>
                            </p>
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
                            <p class="quick-check" style="display:block;" id="quick_Captcha">
                                验证码
                                <input id="quick_txtcaptcha" name="Captcha" autocomplete="off" class="quick-code"
                                       maxlength="4" type="text" placeholder="请输入验证码">
                                <span class="ident-code">
											<img id="quick_imgCaptcha" title="换一张" src="./登录_一嗨租车_files/txyzm.png"
                                                 style="width: 99px; height: 33px; margin-left: 5px; vertical-align: middle;">
										</span>
                            </p>
                            <p class="quick-check">
                                校验码
                                <input id="phoneCode" name="" autocomplete="off" class="quick-code" maxlength="6"
                                       placeholder="请输入校验码" type="text">
                                <input id="J_quickcode" type="button" class="quick-codebtn" value="获取校验码">
                            </p>
                            <p class="login-error">
                            </p>
                            <div class="login-btn">
                                <a href="javascript:void(0)" title="登录" id="quick_ahrLogin">
                                    登录
                                </a>
                                <a class="loading" id="quick_loading" title="登录" style="display:none">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="login-btm">
							<span>
								您还可以直接用手机访问
								<i>
									m.1hai.cn
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
                | &nbsp;投诉通道：400-821-1608 &nbsp;
            </p>
            <p>
                &nbsp;Copyright © 2007-2017 上海一嗨信息技术服务有限公司
                <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">
                    ICP证：沪B2-20140130
                </a>
            </p>
        </div>
        <div class="footer-right">
            <a href="http://www.itrust.org.cn/yz/pjwx.asp?wm=1088681241">
                <img src="./登录_一嗨租车_files/itrust_icon.jpg">
            </a>
            <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20120327164136446"
               target="_blank">
                <img src="./登录_一嗨租车_files/shgs.png">
            </a>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $(".login-way input").click(function() {
            $(this).attr("checked", true);
            $(".login-wayinfo > div").hide().eq($('.login-way input').index(this)).show();
        });
    });
</script>
<script type="text/javascript" src="./登录_一嗨租车_files/login" async="async">
</script>
</body>

</html>