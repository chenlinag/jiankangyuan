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
					
		<table style="background:#ddd; width:100%; margin:10px 0;">
			<tr>
				<td id="tabletd">顾问三</td>
				<td id="tabletd">重庆南方医师大学</td>
				<td id="tabletd">营销E组</td>
				<td style="width:55%;"></td>
			</tr>
		</table>
	
	
		<div class="tows">
			<form action="/Health/admin.php/Patient/select" method="post">
				<table>
					<tr>
						<td>姓名：</td>
						<td class="td"><input type="text" name="name" placeholder="请输入姓名"></td>
						<td>用户账号：</td>
						<td class="td"><input type="text" name="user" placeholder="请输入用户账号"></td>
						<td>身份证号：</td>
						<td class="td"><input type="text" name="iden" placeholder="请输入身份证"></td>
						<td>
							<a href="javascript:;" class="file">搜 索
		   					  <input type="submit">
							</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	<div class="tabke-table">
			<table style="width:97%;height:50px;">
				<tr class="patien-tr">
					<td>姓 名</td>
					<td>用 户 账 号</td>
					<td>性 别</td>
					<td>年 龄</td>
					<td>设备编号</td>
					<td>设备绑定</td>
					<td>解绑</td>
					<td>详情</td>
					<td>删除</td>
					<td>自动测量</td>
					<td>组别</td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>女</td>
					<td>20</td>
					<td>25546122130546111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></td>
					<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='1'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>25546122130546111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/2" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='1'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>女</td>
					<td>20</td>
					<td>25546122130546111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/3" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='4'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>2554612213SWAF11</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/4" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='1'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>女</td>
					<td>20</td>
					<td>2554ASWAF3054611</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/5" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='3'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>2554612SWAF54611</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/6" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='1'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>2554612SWAF46111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/7" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='2'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>25546122130546111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/8" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='1'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>25546122130546111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/9" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='0'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
				<tr class="one-tr">
					<td>阿斯顿</td>
					<td>15346215479</td>
					<td>男</td>
					<td>20</td>
					<td>25546122130546111</td>
					<td><a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a></td>
					<td><a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/></a></td>
					<td><a href="/Health/admin.php/Patient/details/id/10" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a></td>
					<td><a onclick="delete()"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a></td>
					<td><a href="javascript:;" class="measure" ><img class="pat-img" src="/Health/public/images/hzgl/celinag.png"/></a></td>
					<td><?php if(1=='1'): ?><span style="color:#0ec889;">XXX组</span><?php else: ?><span style="color:#f00;">未分组</span><?php endif; ?></td>
				</tr>
			</table>
	
	</div>
		<!--设备绑定-->
		<div id="ui-dialog">
			<div id="ui-dialog-title">设备绑定</div>
			<div class="ui-dialog-close"></div>
			<div class="login-form">	
				<span>*设备编号：</span>
				<h4>绑定GSM</h4>
			</div>
			<div class="login-span">
				<span>12347984564asdasa</span>
				<h5>血压计</h5>
				<span>12347984564asdasa</span>
				<h5>血压计</h5>
				<span>12347984564asdasa</span>
				<h5>血压计</h5>
			</div>
			<div class="login-a"><a href="#">绑定</a></div>
		</div>
		<!--解绑-->
		<div id="ui-jiebang">
			<div id="ui-jiebang-title">解绑</div>
			<div class="ui-jiebang-close"></div>
			<div class="login-form">	
				<span>*设备编号：</span>
				<h4>绑定GSM</h4>
			</div>
			<div class="login-span">
				<span>12347984564asdasa</span>
				<h5>血压计<img class="login-imgs" src="/Health/public/images/hzgl/delete.png"/></h5>
				<span>12347984564asdasa</span>
				<h5>血压计<img class="login-imgs" src="/Health/public/images/hzgl/delete.png"/></h5>		
			</div>
		</div>
		<!--新增-->
		<div id="ui-xinzeng">
			<div id="ui-xinzeng-title">新增患者</div>
			<div class="ui-xinzeng-close"></div>
			<div class="login-table">	
				<form action="/Health/admin.php/Patient/insert" method="post">
					<table>
						<tr>
							<td>■</td>
							<td>登 陆 账 号:</td>
							<td><input type="text" class="in-name" name="login"></td>
						</tr>
						<tr>
							<td>■</td>
							<td>姓 名:</td>
							<td><input type="text" class="in-name" name="name"></td>
						</tr>
						<tr>
							<td>■</td>
							<td>性 别:</td>
							<td><input type="text" class="in-name" name="gender"></td>
						</tr>
						<tr>
							<td>■</td>
							<td>身 份 证 号 码:</td>
							<td><input type="text" class="in-name" name="card"></td>
						</tr>
						<div class="login-a"><a href="javascript:;" class="file">保存
		   					  <input type="submit">
							</a></div>
					</table>
				</form>
			</div>
		</div>
		
		<!--测量-->
		<div id="ui-measure" style="position:relative;position:fixed;left: 40%;top: 20%;z-index:9999;width:450px;height:400px;background:#fff;border-radius:15px;">
			<div id="ui-measure-title" style="padding: 0 10px;height: 44px;line-height: 51px;background: #f3f3f3;font-size: 17px;color: #666;border-radius:15px 15px 0 0;border-bottom: 1px solid #ccc;">设置自动测量</div>
			<div class="ui-measure-close" style="cursor: pointer;
		display: block;
		position: absolute;
		z-index: 100000;
		top: 12px;
		right: 12px;
		overflow: hidden;
		width: 28px;
		height: 28px;
		"><img src="/Health/public/images/cuo.png"/></div>
			<div class="login-measure" style="margin: 20px;color: #3ec889;font-size: 18px;">	
			<form action="/Health/admin.php/Patient/celiang" method="post">
					<table>
						<tr>
							<td style="padding	: 15px 0;">■</td>
							<td>设 置 编 号:</td>
							<td>
								<select style=" width:100%;height:40px;" name="select" style="width:100%;">
									<option class="pat-na" value="1">20123456KJEFSA</option>
									<option class="pat-na" value="2">54213456451ASDF</option>
									<option class="pat-na" value="3">2356ASDAX12Z35AD</option>
    							</select>
							</td>
						</tr>
						<tr>
							<td style="padding	: 15px 0;">■</td>
							<td>起 始 设 置:</td>
							<td><input type="datetime-local" class="in-name" name="name"></td>
						</tr>
						<tr>
							<td style="padding	: 15px 0;">■</td>
							<td>结 束 设 置:</td>
							<td><input type="datetime-local" class="in-name" name="gender"></td>
						</tr>
						<tr>
							<td style="padding	: 15px 0;">■</td>
							<td>间 隔 分 钟:</td>
							<td><input type="text" class="in-name" name="card"></td>
						</tr>
						<div class="login-a"><a href="javascript:;" class="file">绑定
		   					  <input type="submit">
							</a></div>
					</table>
				</form>	
				
			</div>
		</div>	
	<script type="text/javascript" src="/Health/library/js/jquery-1.10.0.min.js"></script>
	<!--测量-->
	<script>
		function changeOffset(){
			
			$('#ui-measure').offset({left:Math.ceil(($(document.body).width()-$('#ui-measure').width())/2),top:$(document).scrollTop()+150});
			//修改遮罩层的尺寸
			$('.ui-mask').width($(document).width()).height($(document).height());
		}
		$(function(){
			//初始情况下,隐藏ui-measure
			$('#ui-measure').hide();
			$('.measure').click(function(){
				//显示ui-measure
				$('#ui-measure').show();
				$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
				changeOffset();			
			});
			$(window).resize(function(){
				changeOffset();			
			});
			//关闭窗口按钮
			$('.ui-measure-close').click(function(){
				//隐藏ui-dialog
				$('#ui-measure').hide();
				//删除遮罩层
				$('.ui-mask').remove();
			})
			
		});
	</script>
	<!--绑定-->
	<script>
		function changeOffset(){
			
			$('#ui-dialog').offset({left:Math.ceil(($(document.body).width()-$('#ui-dialog').width())/2),top:$(document).scrollTop()+150});
			//修改遮罩层的尺寸
			$('.ui-mask').width($(document).width()).height($(document).height());
		}
		$(function(){
			//初始情况下,隐藏ui-dialog
			$('#ui-dialog').hide();
			$('.payment').click(function(){
				//显示ui-dialog
				$('#ui-dialog').show();
				$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
				changeOffset();			
			});
			$(window).resize(function(){
				changeOffset();			
			});
			//关闭窗口按钮
			$('.ui-dialog-close').click(function(){
				//隐藏ui-dialog
				$('#ui-dialog').hide();
				//删除遮罩层
				$('.ui-mask').remove();
			})
			
		});
	</script>
	<!--解绑-->
	<script>
		function changeOffset(){
			
			$('#ui-jiebang').offset({left:Math.ceil(($(document.body).width()-$('#ui-jiebang').width())/2),top:$(document).scrollTop()+150});
			//修改遮罩层的尺寸
			$('.ui-mask').width($(document).width()).height($(document).height());
		}
		$(function(){
			//初始情况下,隐藏ui-dialog
			$('#ui-jiebang').hide();
			$('.jiebang').click(function(){
				//显示ui-dialog
				$('#ui-jiebang').show();
				$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
				changeOffset();			
			});
			$(window).resize(function(){
				changeOffset();			
			});
			//关闭窗口按钮
			$('.ui-jiebang-close').click(function(){
				//隐藏ui-dialog
				$('#ui-jiebang').hide();
				//删除遮罩层
				$('.ui-mask').remove();
			})
			
		});
	</script>
	<!--新增-->
	<script>
	function changeOffset(){
		
		$('#ui-xinzeng').offset({left:Math.ceil(($(document.body).width()-$('#ui-xinzeng').width())/2),top:$(document).scrollTop()+150});
		//修改遮罩层的尺寸
		$('.ui-mask').width($(document).width()).height($(document).height());
	}
	$(function(){
		//初始情况下,隐藏ui-dialog
		$('#ui-xinzeng').hide();
		$('#xinzeng').click(function(){
			//显示ui-dialog
			$('#ui-xinzeng').show();
			$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
			changeOffset();			
		});
		$(window).resize(function(){
			changeOffset();			
		});
		//关闭窗口按钮
		$('.ui-xinzeng-close').click(function(){
			//隐藏ui-dialog
			$('#ui-xinzeng').hide();
			//删除遮罩层
			$('.ui-mask').remove();
		})
		
	});
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