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
				<li><a href="/">首页</a></li>
				<li><a href="#">自驾租车</a></li>
				<li><a href="#">国际租车</a></li>
				<li class="active"><a href="/search">车型查询</a></li>
				<li><a href="#">营业网点</a></li>
				<li><a href="#">企业服务</a></li>
				<li><a href="#">接送服务</a></li>
				<li><a href="#">精彩活动</a></li>
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
		<div class="main-wrap">
			<!--brandstep1 search box-->

			<!--brandstep1 search box-->

			<!--brandstep1 car box-->
			<div class="car-wrap" id="J_CarType">
				<!--品牌列表-->
				<div class="brand-box">
					<div class="type-box">
						<span>类 型：</span>
						@foreach($types as $type)
							<a href="javascript:;" class="J_CarLevel" id="{{ "type_".$type->id }}">{{ $type->type_name }}</a>
						@endforeach
					</div>
					<div class="brand-box-list">
						<span>品 牌：</span>
						<!--品牌标签页-->
						<div class="tabbox" id="clicktab">
							<div class="tabcon tab-all" style="display: block;">
								@foreach($brands as $brand)
									<a bnid="8" href="JavaScript:;" class="J_BrandName">标致</a>
								@endforeach
							</div>
						</div>
						<!--标签页结束-->
					</div>
				</div>


				<div class="choosen-box" style="display: none;">
					<div class="J_Search">
						<i>已选条件: </i>
						<div class="selected carLevel">
						</div>
						<div class="selected carBrand">
						</div>
						<a href="#1" id="J_SearchClear">清除条件</a>
					</div>
				</div>
				<!--brandstep1 choosen box-->
				<div class="car-box">
					<div class="car-list J_car" cid="416" bnid="8" cl="经济型" url="/BrandStep2/8/416?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150729/86c3b86b-1079-48cb-ab58-4b26a1bb982f.jpg " alt="标致301" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150729/86c3b86b-1079-48cb-ab58-4b26a1bb982f.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>标致301</span>
							<i>
								三厢&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="82" bnid="9" cl="经济型" url="/BrandStep2/9/82?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150803/027a0865-a66e-4090-a252-192e65259113.jpg " alt="别克凯越" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150803/027a0865-a66e-4090-a252-192e65259113.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>别克凯越</span>
							<i>
								三厢&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="143" bnid="27" cl="舒适型" url="/BrandStep2/27/143?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150730/84e7a749-7cd8-45b4-bd3a-023d0f908578.jpg " alt="大众斯柯达明锐" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150730/84e7a749-7cd8-45b4-bd3a-023d0f908578.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>大众斯柯达明锐</span>
							<i>
								三厢&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="414" bnid="8" cl="SUV" url="/BrandStep2/8/414?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150729/be73d241-ea7a-4c7d-83a8-e1472b9ba99e.jpg " alt="标致2008" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150729/be73d241-ea7a-4c7d-83a8-e1472b9ba99e.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>标致2008</span>
							<i>
								SUV&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="421" bnid="2" cl="舒适型" url="/BrandStep2/2/421?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150729/7cc2094a-b090-4f52-b4d0-95a1383581e0.jpg " alt="大众朗逸" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150729/7cc2094a-b090-4f52-b4d0-95a1383581e0.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>大众朗逸</span>
							<i>
								三厢&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="564" bnid="8" cl="SUV" url="/BrandStep2/8/564?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20151228/61923620-8185-433d-930e-9bc9ad999a81.jpg " alt="标致3008" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20151228/61923620-8185-433d-930e-9bc9ad999a81.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>标致3008</span>
							<i>
								SUV&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="360" bnid="27" cl="精英型" url="/BrandStep2/27/360?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150730/781b8976-42f5-4790-9fa7-63b6ea6fc639.jpg " alt="大众斯柯达速派" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150730/781b8976-42f5-4790-9fa7-63b6ea6fc639.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>大众斯柯达速派</span>
							<i>
								三厢&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="car-list J_car" cid="369" bnid="59" cl="经济型" url="/BrandStep2/59/369?from=BrandProcess" vtl="0">

						<em class=""></em>
						<div class="car-img">

							<img src=" https://image.1hai.cn/images/cartype/20150729/92c1d014-66ed-423c-9dda-241a134ae21f.jpg " alt="MGGT" onerror="this.src='/Content/Images/Shared/defaultCar.png' " data-original=" https://image.1hai.cn/images/cartype/20150729/92c1d014-66ed-423c-9dda-241a134ae21f.jpg " style="display: inline;">
						</div>
						<div class="car-des">
							<span>MGGT</span>
							<i>
								三厢&nbsp;<txt>5</txt>座&nbsp; 自动
							</i>
						</div>
					</div>
					<div class="J_NoCar" style="display: none;">
						<!--没有车型提示-->
						<div class="car-empty-box">
						</div>
						<!--没有车型提示-->
					</div>
					<div class="load-more J_LoadMore">
						<a href="javascript:;"></a>
					</div>
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
						<li>{{ $cityCount }}多座城市</li>
						<li>{{ $shopCount }}多服务网点</li>
						<li>{{ $carCount }}余种车型</li>
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
