<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>shouye</title>
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/help/help.css" />
	</head>
	<body>
		<div class="top">
			<div class="container">
				<div class="top_l fl">
					@if(session('user') && !session('user')->isEmpty())
						<ul class="clearfix">
							<li>欢迎会员：<a href="javascript:void(0)" id="center">{{ session('user')['realname'] ?? '一嗨会员' }}</a></li>
							<li><a href="/user/logout" id="logout">退出</a></li>
						</ul>
					@else
						<ul class="clearfix">
							<li><a href="/login">登录</a></li>
							<li><a href="/register">免费注册</a></li>
						</ul>
					@endif
				</div>
				<div class="top_r fr">
					<ul class="clearfix">
						<li><a href="/message">精彩提问</a></li>
						<li><a href="/about">关于我们</a></li>
						<li><a href="/contact">联系我们</a></li>
						<li><a href="/help">帮助中心</a></li>
						<li><a href="">400-888-6608</a></li>
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
				<li><a href="/search">车型查询</a></li>
				<li><a href="/message">精彩提问</a></li>

				<li><a href="/about">关于我们</a></li>
				<li><a href="/contact">联系我们</a></li>
				<li class="active"><a href="/help">帮助中心</a></li>
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
		<div>
		<div class="helpcenter">
			帮助中心
		</div>
		<div class="help_tab clearfix">
			<ul>
				<li>
					1
				</li>
				<li>
					2
				</li>
				<li>
					3
				</li>
				<li>
					4
				</li>
				<li>
					5
				</li>
			</ul>
		</div>
		<div class="tabs">
			<div class="tab tab1">
				<ol>
					<li>1.网络预订-官网，客户端，触屏版</li>
					<li>2.挑选车型 </li>
					<li>3.选择优惠活动/增值服务</li>
					<li>4.核对用车信息/选择支付方式</li>
					<li>5.提交订单</li>
				</ol>
			</div>
			<div class="tab tab2">
				<ol>
					<li>1.出示两证一卡-本人二代身份证，驾驶证，信用卡</li>
					<li>2.手续办理-核对订单信息-交纳租金,刷取预付权,验收车辆</li>
					<li>3.取车完成</li>
				</ol>
			</div>
			<div class="tab tab3">
				<ol>
					<li>1.续租-请提前4小时拨打一嗨客服电话或网上续租订单</li>
					<li>2.事故救援-先拨打110报案，然后拨打事故救援012-64276225 </li>
				</ol>
			</div>
			<div class="tab tab4">
				<ol>
					<li>1.车辆验收</li>
					<li>2.费用结算</li>
					<li>3.刷取违章预授权-如车辆损坏需在刷取维修押金</li>
				</ol>
			</div>
			<div class="tab tab5">
				<ol>
					<li>1.服务完成-如租赁期间没有违章记录，则由银行30天左右自动解冻违章预授权。</li>
				</ol>
			</div>
		</div>
		<script type="text/javascript" src="/js/libs/jquery-1.9.1.min.js" ></script>
		<script>
            $(function(){
                $(".help_tab li").first().css("opacity","1");
                $(".tab").first().css("display","block");

                $(".help_tab li").click(function(){
                    $(this).css("opacity","1").siblings("li").css("opacity","0.5");
                    $(".tab").eq($(this).index()).css("display","block").siblings().css("display","none")
					console.log($(this).index())
                })
            })
		</script>
		<div/>
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
		</div>
	</body>
</html>
