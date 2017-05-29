<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>首页</title>
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
	</head>
	<body>
		@include('Home.top')
		<div class="container logo">
		   <a href=""><img src="/pictures/index/logo.png"></a>
		</div>
		<!--导航栏-->
		<div class="nav container">
			<ul class="clearfix">
				<li class="active"><a href="/">首页</a></li>
				<li><a href="/search">车型查询</a></li>
				<li><a href="/message">精彩提问</a></li>

				<li><a href="/about">关于我们</a></li>
				<li><a href="/contact">联系我们</a></li>
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
					<a href="/car?car_id={{ $top->car_id }}">
					<div class="contentR_car">
						<p class="fl">{{ $top->name }}</p>
						<span class="fr">￥{{ $top->price }}/天</span>
						<img src="{{ $top->car_photo_path }}" />
					</div>
					</a>
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
		<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/js/index/index.js" ></script>
	</body>
</html>
