<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" href="/css/libs/bootstrap.min.css">
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/contact/contact.css">
	</head>
	<body>
		<div class="top">
			<div class="container">
				<div class="top_l fl">
					<ul class="clearfix">
						<li><a href="/login">登录</a></li>
						<li><a href="/register">免费注册</a></li>
						<li><a href="">我的租车</a></li>
					</ul>
				</div>
				<div class="top_r fr">
					<ul class="clearfix">
						<li><a href="">自驾分销</a></li>
						<li><a href="">体验分享</a></li>
						<li><a href="">投资者关系</a></li>
						<li><a href="">网站导航</a></li>
						<li><a href="">English</a></li>
						<li><a href="">400-888-6608</a></li>
						<li><a href="">微信</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container logo">
		   <a href=""><img src="/pictures/index/logo.png"></a>
		</div>
		<!--导航栏-->
		<div class="nav container">
			<ul class="clearfix">
				<li><a href="/">首页</a></li>
				<li><a href="#">自驾租车</a></li>
				<li><a href="/search">车型查询</a></li>
				<li><a href="#">体验分享</a></li>

				<li><a href="#">关于我们</a></li>
				<li class="active"><a href="/contact">联系我们</a></li>
				<li><a href="/help">帮助中心</a></li>
			</ul>
		</div>
		<!--banner图-->
		<div class="banner container ">
			<ul class="clearfix imgs">
				<li><a href="#"><img src="/pictures/index/banner1.jpg" alt="banner1" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner2.jpg" alt="banner2" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner3.jpg" alt="banner3" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner4.jpg" alt="banner4" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner5.jpg" alt="banner5" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner1.jpg" alt="banner1" /></a></li>
			</ul>
			<div class="arrow aright">></div>
			<div class=" arrow aleft"><</div>
		</div>
		<div class="contact">
			<div class="container">
				<div class="contact-head">
					<h2>发送信息给我们</h2>
					<form action="javascript:void(0);">
						<div class="col-md-6 contact-left">
							<input type="text" class="text" id="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<input type="text" class="text" id="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<input type="text" class="text" id="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
							<input type="text" class="text" id="qq" value="QQ" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'QQ';}">
							<input type="text" class="text" id="wechat" value="Wechat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Wechat';}">
						</div>
						<div class="col-md-6 contact-right">
							<textarea value="Message" id="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input type="submit" value="发送" onclick="sendMessage()">
						</div>
						<div class="clearfix"></div>
					</form>
					<script type="text/javascript">
                        function sendMessage() {
                            var $name = $('#Name').val();
                            var $email = $('#Email').val();
                            var $phone = $('#Phone').val();
                            var $message = $('#Message').val();
                            var $qq = $('#qq').val();
                            var $wechat = $('#wechat').val();
                            $.ajax({
                                url: '/index.php/System/contactUs.html',
                                type: 'post',
                                dataType: 'json',
                                data: {
                                    name: $name,
                                    email: $email,
                                    phone: $phone,
                                    message: $message,
                                    qq: $qq,
                                    wechat: $wechat
                                },
                                success: function (data) {
                                    if (data.status == 1) {
                                        alert('发送成功，我们会取得与你的联系来解决你的问题!');
                                    } else if (data.status == 2) {
                                        alert('发送失败，请稍后再试...');
                                    } else {
                                        alert('未知错误，请稍后再试...');
                                    }
                                },
                                error: function () {
                                    alert('发送出错了，请稍后再试...');
                                }
                            })
                        }
					</script>
				</div>
			</div>
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
		<script type="text/javascript" src="/js/index/index.js" ></script>
	</body>
</html>
