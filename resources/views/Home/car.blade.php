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
				<li class="active"><a href="/search">车型查询</a></li>
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
							<a href="javascript:;">机场/火车站</a>
							<a href="javascript:;">宝山区</a>
							<a href="javascript:;">崇明县</a>
							<a href="javascript:;">奉贤区</a>
							<a href="javascript:;">嘉定区</a>
							<a href="javascript:;">金山区</a>
							<a href="javascript:;">闵行区</a>
							<a href="javascript:;">浦东新区</a>
							<a href="javascript:;">普陀区</a>
							<a href="javascript:;">松江区</a>
							<a href="javascript:;">闸北区</a>
						</div>
					</div>
					<div class="store-list" st="0" sd="松江区" log="121.237396" lag="31.035334" data-baidu-longitude="121.237396" data-baidu-latitude="31.035334" bt="b">
						<div class="store-info">
							<p>
								松江店
							</p>
							<span>通跃路29号(地铁9号线松江新城站靠近肯德基)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="2" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxw0rwIe1xMLDFriEkRdmjGoVnuM/mW2DxfwAb5eXJjVt6MwdbYYqXoB&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="闸北区" log="121.457799" lag="31.290256" data-baidu-longitude="121.457799" data-baidu-latitude="31.290256" bt="b">
						<div class="store-info">
							<p>
								马戏城店
							</p>
							<span>共和新路2750号(近灵石路口,地铁1号线4号出口)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="34" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxyLNLpO1lmVwRX3rJqcGVOjbkySDG2Lj4DSD9jn67jCAmx5RmWXSVx%2B&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="嘉定区" log="121.263673" lag="31.389891" data-baidu-longitude="121.263673" data-baidu-latitude="31.389891" bt="b">
						<div class="store-info">
							<p>
								嘉定店
							</p>
							<span>塔城路269号(近金沙路口)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="36" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxwnF%2B39o3e3QCFNytISyInzOVslL6i%2BgPixUWoJ7N04Z31sHdq5Hyx4&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="闵行区" log="121.392339" lag="31.113632" data-baidu-longitude="121.392339" data-baidu-latitude="31.113632" bt="b">
						<div class="store-info">
							<p>
								莘庄店
							</p>
							<span>莘朱路210号（还车地点:富都路,闵城路路口）</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="45" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxxshXIk%2BhFlV5kyzyR/SgW7FFyvjzvQfIlzF6QfFAuVxuQnaFq5txJQ&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="浦东新区" log="121.59351" lag="31.27187" data-baidu-longitude="121.59351" data-baidu-latitude="31.27187" bt="b">
						<div class="store-info">
							<p>
								金桥店
							</p>
							<span>张杨北路529号</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="391" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxyjykGxiBlWwHkUHcwhFAGdyaZrlPu43UfHsE6QO4T56NUS/0fx/GVb&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="宝山区" log="121.44273" lag="31.335569" data-baidu-longitude="121.44273" data-baidu-latitude="31.335569" bt="b">
						<div class="store-info">
							<p>
								通河新村店
							</p>
							<span>长江西路2315号一楼商铺</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="392" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxxUGMzd%2BEE/FWlTS8kbo9XyrsJ46/A6FsbsBggq16UKWPHMbBOYLDOk&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="闵行区" log="121.376205" lag="31.188707" data-baidu-longitude="121.376205" data-baidu-latitude="31.188707" bt="b">
						<div class="store-info">
							<p>
								龙柏店
							</p>
							<span>虹井路610号(红松路和虹井路路口,龙柏一村对面)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="675" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxwvcXgNuGvIAb6bfiItwqOYhQjeHSnYGc8Gt0bqGSon%2BnBJCYJA1SX0&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="1" sd="闵行区" log="121.334592" lag="31.202122" data-baidu-longitude="121.334592" data-baidu-latitude="31.202122" bt="b">
						<div class="store-info">
							<p>
								虹桥机场T2店
								<em class="fullday"></em>
								<em class="airport"></em>
							</p>
							<span>虹桥机场P12停车场（T2到达1楼大厅永和大王右侧医疗急救通道直走）（还车请至申达一路P13停车场或P6、P7到</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>111<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="799" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxwz70GcpfRA5AceH/tM5C/gzCr9z9XLNNtzasj2K1YMyEgb9GOBrQXD&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="崇明县" log="121.407337" lag="31.625285" data-baidu-longitude="121.407337" data-baidu-latitude="31.625285" bt="b">
						<div class="store-info">
							<p>
								崇明南门店
							</p>
							<span>城桥镇东门路83号1层(环保局对面)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="868" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxyxXbGmX67qItQc8cglfeRyMb5oJWgu6VjKvixl7Lt/rHXLMoveLYyg&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="金山区" log="121.34754" lag="30.738315" data-baidu-longitude="121.34754" data-baidu-latitude="30.738315" bt="b">
						<div class="store-info">
							<p>
								金山店
							</p>
							<span>板桥西路508号一层(板桥西路和蒙山路路口往西100米)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="883" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxx%2BWwUAG6r2pxBqOgbpT76sJrtfe8Wm1P6cAUKcYNNQCsdtgLtFPYxq&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="奉贤区" log="121.480484" lag="30.921104" data-baidu-longitude="121.480484" data-baidu-latitude="30.921104" bt="b">
						<div class="store-info">
							<p>
								南桥店
							</p>
							<span>南桥镇南奉公路8942号</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="937" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxxxnHimn05Pke5w2arUXeQe3s%2BHHqxO6VpJx9txA4W8VKIkfijtztPA&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="宝山区" log="121.391626" lag="31.356409" data-baidu-longitude="121.391626" data-baidu-latitude="31.356409" bt="b">
						<div class="store-info">
							<p>
								顾村店
							</p>
							<span>顾北路731号近沪太路</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="979" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxzFNhxFBvsxKoHNNrVnq6RSZzU8UPlHrWWid0MTY0CeS9n72XWliZxA&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="闵行区" log="121.353765" lag="31.168157" data-baidu-longitude="121.353765" data-baidu-latitude="31.168157" bt="b">
						<div class="store-info">
							<p>
								七宝店
							</p>
							<span>吴中路2370号</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="1323" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxzIRwBNUo8TVwYJnIBSh5TpwovxGDKR2CHjkVvFeroXk9eknMVDWM9U&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="闵行区" log="121.387395" lag="31.169166" data-baidu-longitude="121.387395" data-baidu-latitude="31.169166" bt="b">
						<div class="store-info">
							<p>
								静安新城店
							</p>
							<span>龙茗路2789号1层(靠近9号线合川路站)</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="1324" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxzmcfimF4Tg5EtJmlZjjjJyFSZitA7%2BSRlTRq2WQ1RjUSX0JaP1r%2BCu&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="普陀区" log="121.444482" lag="31.247554" data-baidu-longitude="121.444482" data-baidu-latitude="31.247554" bt="b">
						<div class="store-info">
							<p>
								亚新广场便捷点
							</p>
							<span>长寿路388号京沙停车场（7号线和13号线）长寿路站三号口</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="1400" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxyREQSKMvrH%2Bp650d46rXmmZXo3gU1sG0g7BkU1uQa2y2d0S9mnERs5&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="闸北区" log="121.457758" lag="31.312155" data-baidu-longitude="121.457758" data-baidu-latitude="31.312155" bt="b">
						<div class="store-info">
							<p>
								彭浦店
							</p>
							<span>场中路2121号</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="1480" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxy/ApetP9nH%2BZsidynMqovEljfecuCcLsx7VOmQ1qJrkO87kRBifb6t&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
					<div class="store-list" st="0" sd="宝山区" log="121.419458" lag="31.310009" data-baidu-longitude="121.419458" data-baidu-latitude="31.310009" bt="b">
						<div class="store-info">
							<p>
								大场便捷点
							</p>
							<span>沪太路2398号沪太路洛场路</span>
						</div>
						<div class="store-price">
							<span><em>¥</em>91<i>/日均</i></span>
						</div>
						<div class="store-btn">
							<a href="javascript:;" title="预订" class="order-btn" sid="2689" cid="416" url="/Order/BrandStep2/Booking?sqs=Oefmqz1boxym11n8k/2KQP8U76a0164/wM9JFXjDdEWPpXqLiwX9nJr3kntWTfne&amp;from=BrandProcess" t="1">预  订</a>
						</div>

					</div>
				</div>
				<!--store box-->
			</div>
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
