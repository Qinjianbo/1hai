<!DOCTYPE html>
<!-- saved from url=(0027)https://my.1hai.cn/Register -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
        注册_一嗨租车
    </title>
    <meta property="qc:admins" content="246245640410116367">
    <meta content="租车,汽车租赁" name="keywords">
    <meta content="一嗨租车-中国汽车租赁行业引领者，在全国120多座城市开设了1600多个直营租车网点，拥有100多款车型，3万多台自营车辆，满足各种用户需求。提供自驾租车、商务租车，不限里程，无纸交接，24小时客服，让您可以随时随地享受无忧的用车服务。"
          name="description">
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
                        <img class="imgCaptcha" id="imgCode" src="/js/DrawImage">
                        <em>
                            *
                        </em>
                        <i class="error-msg">
                            验证码为空
                        </i>
                    </div>
                    <div class="reg-li">
								<span>
									校验码 :
								</span>
                        <input class="input-code" id="SmsCode" maxlength="6" name="SmsCode" placeholder="请输入您的校验码"
                               type="text" value="">
                        <input class="input-codebtn" id="btnActive" type="button" value="获取校验码">
                        <span style="display: none;" id="time">
									重新获取
								</span>
                        <em>
                            *
                        </em>
                        <i class="error-msg">
                            请输入您的校验码
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
                    <div class="reg-li">
								<span>
									邀请码 :
								</span>
                        <input class="input-invitecode" id="InviteCode" maxlength="10" name="InviteCode"
                               placeholder="" type="text" value="">
                        <em>
                        </em>
                        <i class="">
                        </i>
                    </div>
                    <div class="reg-operate">
                        <div class="reg-agree">
                            <input id="IsAgreement" name="IsAgreement" type="checkbox" checked="checked">
                            我已阅读并接受
                            <a href="javascript:void(0)" id="argee">
                                《一嗨租车会员注册协议》
                            </a>
                        </div>
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
                <img src="./注册_一嗨租车_files/reg-banner.jpg" width="100%">
            </div>
        </div>
    </div>
</div>
<div class="agreement-wd" id="wd">
    <div class="agreement-wdbg">
    </div>
    <div class="agreement-popup">
        <div class="popup-close" id="wd_close">
        </div>
        <div class="agreement-box">
            <div class="agreement-box-title">
                一嗨租车会员注册协议
            </div>
            <div class="agreement-txt">
                <h1>
                    注册协议
                </h1>
                <h3>
                    1．特别提示
                </h3>
                <p>
                    1.1一嗨汽车租赁有限公司（以下简称“一嗨租车”）同意按照本协议的规定及其不时发布的操作规则提供基于互联网的相关服务（以下称“网络服务”），为获得网络服务，服务使用人（以下称“用户”）应当同意本协议的全部条款并按照页面上的提示完成全部的注册程序。用户注册成功即表示用户完全接受本协议项下的全部条款。
                </p>
                <p>
                    1.2用户注册成功后，一嗨租车将给予每个用户一个用户帐号及相应的密码，该用户帐号和密码由用户自行保管。用户首次租赁车辆用车完毕后，如未产生任何纠纷，一嗨租车将通过邮递或其他方式向用户寄送会员卡。
                </p>
                <p>
                    1.3为提供更好的服务，一嗨租车有权使用通过合法途径获得的用户其他身份信息（如身份证照片等）用于为用户提供服务，该信息是依据用户提供的身份信息而合法获取的，且仅限用于为客户提供服务。
                </p>
                <h3>
                    2. 服务内容
                </h3>
                <p>
                    2.1通过一嗨租车网站在线预订车辆、查询价格车型信息、对提供的服务发表意见等。（具体查看公司网页http://www.1hai.cn/）
                </p>
                <h3>
                    3. 服务变更、中断或终止
                </h3>
                <p>
                    3.1鉴于网络服务的特殊性，用户授权一嗨租车可随时变更、中断或终止部分或全部的网络服务。由于一嗨租车需要定期或不定期地对提供网络服务的平台（如互联网网站）或相关的设备进行检修或者维护，如因此类情况而造成网络服务在合理时间内的中断，一嗨租车无需为此承担任何责任。
                </p>
                <p>
                    3.2如发生下列任何一种情形，一嗨租车有权在通知用户后中断或终止向用户提供本协议项下的网络服务而无需对用户或任何第三方承担任何责任：
                </p>
                <p>
                    3.2.1 用户提供的个人资料不真实；
                </p>
                <p>
                    3.2.2 用户违反本协议中规定的使用规则；
                </p>
                <p>
                    3.3如用户注册的帐号在任何连续180日内未实际使用，则一嗨租车有权删除该帐号并停止为该用户提供相关的网络服务。
                </p>
                <h3>
                    4. 使用规则
                </h3>
                <p>
                    4.1用户在申请使用一嗨租车网络服务时，必须向一嗨租车提供准确的个人资料，如个人资料有任何变动，必须在三个工作日内更新。
                </p>
                <p>
                    4.2用户需妥善保管其个人账号密码，无论基于何种相关目的，都不允许将帐号、密码转让或出借于他人使用。如用户发现其帐号遭他人非法使用，应当立即通知一嗨租车。因黑客行为、用户的保管疏忽导致帐号、密码遭他人非法使用或用户将其帐号、密码转让或出借于他人使用而导致任何的客户损失，一嗨租车不承担任何责任。
                </p>
                <p>
                    4.3 用户注册成功后，视为允许一嗨租车通过电子邮件或其他方式向用户发送一嗨租车的优惠服务信息。
                </p>
                <p>
                    4.4用户在使用一嗨租车网络服务过程中，必须遵循以下原则：
                </p>
                <p>
                    4.4.1 遵守中国有关的法律和法规；
                </p>
                <p>
                    4.4.2 遵守所有与网络服务有关的网络协议、规定和程序；
                </p>
                <p>
                    4.4.3 不得为任何非法目的而使用网络服务系统；
                </p>
                <p>
                    4.4.4 不得利用一嗨租车网络服务系统进行任何不利于一嗨租车的行为
                </p>
                <h3>
                    5. 知识产权
                </h3>
                <p>
                    一嗨租车提供的服务中包含的任何文本、图片、图形、音频和/或视频资料均受版权、商标和/或其它财产所有权法律的保护，未经相关权利人同意，上述资料均不得在任何媒体直接或间接发布、播放、出于播放或发布目的而改写或再发行，或者被用于其他任何商业目的。所有这些资料或资料的任何部分仅可作为私人和非商业用途而保存在某台计算机内。一嗨租车为提供服务而使用的任何软件（包括但不限于软件中所含的任何图象、照片、动画、录像、录音、音乐、文字和附加程序、随附的帮助材料）的一切权利均属于该软件的著作权人，未经该软件的著作权人许可，用户不得对该软件进行反向工程（reverse
                    engineer）、反向编译（decompile）或反汇编（disassemble）。
                </p>
                <h3>
                    6. 隐私保护
                </h3>
                <p>
                    6.1保护用户隐私是一嗨租车的一项基本政策，一嗨租车保证不对外公开或向第三方提供单独用户的注册资料及用户在使用网络服务时存储在一嗨租车的非公开内容，但下列情况除外：
                </p>
                <p>
                    6.1.1 事先获得用户的明确授权；
                </p>
                <p>
                    6.1.2 根据有关的法律法规要求；
                </p>
                <p>
                    6.1.3 按照相关政府主管部门的要求；
                </p>
                <p>
                    6.1.4 为维护社会公众的利益；
                </p>
                <p>
                    6.1.5 为维护一嗨租车的合法权益
                </p>
                <p>
                    6.2当一嗨租车与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方允诺严格承担与一嗨租车同等的保护用户隐私的责任，则视为客户授权一嗨租车将包含其个人注册资料在内的相关信息仅提供给该等第三方。
                </p>
                <h3>
                    7. 免责声明
                </h3>
                <p>
                    7.1用户明确同意其使用一嗨租车网络服务所存在的风险将完全由其自己承担；因其使用一嗨租车网络服务而产生的一切后果也由其自己承担，一嗨租车对用户不承担任何责任。
                </p>
                <p>
                    7.2一嗨租车不保证为向用户提供便利而设置的外部链接的准确性和完整性。同时，对于该等外部链接指向的不由一嗨租车实际控制的任何网页上的内容，一嗨租车不承担任何责任。
                </p>
                <p>
                    7.3对于因不可抗力或非因一嗨租车的原因造成的网络服务中断或其它缺陷，一嗨租车不承担任何责任。
                </p>
                <h3>
                    8. 违约赔偿
                </h3>
                <p>
                    8.1如因一嗨租车违反有关法律、法规或本协议项下的任何条款而给用户造成损失，一嗨租车同意承担由此造成的损害赔偿责任。
                </p>
                <p>
                    8.2用户同意保障和维护一嗨租车及其他用户的合法利益，如因用户违反有关法律、法规或本协议项下的任何条款而给一嗨租车或任何其他第三人造成损失，用户同意承担由此造成的一切损害赔偿责任。
                </p>
                <h3>
                    9. 协议修改
                </h3>
                <p>
                    9.1一嗨租车有权随时修改本协议的任何条款，一旦本协议的内容发生变动，一嗨租车将会在http://www.1hai.cn/网站上公布修改之后的协议内容，该公布行为视为一嗨租车已经通知用户修改内容。
                </p>
                <p>
                    9.2如果不同意一嗨租车对本协议相关条款所做的修改，用户有权停止使用网络服务。如果用户继续使用网络服务，则视为用户接受一嗨租车对本协议相关条款所做的修改
                </p>
                <h3>
                    10. 通知送达
                </h3>
                <p>
                    10.1本协议项下一嗨租车对于用户所有的通知均可通过网页公告、电子邮件、手机短信或常规的信件传送等方式进行；一嗨租车可任意选择其中一种方式通知用户，该通知于发送之日视为已送达用户，用户知悉并接受通知之内容。
                </p>
                <p>
                    10.2 用户如有任何事宜需通知一嗨租车，应当通过一嗨租车对外正式公布的通信地址、传真号码、电子邮件地址等联系方式进行联系及送达。
                </p>
                <h3>
                    11. 法律管辖
                </h3>
                <p>
                    如双方就本协议内容或其执行发生任何争议，双方应友好协商解决；协商不成时，任何一方均可向一嗨汽车租赁有限公司所在地的人民法院提起诉讼。
                </p>
            </div>
            <div class="agreement-btn">
                <a href="javascript:void(0)" id="isArgee">
                    已阅读同意条款
                </a>
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
                <img src="./注册_一嗨租车_files/itrust_icon.jpg">
            </a>
            <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120327164136446"
               target="_blank">
                <img src="./注册_一嗨租车_files/shgs.png">
            </a>
        </div>
    </div>
</div>
<script async="async">
    var GlobalUrl = {
        submitRegisterPhone: '/Register',
        getCaptcha: '/Common/DrawImage',
        loginCaptcha: '/Common/LoginDrawImage',
        fastLoginCaptcha: '/Common/FastLoginDrawImage',
        sendMessageCode: '/Register/SendMessage',
        existUrl: '/Register/Exists',
        CollectBooking: '/Common/CollectBooking',
        FindPasswordCaptchaCode: '/Common/FindPasswordCaptchaCode'
    };
</script>
<script type="text/javascript" src="/js/register/register" async="async">
</script>
<script>
    var URL = {
        returnUrl: 'http://www.1hai.cn/',
        completeUrl: '/Register/Complete'
    };
</script>
<script async="async">
    var _hmt = _hmt || []; (function() {
        var b = document.createElement("script");
        b.src = "//hm.baidu.com/hm.js?3d7f6839f5a39e141432b11842e73e26";
        var a = document.getElementsByTagName("script")[0];
        a.parentNode.insertBefore(b, a)
    })();
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
<!-- Admaster监测代码部署-->
<script type="text/javascript" async="async">
    var _smq = _smq || [];
    _smq.push(['_setAccount', '251d452', new Date()]);
    _smq.push(['pageview']); (function() {
        var sm = document.createElement('script');
        sm.type = 'text/javascript';
        sm.async = true;
        sm.src = ('https:' == document.location.protocol ? 'https://': 'http://') + 'cdnmaster.com/sitemaster/sm.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(sm, s);
    })();
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