<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>车辆详情</title>
		<link rel="stylesheet" href="/css/car/car.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/index/public.css" />
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
				<li class="active"><a href="/search">车型查询</a></li>
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
							<a href="javascript:;" title="预订" class="order-btn" data-title="{{ $rent->id }}">预  订</a>
						</div>

					</div>
					@endforeach
					</div>
				<!--store box-->
			</div>
		</div>
		<!--尾部	-->
	@include('Home.footer')
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
                $(".order-btn").click(function () {
					var id = $(this).attr("data-title");
					$.ajax({
						url:"/order",
						type:"post",
						data:{
							id:id
						},
						dataType:"json",
						success:function (data) {
							if (data.errorCode == 2) {
							    alert(data.errorMsg);
							    window.location.href = '/login';
							} else if (data.errorCode == 3) {
                                alert(data.errorMsg);
							} else {
							    alert('预订成功，稍后将有工作人员与您进行联系');
							}
                        },
						error:function (data) {
							console.log(data.responseText);
							alert("出错了，请稍后再试");
                        }
					})
                })
            }));
		</script>
	</body>
</html>
