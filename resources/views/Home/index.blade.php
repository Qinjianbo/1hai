<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>shouye</title>
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
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
						<li><a href="">帮助中心</a></li>
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
				<li class="active"><a href="/">首页</a></li>
				<li><a href="#">自驾租车</a></li>
				<li><a href="/search">车型查询</a></li>
				<li><a href="#">营业网点</a></li>
				<li><a href="#">企业服务</a></li>
				<li><a href="#">关于我们</a></li>
				<li><a href="#">联系我们</a></li>
				<li><a href="#">体验分享</a></li>
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
		<div class="content container clearfix">
			<div class="content_title">
				<h3>热租车型</h3>
				<p>百余款车型任你选，劲爆优惠天天推荐</p>
			</div>
			<div class="contentL">
				<img src="/pictures/index/hotcar.jpg" />
			</div>
			<div class="contentR">
				@foreach($top4 as $top)
				<div class="contentR_car">
					<p class="fl">{{ $top->name }}</p>
					<span class="fr">￥{{ $top->price }}/天</span>
					<img src="{{ $top->car_photo_path }}" />
				</div>
				@endforeach
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
