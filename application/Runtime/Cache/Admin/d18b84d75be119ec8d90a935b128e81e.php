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
					
	<div class="Pat-top">
		<div class="Pat-huan clearfix">
			<span>患者管理</span>
		</div>
		<div class="pat-zi clearfix">
			<a href="javascript:;" id="xinzeng">+ 新 增</a>
		</div>
	</div>
		<div class="tows">
			<form action="/Health/admin.php/Patient/index" method="get">
				<table>
					<tr>
						<td>姓名：</td>
						<td class="td"><input type="text" name="cname" placeholder="请输入姓名"></td>
						<td>用户账号：</td>
						<td class="td"><input type="text" name="name" placeholder="请输入用户账号"></td>
						<td>身份证号：</td>
						<td class="td"><input type="text" name="idnumber" placeholder="请输入身份证"></td>
						<td><select name="Disease" class="pat-na">
							<option class="pat-na" name="patna" value="">请选择</option>
							<option class="pat-na" name="patna">高血压</option>
							<option class="pat-na" name="patna">糖料病</option>
							<option class="pat-na" name="patna">血脂</option>
    					</select></td>
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
					
					<td>打印</td>
				</tr>
	<!-- 	<?php if($age < 18): ?>-->
			<?php if(is_array($cont)): $i = 0; $__LIST__ = $cont;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr class="one-tr">
					<td><?php echo ($v['cname']); ?></td>
					<td><?php echo ($v['name']); ?></td>
					<td><?php echo ($v['Gender']); ?></td>
					<td>20</td>
					<td><?php echo ($data[""]); ?></td>
					<td>
					<a href="javascript:;" class="payment" ><img class="pat-img" src="/Health/public/images/hzgl/bangding.png"/></a>
					</td>
					<td>
					<a href="javascript:;" class="jiebang" ><img class="pat-img" src="/Health/public/images/hzgl/jiebang.png"/>
					</td>
					<td>
					<a href="/Health/admin.php/Patient/details/id/<?php echo ($v['id']); ?>" class="xiangqing" ><img class="pat-img" src="/Health/public/images/hzgl/xiangqing.png"/></a>
					</td>
					<td>
					<a onclick="nhInfo(<?php echo ($v['id']); ?>);"><img class="pat-img" src="/Health/public/images/hzgl/delete.png"/></a>
					</td>
					
					<td><a onclick="dayin()"><img class="pat-img" src="/Health/public/images/hzgl/dayin.png"/></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	<!-- 	<?php else: endif; ?> -->
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
				<?php if(is_array($content)): $i = 0; $__LIST__ = $content;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><?php echo ($v['number']); ?></span>
					<h5><?php echo ($v['appa']); ?></h5><?php endforeach; endif; else: echo "" ;endif; ?>
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
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span><?php echo ($v["number"]); ?></span>
					<h5><?php echo ($v["appa"]); ?><img class="login-imgs" src="/Health/public/images/hzgl/delete.png"/></h5><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!--新增-->
		<div id="ui-xinzeng">
			<div id="ui-xinzeng-title">新增患者</div>
			<div class="ui-xinzeng-close"></div>
			<div class="login-table">	
				<!-- <form name="form" action="/Health/admin.php/Patient/insert" method="post" onsubmit="return checkAdd()"> -->
					<table>
						<tr>
							<td style="padding:10px 10px;">■</td>
							<td>登陆账号:</td>
							<td><input type="text" class="in-name" id="login" placeholder="请输入电话号码"></td>
						</tr>
						<tr>
							<td style="padding:10px 10px;">■</td>
							<td>姓名:</td>
							<td><input type="text" class="in-name" id="name" placeholder="请输入姓名"></td>
						</tr>
						<tr>
							<td style="padding:10px 10px;">■</td>
							<td>性别:</td>
							<td>
								<select id="patient-na" class="gender">
									<option class="gender" value="" >--请选择性别--</option>
									<option class="gender" value="男" >男</option>
									<option class="gender" value="女" >女</option>
				    			</select>
							</td>
						</tr>
						<tr>
							<td style="padding:10px 10px;">■</td>
							<td>身份证号码:</td>
							<td><input type="text" class="in-name" id="card" placeholder="请输入身份证号码"></td>
						</tr>
						<tr>
							<td style="padding:10px 10px;">■</td>
							<td>病种分类:</td>
							<td>
							<select id="patient-na" class="appa">
									<option class="appa" value="">--请选择病种--</option>
									<option class="appa" value="高血压">高血压</option>
									<option class="appa" value="糖料病">糖料病</option>
									<option class="appa" value="心率">心率</option>
		    			</select></td>
						</tr>
						<div class="login-a"><a href="javascript:;" class="file" style="line-height: 32px;">保存
		   					  <input type="submit" id="tijiao">
							</a></div>
					</table>
				<!-- </form> -->
			</div>
		</div>
		
		<!-- 测量
		<div id="ui-measure" style="position:relative;position:fixed;left: 40%;top: 20%;z-index:9999;width:450px;height:400px;background:#fff;border-radius:15px;">
			<div id="ui-measure-title" style="padding: 0 10px;height: 44px;line-height: 51px;background: #f3f3f3;font-size: 17px;color: #666;border-radius:15px 15px 0 0;border-bottom: 1px solid #ccc;">设置自动测量</div>
			<div class="ui-measure-close" style="cursor: pointer;display: block;position: absolute;z-index: 100000;top: 12px;right: 12px;overflow: hidden;width: 28px;height: 28px;
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
		</div>	 -->
	
	<!-- 测量 -->
	<script>
		// function changeOffset(){
			
		// 	$('#ui-measure').offset({left:Math.ceil(($(document.body).width()-$('#ui-measure').width())/2),top:$(document).scrollTop()+150});
		// 	//修改遮罩层的尺寸
		// 	$('.ui-mask').width($(document).width()).height($(document).height());
		// }
		// $(function(){
		// 	//初始情况下,隐藏ui-measure
		// 	$('#ui-measure').hide();
		// 	$('.measure').click(function(){
		// 		//显示ui-measure
		// 		$('#ui-measure').show();
		// 		$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
		// 		changeOffset();			
		// 	});
		// 	$(window).resize(function(){
		// 		changeOffset();			
		// 	});
		// 	//关闭窗口按钮
		// 	$('.ui-measure-close').click(function(){
		// 		//隐藏ui-dialog
		// 		$('#ui-measure').hide();
		// 		//删除遮罩层
		// 		$('.ui-mask').remove();
		// 	})
			
		// });

	// <!--绑定-->

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

	// <!--解绑-->
	
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

	// <!--新增-->
	
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
<script type="text/javascript">
	function nhInfo(id){
		 var msg = "您真的确定要删除吗？";
	if (confirm(msg)==true){
			 	$.ajax({
					url:"/Health/admin.php/Patient/data/id/"+id,
					type:'post',
					dataType:'json',
					
					success:function(data){

						if(data.code==1){
							layer.msg(data.msg, {shift: -1},function(){
								window.setTimeout("window.location.href='/Health/admin.php/Patient/index'",2000);
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
<!-- 添加患者 -->
<script type="text/javascript">
	

     	$("#tijiao").click(function() { 
		var name=$('#name').val();
		var login=$('#login').val();
		var gender=$('.gender').val();
		var card=$('#card').val();
		var appa=$('.appa').val();
		if(login == ""){
			alert('登陆账号不能为空！');
			return false;
		}
		if(name == ""){
			alert('姓名不能为空！');
			return false;
		}
		if(gender == ""){
			alert('性别不能为空！');
			return false;
		}
		if(card == ""){
			alert('请输入身份证号码！');
			return false;
		}
		if(appa == ""){
			alert('请选择病种！');
			return false;
		}
		
 		$.ajax({
			url:'/Health/admin.php/Patient/insert',
			type:'post',
			dataType:'json',
			data:{
			 name:name,
			 login:login,
			 gender:gender,
			 card:card,
			 appa:appa
			},
			success:function(data){

				if(data.code==1){
					layer.msg(data.msg, {shift: -1},function(){
						window.setTimeout("window.location.href='/Health/admin.php/Patient/index'",2000);
					});
				}else{
					layer.msg(data.msg);
				}
			}
		});

 	})
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