<!DOCTYPE html>
<!-- saved from url=(0027)https://my.1hai.cn/Register -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        注册_一嗨租车
    </title>
    <meta property="qc:admins" content="246245640410116367">
    <link rel="shortcut icon" href="https://my.1hai.cn/favicon.ico?v=4ff0a68b31414931b6fa89756d1f0da3"
          type="image/x-icon">
    <script charset="utf-8" src="/js/register/b.js">
    </script>
    <script charset="utf-8" src="/js/register/v.js">
    </script>
    <script type="text/javascript" async="" src="/js/register/sm.js">
    </script>
    <script type="text/javascript" async="" src="/js/register/s.js">
    </script>
    <script src="/js/register/hm.js">
    </script>
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
    <script src="/js/register/ai.0.js">
    </script>
    <link href="/css/common" rel="stylesheet">
    <link href="/css/register/register.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/register/g" charset="utf-8">
    </script>
    <script src="/js/register/pc_nb.js" charset="UTF-8">
    </script>
    <link rel="stylesheet" type="text/css" href="/css/main.css">
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
            <form action="https://my.1hai.cn/Register" id="myform" method="post">
                <input name="__RequestVerificationToken" type="hidden" value="tmUINl5DBF44o-mVg8RGqcuMfc6_-u-Lv_wxyPaHs_pp_ZOadX7BFU-g7hPH1S4fh0rKbw2">
                <div class="reg-info">
                    <div class="reg-li">
								<span>
									姓名 :
								</span>
                        <input class="input-name" id="TrueName" maxlength="20" name="TrueName"
                               placeholder="请输入您的真实姓名" type="text" value="">
                        <em>
                            *
                        </em>
                        <i class="error-msg">
                            请输入您的真实姓名
                        </i>
                    </div>
                    <div class="reg-li">
								<span>
									手机号码 :
								</span>
                        <input class="input-phone" id="PhoneNumber" maxlength="15" name="PhoneNumber"
                               placeholder="请输入7到15位手机号码" type="text" value="">
                        <em>
                            *
                        </em>
                        <i class="error-msg">
                            手机号码为空
                        </i>
                    </div>
                    <div class="reg-li">
								<span>
									图片验证码 :
								</span>
                        <input class="input-imgcode" id="txtCapthca" maxlength="4" name="ImgCode"
                               placeholder="请输入您的图形验证码" type="text" value="">
                        <img class="imgCaptcha" id="imgCaptcha" src="/captcha">
                        <script type="application/javascript">
                            var imgCaptcha = document.getElementById("imgCaptcha");
                            imgCaptcha.onclick = function () {
                                this.src = "/captcha?v=" + Math.random();
                            };
                        </script>
                        <em>
                            *
                        </em>
                        <i class="error-msg">
                            验证码为空
                        </i>
                    </div>
                    <div class="reg-li clear_float">
								<span>
									设置密码 :
								</span>
                        <div class="reg-pwd">
                            <div id="pass">
                                <input class="input-pwd" id="password" name="Password" value="" type="text"
                                       maxlength="18" placeholder="6-18个字符，请使用英文字母、数字或者组合">
                            </div>
                            <i id="pwd-state" class="pwd-hide">
                            </i>
                        </div>
                        <em>
                            *
                        </em>
                        <i class="error-msg">
                            请设置您的密码
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
                            <a href="https://my.1hai.cn/Login">
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
                | &nbsp;投诉通道：微信 - a654456239 &nbsp;
            </p>
            <p>
                &nbsp;Copyright © 2007-2017 吴涛租车平台
            </p>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/register/register" async="async">
</script>
<script async="async" type="text/javascript">
    (function(b) {
        var e = {
            query: [],
            args: b || {}
        };
        e.query.push(["_setAccount", "604"]); (window.__zpSMConfig = window.__zpSMConfig || []).push(e);
        var d = document.createElement("script");
        d.type = "text/javascript";
        d.async = true;
        d.src = ("https:" == document.location.protocol ? "https:": "http:") + "//cdn.zampda.net/s.js";
        var a = document.getElementsByTagName("script")[0];
        a.parentNode.insertBefore(d, a)
    })(window.__zp_tag_params);
</script>
<ins id="newBridge">
    <!-- target: nodeBoard -->
    <ins class="nb-nodeboard-base nb-nodeboard-position-base nb-nodeboard-left-bottom nb-hide"
         id="nb_nodeboard">
        <ins class="nb-nodeboard-contain-base nb-nodeboard-contain">
            <ins class="nb-nodeboard-top nb-nodeboard-top-0">
                <ins class="nb-head-title">
                    请您留言
                </ins>
                <ins class="nb-nodeboard-close" id="nb_nodeboard_close" data-type="min">
                </ins>
            </ins>
            <form id="nb_nodeboard_form" autocomplete="off" class="nb-board-form"
                  action="https://p.qiao.baidu.com/cps//bookmanage/saveBook.action?userId=1362481"
                  method="post" accept-charset="utf-8">
                <ins id="nb_nodeboard_set" class="nb-nodeboard-set">
                    <ins class="nb-nodeboard-content">
								<textarea id="nb-nodeboard-set-content-js" name="content" data-ph="请在此输入留言内容，我们会尽快与您联系。（必填）"
                                          placeholder="请在此输入留言内容，我们会尽快与您联系。（必填）" class="nb-nodeboard-set-content">
								</textarea>
                    </ins>
                    <ins class="nb-nodeboard-name" style="z-index:4;">
                        <ins class="nb-nodeboard-icon nodeName">
                        </ins>
                        <input id="nb_nodeboard_set_name" data-write="1" name="visitorName" maxlength="30"
                               class="nb-nodeboard-input" type="text" data-ph="姓名（必填）" placeholder="姓名（必填）">
                    </ins>
                    <ins class="nb-nodeboard-name" id="nb_nodeboard_phone" style="z-index:3;">
                        <ins class="nb-nodeboard-icon nodePhone">
                        </ins>
                        <input id="nb_nodeboard_set_phone" name="visitorPhone" maxlength="30"
                               class="nb-nodeboard-input" data-write="1" type="text" data-ph="电话（必填）"
                               placeholder="电话（必填）">
                    </ins>
                </ins>
            </form>
            <ins class="nb-nodeboard-success" id="nb_nodeboard_success">
                <ins class="nb-success-box">
                    <ins class="nb-success-icon">
                    </ins>
                    <ins class="nb-success-title" id="nb_node_messagetitle">
                        感谢留言
                    </ins>
                    <ins class="nb-success-content" id="nb_node_messagecontent">
                        我们会尽快与您联系
                    </ins>
                    <ins id="sucess_close" class="nb-sucess-close">
                        关闭
                    </ins>
                </ins>
            </ins>
            <ins class="nb-nodeboard-send" id="nb_node_contain">
                <ins id="nb_nodeboard_send" class="nb-nodeboard-send-btn nb-nodeboard-send-btn-0">
                    发送
                </ins>
            </ins>
        </ins>
    </ins>
    <!-- end -->
    <!-- target: invite -->
    <ins class="nb-invite-wrap nb-invite-wrap-base nb-position-base nb-left-bottom  "
         id="nb_invite_wrap" style="width:290px;display:none;;">
        <ins class="nb-invite-body nb-invite-skin-0" style="height:125px;">
            <ins class="nb-invite-tool nb-invite-tool-base" id="nb_invite_tool" style="">
            </ins>
            <ins class="nb-invite-text nb-invite-text-base">
                <ins class="nb-invite-welcome nb-invite-welcome-base nb-show" id="nb_invite_welcome">
                    <p style="color: #fff">
                        欢迎来到本网站，请问有什么可以帮您？
                    </p>
                </ins>
            </ins>
            <ins class="nb-invite-btn-base nb-invte-btns-0">
                <ins class="nb-invite-cancel nb-invite-cancel-base" id="nb_invite_cancel">
                    稍后再说
                </ins>
                <ins class="nb-invite-ok nb-invite-ok-base" id="nb_invite_ok">
                    现在咨询
                </ins>
            </ins>
        </ins>
    </ins>
    <!-- end -->
</ins>
</body>
</html>
