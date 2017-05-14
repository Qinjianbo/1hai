<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>shouye</title>
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/search/search.css" />
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

				<li><a href="#">关于我们</a></li>
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
			<!--brandstep1 car box-->
			<div class="car-wrap" id="J_CarType">
				<!--品牌列表-->
				<div class="brand-box">
					<div class="type-box">
						<span>类 型：</span>
						<a href="/search?type_id=0&brand_id={{ $brand_id }}" class="J_CarLevel" id="type_0">全部</a>
						@foreach($types as $type)
							<a href="/search?type_id={{ $type->id }}&brand_id={{ $brand_id }}" class="J_CarLevel" id="{{ "type_".$type->id }}">{{ $type->type_name }}</a>
						@endforeach
					</div>
					<div class="brand-box-list">
						<span>品 牌：</span>
						<!--品牌标签页-->
						<div class="tabbox" id="clicktab">
							<div class="tabcon tab-all" style="display: block;">
								<a bnid="8" href="/search?brand_id=0&type_id={{ $type_id }}" class="J_BrandName">全部</a>
								@foreach($brands as $brand)
									<a bnid="8" href="/search?brand_id={{ $brand->id }}&type_id={{ $type_id }}" class="J_BrandName">{{ $brand->brand_name }}</a>
								@endforeach
							</div>
						</div>
						<!--标签页结束-->
					</div>
				</div>

				<!--brandstep1 choosen box-->
				<div class="car-box">
					@if(!$cars->isEmpty())
						@foreach($cars as $car)
							<a href="/car?car_id={{ $car->id }}">
								<div class="car-list J_car" cid="416" bnid="8" cl="经济型" url="/BrandStep2/8/416?from=BrandProcess" vtl="0">

									<em class=""></em>
									<div class="car-img">

										<img src="{{ $car->car_photo_path }}" alt="{{ $car->name }}" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150729/86c3b86b-1079-48cb-ab58-4b26a1bb982f.jpg " style="display: inline;">
									</div>
									<div class="car-des">
										<span>{{ $car->name }}</span>
										<i>
											{{ $car->properties }}
										</i>
									</div>
								</div>
							</a>
						@endforeach
						{{ $cars->links() }}
					@else
						<div class="J_NoCar">
							<div class="car-empty-box">
							</div>
						</div>
					@endif
				</div>
				<!--brandstep1 car box-->
			</div>
			<!--brandstep1 car box-->
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
