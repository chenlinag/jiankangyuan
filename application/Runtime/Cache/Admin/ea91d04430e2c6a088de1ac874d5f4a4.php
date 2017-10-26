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
					<!-- 添加 -->
	<div id="pat-tian">
		<a href="/Health/admin.php/Level/inse" id="xinzeng">+ 添 加</a>
	</div>
<!-- 医院医师 -->
<!-- 	 -->
<div id="admin_div">
<div class="admin_tit_now"  onClick="change(0)">
</div>
	<div class="admin_tit_now" onClick="change(1)">
		<table cellspacing="0" id="leve-table">
			<tr>
			<!-- <td colspan="2" rowspan="2">1</td> -->
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></a></td>
				<td class="leve-tb yd"><p>啊实打 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学1</p></td>
			</tr>
			<tr ><!-- style="background:#31b2ec;" -->
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(2)">
		<table cellspacing="0" id="leve-table">
			<tr>
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>啊实打 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(2)">
		<table cellspacing="0" id="leve-table">
			<tr>
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>呵 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(3)">
		<table cellspacing="0" id="leve-table">
			<tr>
			
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>呵呵呵 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(4)">
		<table cellspacing="0" id="leve-table">
			<tr>
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>呵呵 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(5)">
		<table cellspacing="0" id="leve-table">
			<tr>
			
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>呵呵 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(6)">
		<table cellspacing="0" id="leve-table">
			<tr>
			
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>呵呵 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
	<div onClick="change(7)">
		<table cellspacing="0" id="leve-table">
			<tr>
				<td rowspan="2" id="leve-ta"><img class="tou-img" src="/Health/public/images/640.jpg"></td>
				<td class="leve-tb yd"><p>呵呵 (营销A组)</p></td>
			</tr>
			<tr>
				<td class="leve-tb xd"><p>重庆南开医师大学</p></td>
			</tr>
			<tr >
				<td colspan="2" class="leve-tc">
					<div><a href="javascript:;" class="a1 a">编 辑</a><a href="javascript:;" class="a2 a" >删 除</a></div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div id="asdasd">
	<div class="admin_now">
			
	</div>

	<div>
		<table cellspacing="0">
			<tr class="leve-tr">
				<td>头像</td>
				<td>顾问姓名</td>
				<td>联系电话</td>
				<td>性别</td>
				<td>组别</td>
				<td>个人简介</td>
				<td>患者<span style="font-size:12px;">（人数）</span></td>
				<td style="width:15%;">操作</td>
			</tr>
			<tr class="one-tr">
				<td>啊啊啊</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销A组)</td>
				<td>重庆三峡医院</td>
				<td>30人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>	
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销A组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销B组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销b组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销b组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销c组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销c组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销d组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销d组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>(营销e组)</td>
				<td>重庆三峡医院</td>
				<td>20人</td>
				<td>
					<a href="/Health/admin.php/level/property" class="a1 a">详情</a>
					<a href="javascript:;" class="a3 a">编 辑</a>
					<a href="javascript:;" class="a2 a" >删 除</a>
				</td>
			</tr>
		</table>

	</div>
	
	
</div>
	<div style="float:right;  margin:20px ;"><a href="/Health/admin.php/Level/insert" style=" background:#08b78e;padding:11px 37px; font-size:17px ;">添 加</a></div>	
<script>
var h3obj = document.getElementsByTagName("table");
var dobj = document.getElementById("asdasd").getElementsByTagName("div");

function change(id){
	//根据id号，绝对哪个h3和div有特殊的class
	for(var i=0;i<h3obj.length;i++){
		if(i==id){
			h3obj[i].className = "admin_tit_now";
			dobj[i].className = "admin_now";
		}else{
			h3obj[i].className = "";
			dobj[i].className = "";
		}
	}
}
</script>

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