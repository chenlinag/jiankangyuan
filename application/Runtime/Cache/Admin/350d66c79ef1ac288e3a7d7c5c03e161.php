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
					<div style="font-size:20px;margin:1% 1%;border-bottom: 1px solid #ddd;padding:0 0 10px 0">设备详情</div>

<div id="dev-huan" style="margin-left:4%;">
		<form action="/Health/admin.php/Device/index" method="post">	
			<table style="width:60%;">
				<tr>
					<td style="font-size:16px;">设备编号：</td>
					<td><input type="text" style="font-size:16px;" name="text" placeholder="请输入设备编号.."></td>
					<td><a href="javascript:;" class="file">查询<input type="submit"></a></td>
					<td><a href="javascript:;" class="hsanghai file" >添加设备</a></td>
				</tr>
			</table>
		</form>
</div>


	<!--添加设备-->
	<div id="ui-hsanghai">
			<div id="ui-hsanghai-title"></div>
			<div class="ui-hsanghai-close"></div>
			<div id="ui-shuru">
				<!-- <form action="/Health/admin.php/Device/style" method="post"> -->
					<p>设备编码：<input type="text" id="number" name="number" placeholder="输入设备编号.."></p>
					<p>设备类型：
						<select name="appa" id="appa">
							<option class="pat-na">血压计</option>
							<option class="pat-na">计血压</option>
		    			</select>
					</p>
						<a href="javascript:;" class="file">添加
	   					  <input type="submit" id="numapp">
						</a>
				<!-- </form> -->
			</div>
	</div>



	<div id="dev-div">
		<table cellspacing="0">
			<tr id="dev-tr">
			<!-- 	<td>患 者 姓 名</td> -->
				<td>设 备 编 号</td>
				<td>设 备 类 型</td>
				<td>查 看 数 据</td>
				<td style="width:51%;">解 除 绑 定</td>
			</tr>
			<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					<!-- <td>安保处</td> -->
					<td><?php echo ($v['number']); ?></td>
					<td><?php echo ($v['appa']); ?></td>
					<td><a href="javascript:;" class="details" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td style="width:51%;"><a onclick="Info(<?php echo ($v['id']); ?>);"><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		
	</div>
	
	<!--详情-->
	<div id="ui-details">
			<div id="ui-details-title">
			<table>
				<tr id="ui-details-tr">
					<td>姓名</td>
					<td>收压缩</td>
					<td>舒张压</td>
					<td>心率</td>
					<td>测试时间</td>
				</tr>
				<tr class="ui-details-tr">
					<td>暗室逢灯</td>
					<td>124</td>
					<td>80</td>
					<td>59</td>
					<td>2017-10-25</td>
				</tr>
				<tr class="ui-details-tr">
					<td>暗室逢灯</td>
					<td>124</td>
					<td>80</td>
					<td>59</td>
					<td>2017-10-25</td>
				</tr>
				<tr class="ui-details-tr">
					<td>暗室逢灯</td>
					<td>124</td>
					<td>80</td>
					<td>59</td>
					<td>2017-10-25</td>
				</tr>
			</table>
			</div>
			
			<div class="ui-details-close"></div>
	</div>
	

<!--详情-->
	<script>



		function changeOffset(){
			
			$('#ui-details').offset({left:Math.ceil(($(document.body).width()-$('#ui-details').width())/2),top:$(document).scrollTop()+150});
			//修改遮罩层的尺寸
			$('.ui-mask').width($(document).width()).height($(document).height());
		}
		$(function(){
			//初始情况下,隐藏ui-dialog
			$('#ui-details').hide();
			$('.details').click(function(){
				//显示ui-dialog
				$('#ui-details').show();
				$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
				changeOffset();			
			});
			$(window).resize(function(){
				changeOffset();			
			});
			//关闭窗口按钮
			$('.ui-details-close').click(function(){
				//隐藏ui-dialog
				$('#ui-details').hide();
				//删除遮罩层
				$('.ui-mask').remove();
			})
			
		});
	</script>
	<!--添加设备-->
	<script>
		function changeOffset(){
			
			$('#ui-hsanghai').offset({left:Math.ceil(($(document.body).width()-$('#ui-hsanghai').width())/2),top:$(document).scrollTop()+150});
			//修改遮罩层的尺寸
			$('.ui-mask').width($(document).width()).height($(document).height());
		}
		$(function(){
			//初始情况下,隐藏ui-dialog
			$('#ui-hsanghai').hide();
			$('.hsanghai').click(function(){
				//显示ui-dialog
				$('#ui-hsanghai').show();
				$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
				changeOffset();			
			});
			$(window).resize(function(){
				changeOffset();			
			});
			//关闭窗口按钮
			$('.ui-hsanghai-close').click(function(){
				//隐藏ui-dialog
				$('#ui-hsanghai').hide();
				//删除遮罩层
				$('.ui-mask').remove();
			})
			
		});


		$("#numapp").click(function() { 
		var number=$('#number').val();
		var appa=$('#appa').val();

		if(number == ""){
			alert('设备编号不能为空！');
			return false;
		}
		if(appa == ""){
			alert('类型错误！');
			return false;
		}
		$.ajax({
			url:'/Health/admin.php/Device/style',
			type:'post',
			dataType:'json',
			data:{
				number:number,
				appa:appa	
			},
			success:function(data){

				if(data.code==1){
					layer.msg(data.msg, {shift: -1},function(){
						window.setTimeout("window.location.href='/Health/admin.php/Device/index'",2000);
					});
				}else{
					layer.msg(data.msg);
				}
			}
		});
})
	</script>
	<script>
		function Info(id){
			  // window.location.href = "/Health/admin.php/Consu/nhcid/"+id; 
			 var msg = "您真的确定要解绑吗？";
			if (confirm(msg)==true){
					 	$.ajax({
							url:"/Health/admin.php/Device/Updata/id/"+id,
							type:'post',
							dataType:'json',
							
							success:function(data){

								if(data.code==1){
									layer.msg(data.msg, {shift: -1},function(){
										window.setTimeout("window.location.href='/Health/admin.php/Device/index'",2000);
									});
								}else{
									layer.msg(data.msg);
								}
							}
						});
					}else{
				return false;
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