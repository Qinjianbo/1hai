<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>shouye</title>
		<link rel="stylesheet" href="/css/car/car.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/index/public.css" />
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
				<li class="active"><a href="/search">车型查询</a></li>
				<li><a href="#">体验分享</a></li>

				<li><a href="/about">关于我们</a></li>
				<li><a href="/contact">联系我们</a></li>
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
		<div class="main-wrap">
			<div class="main-box">
				<!--car box-->
				<div class="car-box">
					<div class="car-img">

						<img src="{{ $car->car_photo_path }}" alt="{{ $car->name }}" onerror="this.src='/Content/Images/Shared/defaultCar.png'">
					</div>
					<form action="/Order/BrandStep2/SaveBooking" data-ajax="true" data-ajax-begin="CheckBooking" data-ajax-complete="LoadStoreList" data-ajax-method="Post" id="form0" method="post">        <div class="car-info">
							<div class="car-name">
								{{ $car->name }}</div>
							<div class="car-des">
								{{ $car->properties }}
							</div>
						</div>
					</form>    <a class="sel-car" href="/search">调整车型</a>
				</div>

				<!--car box-->
				<!--store box-->
				<div class="store-box" id="J_StoreBoxe"><div class="area-box " id="J_AreaBox">
						<div>
							<a href="javascript:;" class="show-all on">全部</a>
							@foreach($cities as $city)
							<a href="javascript:;">{{ $city->city_name }}</a>
							@endforeach
						</div>
					</div>
					@foreach($rents as $rent)
					<div class="store-list" st="0" sd="松江区" log="121.237396" lag="31.035334" data-baidu-longitude="121.237396" data-baidu-latitude="31.035334" bt="b">
						<div class="store-info">
							<p>
								{{ isset($shops[$rent->shop_id]) ? $shops[$rent->shop_id]->shop_name : '' }}
							</p>
							<span>{{ isset($cities[$rent->city_id]) ? $cities[$rent->city_id]->city_name : '' }}</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>{{ $rent->price ?? 0 }}<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="2" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxw0rwIe1xMLDFriEkRdmjGoVnuM/mW2DxfwAb5eXJjVt6MwdbYYqXoB&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					@endforeach
					</div>
				<!--store box-->
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
		<script type="text/javascript">
			$(document).ready((function () {
				$(".type-box a").click(function(){
	               $(this).css({"background":"blue","color":"white"});
				});
                $(".brand-box-list a").click(function(){
                    $(this).css({"background":"blue","color":"white"});
                });
            }));
		</script>
	</body>
</html>
