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
					
	<div class="color clearfix">
		<a herf="#">患者管理</a>
	</div>
	<div class="ren clearfix">
		<span>35人</span>
	</div>
	<!--搜索-->
	<div class="tows clearfix">
		<form action="/Health/admin.php/Index/select" method="post">
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
	

		<div id="admin_tit" class="clearfix">
			<h3 class="admin_tit_now" onClick="change(0)">血 压</h3>
			<h3 onClick="change(1)">血 糖</h3>
			<h3 onClick="change(2)">心 率</h3>
			<h3 onClick="change(3)">血 脂</h3>
		</div>
<!--	</div>-->
	<div id="asdasd">
		<div class="admin_now">
			<span class="one unified">
				<a href="#">正常血压</a>
			</span>
			<span>20</soan>
			<span class="two unified">
				<a href="#">重度低血压</a>
			</span>
			<span>2</soan>
			<span class="three unified">
				<a href="#">轻度低血压</a>
			</span>
			<span>5</soan>
			<span class="four unified">
				<a href="#">轻度高血压</a>
			</span>
			<span>3</soan>
			<span  class="five unified">
				<a href="#">中度高血压</a>
			</span>
			<span>3</soan>
			<span class="six unified">
				<a href="#">重度高血压</a>
			</span>
			<span>2</soan>
		</div>
		<div> 
			<span class="one unified">
					<a href="#">正常血糖</a>
				</span>
				<span>20</soan>
				<span class="two unified">
					<a href="#">重度低血糖</a>
				</span>
				<span>2</soan>
				<span class="three unified">
					<a href="#">轻度低血糖</a>
				</span>
				<span>5</soan>
				<span class="four unified">
					<a href="#">轻度高血糖</a>
				</span>
				<span>3</soan>
				<span  class="five unified">
					<a href="#">中度高血糖</a>
				</span>
				<span>3</soan>
				<span class="six unified">
					<a href="#">重度高血糖</a>
				</span>
				<span>2</soan>
		</div> 
		<div>
			<span class="one unified">
					<a href="#">正常心率</a>
				</span>
				<span>20</soan>
				<span class="two unified">
					<a href="#">重度心率</a>
				</span>
				<span>2</soan>
				<span class="three unified">
					<a href="#">轻度心率</a>
				</span>
				<span>5</soan>
				<span class="four unified">
					<a href="#">轻度高心率</a>
				</span>
				<span>3</soan>
				<span  class="five unified">
					<a href="#">中度高心率</a>
				</span>
				<span>3</soan>
				<span class="six unified">
					<a href="#">重度高心率</a>
				</span>
				<span>2</soan>
		</div> 
		<div>
			<span class="one unified">
					<a href="#">正常血脂</a>
				</span>
				<span>20</soan>
				<span class="two unified">
					<a href="#">重度血脂</a>
				</span>
				<span>2</soan>
				<span class="three unified">
					<a href="#">轻度血脂</a>
				</span>
				<span>5</soan>
				<span class="four unified">
					<a href="#">轻度高血脂</a>
				</span>
				<span>3</soan>
				<span  class="five unified">
					<a href="#">中度高血脂</a>
				</span>
				<span>3</soan>
				<span class="six unified">
					<a href="#">重度高血脂</a>
				</span>
				<span>2</soan>
		</div>
	</div>
	
<!--形状图-->	
	<div class="diagram">
	<div class="container" style="margin-top: 50px;">
	    		<div class="row">
	        		<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
	            		<div class="up_downs">
			                <div class="left_up_downs pull-left">
			                    <p>100%</p>
			                    <p>80%</p>
			                    <p>60%</p>
			                    <p>40%</p>
			                    <p>20%</p>
			                    <p>0%</p>　
			                </div>
	               			<div class="right_up_downs pull-left">
	                    		<div class="right_up_downs_top">
				                        <!--背景线-->
				                        <ul class="list-unstyled right_top_ul">
				                            <li></li>
				                            <li></li>
				                            <li></li>
				                            <li></li>
				                            <li></li>
				                        </ul>
		                        <!--柱形-->
					                        <div class="right_pillar">
					                            <ul class="list-unstyled right_pillar_ul">
					                                <li>
					                                    <div class="right_pillar_for">
					                                        <div class="right_pillar_fill right_pillar_color1" id="pillar_content1"
					                                        	data-toggle="tooltip" data-placement="auto"
					                                        	title="正常血压占比 <?php echo ($name); ?>%">
					                                            <div class="right_pillar_bg_1" style="height:<?php echo ($name); ?>%"></div>
					                                            <div style="height:<?php echo ($user); ?>%"><?php echo ($name); ?>%</div>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="right_pillar_for">
					                                        
					                                        <div class="right_pillar_fill right_pillar_color2" id="pillar_content4"
					                                             data-toggle="tooltip" data-placement="auto"
					                                             title="重度低血压占比 20%">
					                                            <div class="right_pillar_bg_2" style="height:20%"></div>
					                                            <div style="height:25%">20%</div>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="right_pillar_for">
					                                        <div class="right_pillar_fill  right_pillar_color3" id="pillar_content6"
					                                             data-toggle="tooltip" data-placement="auto"
					                                             title="轻度低血压 45%">
					                                            <div class="right_pillar_bg_3" style="height: 45%"></div>
					                                            <div style="height:50%">45%</div>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="right_pillar_for">
					                                        
					                                        <div class="right_pillar_fill right_pillar_color4" id="pillar_content8"
					                                             data-toggle="tooltip" data-placement="auto"
					                                             title="轻度高血压 60%">
					                                            <div class="right_pillar_bg_4" style="height: 60%"></div>
					                                            <div style="height: 65%">60%</div>
					                                        </div>
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="right_pillar_for">
					                                        <div class="right_pillar_fill right_pillar_color5" id="pillar_content3"
					                                             data-toggle="tooltip" data-placement="auto"
					                                             title="中度高血压 30%">
					                                            <div class="right_pillar_bg_5" style="height: 30%"></div>
					                                            <div style="height: 35%">30%</div>
					                                        </div>
					                                       
					                                    </div>
					                                </li>
					                                <li>
					                                    <div class="right_pillar_for">
					                                        <div class="right_pillar_fill right_pillar_color6" id="pillar_content7"
					                                             data-toggle="tooltip" data-placement="auto"
					                                             title="重度高血压 73%">
					                                            <div class="right_pillar_bg_6" style="height: 73%"></div>
					                                            <div style="height: 78%">73%</div>
					                                        </div>
					                                        
					                                    </div>
					                                </li>
					                            </ul>
					                        </div>
							            </div>
			                    <div class="right_up_downs_bottom clearfix">
			                        <div class="pull-left text-center">正常血压</div>
			                        <div class="pull-left text-center">重度低血压</div>
			                        <div class="pull-left text-center">轻度低血压</div>
			                        <div class="pull-left text-center">轻度高血压</div>
			                        <div class="pull-left text-center">中度高血压</div>
			                        <div class="pull-left text-center">重度高血压</div>
			                    </div>
			                </div>
			            </div>
	        		</div>
	    		</div>
			</div>
					
		</div>
	
	<div class="tabke-table">
		<table>
			<tr class="tow-tr">
				<td>姓 名</td>
				<td>用 户 账 号</td>
				<td>性 别</td>
				<td>年 龄</td>
				<td>身 份 证</td>
				<td>详 细 信 息</td>
				<td>预 警</td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>阿斯顿</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
			<tr class="one-tr">
				<td>123456</td>
				<td>15346215479</td>
				<td>男</td>
				<td>20</td>
				<td>25546122130546111</td>
				<td><a href="/Health/admin.php/Patient/details/id/1" class="xiangqing" ><img src="/Health/public/images/xiangqing.png"></a></td>
				<td><a href="javascript:;" class="early"><img src="/Health/public/images/yujin.png"></a></td>
			</tr>
		</table>
	</div>
	
	<!--预警-->
		<div id="ui-early">
			<div id="ui-early-title"> 发送至短信提醒</div>
			<div class="ui-early-close"></div>
			<div class="login-textarea">
				<form action="/Health/admin.php/index/early" method="post">
					<input type="text" id="inde-read" readonly="readonly" name="texta"  placeholder="你的血压过高请及时联系医院" value="你的血压过高请及时前往医院检查"/>
			
					<a href="javascript:;" class="earlyss">发送
	   					  <input type="submit">
						</a>
				</form>
			</div>
		</div>
	
	<!--预警-->
	<script>
		function changeOffset(){
			
			$('#ui-early').offset({left:Math.ceil(($(document.body).width()-$('#ui-early').width())/2),top:$(document).scrollTop()+150});
			//修改遮罩层的尺寸
			$('.ui-mask').width($(document).width()).height($(document).height());
		}
		$(function(){
			//初始情况下,隐藏ui-dialog
			$('#ui-early').hide();
			$('.early').click(function(){
				//显示ui-dialog
				$('#ui-early').show();
				$('<div></div>').appendTo(document.body).addClass('ui-mask').width($(document).width()).height($(document).height());					
				changeOffset();			
			});
			$(window).resize(function(){
				changeOffset();			
			});
			//关闭窗口按钮
			$('.ui-early-close').click(function(){
				//隐藏ui-dialog
				$('#ui-early').hide();
				//删除遮罩层
				$('.ui-mask').remove();
			})
			
		});
	</script>
<!--血压  血脂-->
<script>
var h3obj = document.getElementsByTagName("h3");
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
<!--柱形图-->
					<script src="/Health/library/js/jquery-1.9.1.min.js"></script>
				    <script src="/Health/library/js/bootstrap.min.js"></script>
				   	<script>
				    $(function () {
				        myTooltip('#pillar_content1');
				        myTooltip('#pillar_content2');
				        myTooltip('#pillar_content3');
				        myTooltip('#pillar_content4');
				        myTooltip('#pillar_content5');
				        myTooltip('#pillar_content6');
				        myTooltip('#pillar_content7');
				        myTooltip('#pillar_content8');
				        myTooltip('#pillar_content9');
				        myTooltip('#pillar_content10');
				    });
				    function myTooltip(id) {
				//      $('[data-toggle="tooltip"]').tooltip({html: true});
				
				        $(id).on('show.bs.tooltip', function () {
				            var bg = $(id).find("div").css("background-color");
				//              alert(bg);
				            setTimeout(function () {  //alert(0);
				                $(".tooltip.top .tooltip-arrow").css({'border-top-color': bg});
				                $(".tooltip.bottom .tooltip-arrow").css({'border-bottom-color': bg});
				                $(".tooltip.left .tooltip-arrow").css({'border-left-color': bg});
				                $(".tooltip.right .tooltip-arrow").css({'border-right-color': bg});
				                $(".tooltip-inner").css({
				                    'background': "#fff",
				                    'color':"#333",
				                    "border":"1px",
				                    "border-style":'solid',
				                    "border-color":bg,
				                    "padding":"10px",
				                    "box-sizing":"border-box",
				                    "font-size":"16px"
				                });
				            }, 10);
				        })
				    }
				    $(function () {
				        $(".right_pillar_for").each(function (index) {
				            var len=$(".right_pillar_for").eq(index).children().length;
				            console.log(len);
				            if (len==1){
				                $(".right_pillar_for").eq(index).find(".right_pillar_fill").addClass("right_pillar_dan");
				            }else {
				                $(".right_pillar_for").eq(index).find(".right_pillar_fill").removeClass("right_pillar_dan");
				            }
				        })
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