<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>联系我们</title>
		<link rel="stylesheet" href="/css/libs/bootstrap.min.css">
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/contact/contact.css">
	</head>
	<body>
	@include('Home.top')
		<div class="container logo">
		   <a href=""><img src="/pictures/index/logo.png"></a>
		</div>
		<!--导航栏-->
		<div class="nav container">
			<ul class="clearfix">
				<li><a href="/">首页</a></li>
				<li><a href="/search">车型查询</a></li>
				<li><a href="/message">精彩提问</a></li>

				<li><a href="/about">关于我们</a></li>
				<li class="active"><a href="/contact">联系我们</a></li>
				<li><a href="/help">帮助中心</a></li>
			</ul>
		</div>
		<!--banner图-->
		<div class="banner container ">
			<ul class="clearfix imgs">
				<li><a href="#"><img src="/pictures/index/banner2.jpg" alt="banner2" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner3.jpg" alt="banner3" /></a></li>
				<li><a href="#"><img src="/pictures/index/banner5.jpg" alt="banner5" /></a></li>
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
                                url: '/message',
                                type: 'post',
                                dataType: 'json',
                                data: {
                                    realname: $name,
                                    email: $email,
                                    mobile: $phone,
                                    message: $message,
                                    qq: $qq,
                                    wechat: $wechat
                                },
                                success: function (data) {
                                    if (data) {
                                        alert('发送成功，我们会取得与你的联系来解决你的问题!');
                                    } else {
                                        alert('发送失败');
									}
                                },
                                error: function (data) {
                                    console.log(data.responseText);
                                    alert('发送出错了，请稍后再试...');
                                }
                            })
                        }
					</script>
				</div>
			</div>
		</div>
		<!--尾部	-->
	@include('Home.footer')
		<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/js/index/index.js" ></script>
	</body>
</html>
