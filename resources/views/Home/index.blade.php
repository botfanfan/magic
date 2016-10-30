<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>河海魔法屋</title>
  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="{{asset(env('SA').'Home/assets/css/amazeui.min.css')}}">
  <link rel="stylesheet" href="{{asset(env('SA').'Home/assets/css/app.css')}}">
  <link rel="stylesheet" href="{{asset(env('SA').'Home/passets/css/style.css')}}"/>
</head>
<body>
<!--在这里编写你的代码-->
<h1>河海大学</h1>
<h2>在河海，魔法屋给你家的感觉</h2>
<div class="container">
	<ul class="am-avg-sm-3">
		<li><i class="am-icon-calendar am-icon-sm"></i><br />校历</li>
		<li><i class="am-icon-car am-icon-sm"></i><br />校车</li>
		<li class="right"><i class="am-icon-table am-icon-sm"></i><br />课表</li>
	</ul>
	<ul class="am-avg-sm-3">
		<li><i class="am-icon-balance-scale am-icon-sm"></i><br />比赛</li>
		<li><i class="am-icon-calendar-check-o am-icon-sm"></i><br />考试</li>
		<li class="right"><i class="am-icon-user-plus am-icon-sm"></i><br />讲座</li>
	</ul>
	<ul class="am-avg-sm-3">
		<li><i class="am-icon-money am-icon-sm"></i><br />二手</li>
		<li><i class="am-icon-heart am-icon-sm"></i><br />失物</li>
		<li class="right"><i class="am-icon-child am-icon-sm"></i><br />租赁</li>
	</ul>
	<ul class="am-avg-sm-3 bottom">
		<li><i class="am-icon-book am-icon-sm"></i><br />学习</li>
		<li><i class="am-icon-headphones am-icon-sm"></i><br />考研</li>
		<li class="right"><i class="am-icon-flask am-icon-sm"></i><br />技能</li>
	</ul>
</div>
<div class="footer">
	&copy;河海大学魔法屋
</div>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="{{asset(env('SA').'Home/assets/js/jquery.min.js')}}"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="{{asset(env('SA').'Home/assets/js/amazeui.min.js')}}"></script>
</body>
</html>
