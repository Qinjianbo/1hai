<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>关于我们</title>
		<link rel="stylesheet" href="/css/libs/bootstrap.min.css">
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/contact/contact.css">
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=8cWeg1lproZyd53ItcGMt7YCYvgKzLrb"></script>
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

				<li class="active"><a href="/about">关于我们</a></li>
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
		<div class="contact">
			<div class="container">
				<div class="address">
					<h3>我们的位置</h3>
					<div class="pull-left">
						<div class="address-info">
							<h4>大连市金石滩</h4>
							<p>大连民族大学金石滩校区</p>
							<p>邮编：116600</p>
							<p>联系电话: 04117788999</p>
						</div>
					</div>
					<div class="map-div">
						<script type="text/javascript">
                            function initialize() {
                                var mp = new BMap.Map('map');
                                var point = new BMap.Point(121.985379, 39.085993);
                                mp.centerAndZoom(point, 18);
                                var marker = new BMap.Marker(point);  // 创建标注
                                mp.addOverlay(marker);
                                marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
                                mp.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放

                            }

                            function loadScript() {
                                var script = document.createElement("script");
                                script.src = "http://api.map.baidu.com/api?v=2.0&ak=8cWeg1lproZyd53ItcGMt7YCYvgKzLrb&callback=initialize";//此为v2.0版本的引用方式
                                document.body.appendChild(script);
                            }

                            window.onload = loadScript;
						</script>
						<div id="map" class="map"></div>
					</div>
				</div>
			</div>
		</div>
		<!--尾部	-->
		@include('Home.footer')
		<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="/js/index/index.js" ></script>
	</body>
</html>
