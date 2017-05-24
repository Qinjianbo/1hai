<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>shouye</title>
		<link rel="stylesheet" href="/css/car/car.css" />
		<link rel="stylesheet" href="/css/index/index.css" />
		<link rel="stylesheet" href="/css/index/public.css" />
		<link rel="stylesheet" href="/css/message/message.css"/>
	</head>
	<body>
		<div class="top">
			<div class="container">
				<div class="top_l fl">
					<ul class="clearfix" id="after_login" style="display: none">
						<li>欢迎会员：<a href="javascript:void(0)" id="center">一嗨会员</a></li>
						<li><a href="javascript:;" id="logout">退出</a></li>
					</ul>
					<ul class="clearfix" id="before_login">
						<li><a href="/login">登录</a></li>
						<li><a href="/register">免费注册</a></li>
					</ul>
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
				<li class="active"><a href="/message">精彩提问</a></li>

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
		<div id="main">
			<div class="main-con">
				<div class="wrap-tylist">
					<table id="DataList_ppl_ty" cellspacing="0" style="width:100%;border-collapse:collapse;">
						<tbody>
						@foreach($top20 as $message)
						<tr>
							<td>
								<div class="box-tylist" id="ppl4015">
									<strong class="u-npho">
										{{ $message->realname }}提问<span></span>：</strong>
									<p class="up-con">
										<strong>{{ $message->message }}？</strong><br/><br/>{{ date('Y-m-d', $message->created_at) }}
									</p>
									<hr>
									<p class="up-con">
										<strong>{{ $message->reply }}</strong><br/><br/>
										{{ date('Y-m-d', $message->updated_at) }}
									</p>
								</div>
							</td>
						</tr>
						@endforeach
						</tbody></table>
				</div>
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
		<script type="text/javascript" src="/js/libs/jquery.cookie.js"></script>
		<script type="text/javascript" src="/js/inout.js"></script>
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
