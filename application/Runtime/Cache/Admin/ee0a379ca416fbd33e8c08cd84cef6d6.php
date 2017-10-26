<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>首页</title>
		
		<!--<link rel="stylesheet" type="text/css" href="/Health/public/images/my/iconfont.css">-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/title.css"/>
		<!--首页修饰-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/index.css"/>
		<!--患者管理-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/guanli.css"/>
		<!--柱形图-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/bootstrap.min.css"/>
   		<link rel="stylesheet" type="text/css" href="/Health/public/css/lianxi.css"/>
	</head>
	<body>
	<div id="div">
		<!--头-->
	<div class="top">
		<div class="top-left">
			<img src="/Health/public/images/my1.png"/>
			<span>健康源后台管理系统</span>
		</div>	
		
		<div class="top-right">
			<div class="top-div">
			<a href="#">
				
				<img  src="/Health/public/images/my.png"/>
				<span>健康源</span>
			</a>
			</div>
			<div class="top-div">
			<a href="#">
				<img src="/Health/public/images/pwd.png"/>
				<span>修改密码</span>
			</a>
			</div>
			<div class="top-div">
			<a href="#">
				<img src="/Health/public/images/auo.png"/>
				<span>退出</span>
			</a>
			</div>
		</div>
	</div>
		<!--左边-->
	<div class="right">
		<ul>
			<a href="/Health/admin.php/index/index"  style="margin-top:25px;"><li class="li" class="bbb"><p><img src="/Health/public/images/left/1.png"/>患者总览</p></li></a>
			<a href="/Health/admin.php/guanli/index"><li class="li" class="bbb"><p><img src="/Health/public/images/left/2.png"/>患者管理</p></li></a>
			<a href="3"><li class="li" id="bbb"><p><img src="/Health/public/images/left/3.png"/>分级管理</p></li></a>
			<a href="4"><li class="li" id="bbb"><p><img src="/Health/public/images/left/4.png"/>患者健康记录管理</p></li></a>
			<a href="5"  style="margin-bottom:75px;"><li class="li" id="bbb"><p><img src="/Health/public/images/left/5.png"/>服务包推广管理</p></li></a>
		
			<a href="6"><li class="li"><p><img src="/Health/public/images/left/6.png"/>设备管理</p></li></a>
			<a href="7"><li class="li"><p><img src="/Health/public/images/left/7.png"/>订单管理</p></li></a>
			<a href="8"><li class="li"><p><img src="/Health/public/images/left/8.png"/>分销系统管理</p></li></a>
			<a href="9"><li class="li"><p><img src="/Health/public/images/left/9.png"/>下载数据</p></li></a>
			<a href="10" style="margin-bottom:75px;"><li class="li" ><p><img src="/Health/public/images/left/10.png"/>硬件数据</p></li></a>
		
			<a href="11"><li class="li"><p><img src="/Health/public/images/left/11.png"/>微课堂   往期回顾</p></li></a>
			<a href="12"><li class="li"><p><img src="/Health/public/images/left/12.png"/>在线报名</p></li></a>
			<a href="13"><li class="li"><p><img src="/Health/public/images/left/13.png"/>在线咨询</p></li></a>
		</ul>
		
	</div>
		<!--内容-->
	<div id="content">
		
		

	</div>
	</div>
	</body>
	<script src="/Health/library/js/jquery-1.10.0.min.js"></script>
		<script>
//			
//			$( ".li" ).click(function() {
//			  $( ".bbb" ).css('background','#f00');
//			});
//		$(document).click(function(e) {        
//	    $(".bbb").css('background','#f00');
//	    e.stopPropagation();
//		});
	function load() {
        var url = window.location.href; // 获取当前的URL地址名
        var a = document.getElementsByTagName('a');//获取超连接的URL地址名
        for (var i=0;i<a.length;i++) {
            if (a[i]==url) {
                a[i].className='active';
            }
        }
    }
    load();
		</script>
</html>