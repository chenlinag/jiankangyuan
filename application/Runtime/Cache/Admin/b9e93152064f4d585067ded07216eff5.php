<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
			<meta charset="UTF-8" />
			<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>首页</title>
		
		<!--<link rel="stylesheet" type="text/css" href="/Health/public/images/my/iconfont.css">-->

		<link rel="stylesheet" type="text/css" href="/Health/public/css/title.css"/>
		<!--在线报名-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/Consu.css"/>
		<!--分级管理-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/level.css"/>
		<!--首页修饰-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/index.css"/>
		<!--患者管理-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/Patient.css"/>
		<!--设备管理-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/device.css"/>
		<!--柱形图-->
		<link rel="stylesheet" type="text/css" href="/Health/public/css/bootstrap.min.css"/>
   		<link rel="stylesheet" type="text/css" href="/Health/public/css/lianxi.css"/>
   		<script src="/Health/library/js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="/Health/library/js/jquery.jqChart.min.js" type="text/javascript"></script>
		<script src="/Health/library/js/jquery-1.10.0.min.js"></script>
		<!-- 聊天 -->
<!-- <script src="js/jquery-1.5.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jqChart.min.js" type="text/javascript"></script> -->
		<script src="/Health/public/js/jquery-1.5.1.min.js" type="text/javascript"></script>
		<script src="/Health/public/js/jquery.jqChart.min.js" type="text/javascript"></script>
		<!-- js -->
		<script type="text/javascript" src="/Health/library/js/jquery-1.10.0.min.js"></script>
		<script type="text/javascript" src="/Health/library/js/jquery.min.js"></script>
		<script type="text/javascript" src="/Health/library/js/layer.js"></script>
		<script type="text/javascript" src="/Health/library/js/laydate/laydate.js"></script>
<!--[if IE]><script lang="javascript" type="text/javascript" src="js/canvas.js"></script><![endif]-->
	</head>
	<body>
	<div style="height:88%;width:100%">
			<!--头-->
			<div class="top">
				<div class="top-left">
					<img src="/Health/public/images/top/login.png"/>
					<span> 健康源后台管理系统</span>
				</div>	
				<div class="top-right">
					<div class="top-div">
					<a href="javascript:;">
						<img  src="/Health/public/images/my.png"/>
						<span><?php echo ($_SESSION["userMsg"]['username']); ?></span>
					</a>
					</div>
					<div class="top-div">
					<a href="javascript:;">
						<img src="/Health/public/images/pwd.png"/>
						<span>修改密码</span>
					</a>
					</div>
					<div class="top-div">
					<a href="/Health/admin.php/Login/logout">
						<img src="/Health/public/images/auo.png"/>
						<span>退出</span>
					</a>
					</div>
				</div>
			</div>
				<!--左边-->
			<div style="height:100%;">
				<div class="right" >
					<ul>
						<a href="/Health/admin.php/Index/index"  style="margin-top:25px;"><li class="li" class="bbb"><p><img src="/Health/public/images/left/1.png"/>患者总览</p></li></a>
						<a href="/Health/admin.php/Patient"><li class="li" class="bbb"><p><img src="/Health/public/images/left/2.png"/>患者管理</p></li></a>
						<a href="/Health/admin.php/Level"><li class="li" id="bbb"><p><img src="/Health/public/images/left/3.png"/>分级管理</p></li></a>
					
						<a href="/Health/admin.php/Service/index"><li class="li" id="bbb"><p><img src="/Health/public/images/left/5.png"/>服务包管理</p></li></a>
						<a href="/Health/admin.php/Device/index"><li class="li"><p><img src="/Health/public/images/left/6.png"/>设备管理</p></li></a>
					
						<!-- <a href="/Health/admin.php/Lower/index"><li class="li"><p><img src="/Health/public/images/left/9.png"/>下载数据</p></li></a> -->
						<a href="/Health/admin.php/Hard/index"><li class="li" ><p><img src="/Health/public/images/left/10.png"/>硬件数据</p></li></a>	
						
						<a href="/Health/admin.php/Consu/index"><li class="li"><p><img src="/Health/public/images/left/12.png"/>在线报名</p></li></a>
						<a href="/Health/admin.php/Online/index"><li class="li"><p><img src="/Health/public/images/left/13.png"/>在线咨询</p></li></a>
					</ul>
				</div>
					<!--内容-->
				<div id="content" >
					<div style="font-size:20px;margin:1% 1%;border-bottom: 1px solid #ddd;padding:0 0 10px 0">硬件数据</div>

<div id="dev-huan" style="margin-left:4%;">
		<form action="/Health/admin.php/Device/insert" method="post">	
			<table style="width:65%;">
				<tr>
					<td style="font-size:16px;">设备类型：</td>
					<td>
						<select name="select" class="pat-na">
							<option class="pat-na" name="patna">血压计</option>
							<option class="pat-na" name="patna">压血计</option>
							<option class="pat-na" name="patna">计血压</option>
    					</select>
    				</td>
					<td style="font-size:16px;">设备编号：</td>
					<td><input type="text" style="font-size:16px;" placeholder="请输入设备编号..." name="text"></td>
					<td><a href="javascript:;" id="caxun">查询<input type="submit"></a></td>
				</tr>
			</table>
		</from>
</div>
<div id="dev-div">
		<table cellspacing="0">
			<tr id="dev-tr">
				<td>患 者 姓 名</td>
				<td>设 备 编 号</td>
				<td>设 备 类 型</td>
				<td>数 据 绑 定</td>
				<td style="width:51%;">解 除 绑 定</td>
			</tr>
			<tr>
				<td>安保处</td>
				<td>2131564JGHsa</td>
				<td>血压计</td>
				<td><a href="javascript:;" class="details" ><img class="pat-img" src="/Health/public/images/hzgl/binding.png"/></a></td>
				<td style="width:51%;"><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></td>
			</tr>
			<tr>
				<td>安保处</td>
				<td>2131564JGHsa</td>
				<td>血压计</td>
				<td><a href="javascript:;" class="details" ><img class="pat-img" src="/Health/public/images/hzgl/binding.png"/></a></td>
				<td style="width:51%;"><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></td>
			</tr>
			<tr>
				<td>安保处</td>
				<td>2131564JGHsa</td>
				<td>血压计</td>
				<td><a href="javascript:;" class="details" ><img class="pat-img" src="/Health/public/images/hzgl/binding.png"/></a></td>
				<td style="width:51%;"><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></td>	
			</tr>
			<tr>
				<td>安保处</td>
				<td>2131564JGHsa</td>
				<td>血压计</td>
				<td><a href="javascript:;" class="details" ><img class="pat-img" src="/Health/public/images/hzgl/binding.png"/></a></td>
				<td style="width:51%;"><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></td>
			</tr>
		</table>
	</div>




				</div>
		
		</div>
	</div>
	</body>

		<script>
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