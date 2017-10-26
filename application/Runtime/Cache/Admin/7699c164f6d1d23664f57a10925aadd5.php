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
					<div style="font-size:20px;margin:1% 1%;border-bottom: 1px solid #ddd;padding:0 0 10px 0">患者详情</div>


<div id="admin_tit" class="clearfix">
			<h3 class="admin_tit_now" onClick="change(0)">基本信息</h3>
			<h3 onClick="change(1)">联系方式</h3>
			<h3 onClick="change(2)">既往病史</h3>
			<h3 onClick="change(3)">预警设置</h3>
			<h3 onClick="change(4)">测量统计</h3>
</div>

<div id="asdasd">
		<div class="admin_now">
			<form action="/Health/admin.php/Patient/updata" method="post">
				<table class="pat-jiben">
					<tr>
						<td>姓名：</td>
						<td><input type="text" name="name" value=""></td>
						<td>性别：</td>
						<td><input type="text" name="gender" value=""></td>
						<td>身份证号：</td>
						<td><input type="text" name="number" value=""></td>
					</tr>
					<tr>
						<td>身高：</td>
						<td><input type="text" name="height" value=""></td>
						<td>体重：</td>
						<td><input type="text" name="weight" value=""></td>
						<td>年龄：</td>
						<td><input type="text" name="age" value=""></td>
					</tr>
					<tr>
						<td>职业：</td>
						<td><input type="text" name="upation" value=""></td>
						<td>民族：</td>
						<td><input type="text" name="nation" value=""></td>
						<td>婚姻状况：</td>
						<td><input type="text" name="status" value=""></td>
					</tr>
					<tr>
						<td colspan="6">
							<a href="javascript:;" class="modify">提交修改
	   					  		<input type="submit">
							</a>
						</td>
					</tr>
				</table>
			</form>			
		</div>
		<div> 
			<form action="/Health/admin.php/Patient/updata" method="post">
				<table class="pat-jiben">
					<tr>
						<td>电 话：</td>
						<td><input type="text" name="name" value="13635382941"></td>
						<td>Q  Q：</td>
						<td><input type="text" name="gender" value="978772858"></td>
						<td>电子邮箱：</td>
						<td><input style="width:100%;" type="text" name="number" value="13635382941@163.com"></td>
					</tr>
					<tr>
						<td>家属电话1：</td>
						<td><input type="text" name="height" value="13546879521"></td>
						<td>固定电话：</td>
						<td><input type="text" name="weight" value="54687951"></td>
						<td>地址：</td>
						<td><input style="width:100%;" type="text" name="age" value="巴南市重庆区中国镇地球村"></td>
					</tr>
					
					<tr>
						<td colspan="6">
							<a href="javascript:;" class="modify">提交修改
	   					  		<input type="submit">
							</a>
						</td>
					</tr>
				</table>
			</form>	
		</div> 
		<div>
			<form action="/Health/admin.php/Patient/history" method="post">
				<table style="margin-left:5%">
					<tr>
						<td><h3>家 族 病 史：</h3></td>
						<td style="width:500px;">
							<textarea class="pat-text" name="history" placeholder="在这里输入内容..."></textarea>
						</td>
					</tr>
					<tr>
						<td><h3>用 药 史：</h3></td>
						<td style="width:500px;">
							<textarea class="pat-text" name="cation" placeholder="在这里输入内容..."></textarea>
						</td>
					</tr>
					<tr>
						<td><h3>过 敏 症 状：</h3></td>
						<td style="width:500px;">
							<textarea class="pat-text" name="country" placeholder="在这里输入内容..."></textarea>
						</td>
					</tr>
					<tr>
						<td><h3>过 敏 药 物：</h3></td>
						<td style="width:500px;">
							<textarea class="pat-text" name="drug" placeholder="在这里输入内容..."></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<a href="javascript:;" class="modify">提交修改
	   					  		<input type="submit">
							</a>
						</td>
					</tr>
				</table>
			</form>
		</div> 
		<div>
				<table style="border:1px #bababa solid;border-collapse:collapse;"  border="1" id="pat-tab">
					<tr>
						<td>哈 哈 哈</td>
						<td><span style="margin:0 10px;">55</span></td>
						<td><span style="margin:0 10px;">女</span></td>
						<td>500124655784513541</td>
						<td>
							<select style="background:#e6e6e6; width:100%;height:40px;" name="select" style="width:100%;">
								<option class="pat-na" value="高血压">高血压</option>
								<option class="pat-na" value="糖料病">糖料病</option>
								<option class="pat-na" value="血脂">血脂</option>
							</select>
						</td>
						
					</tr>
				</table>
				<p style="color:#f00;font-size:12px;margin:1%;">注：设置数值提醒预警</p>
			
				<form action="/Health/admin.php/Patient/updata" method="post">
					<table class="pat-yjsz">
						<tr>
							<td style="background:#0ec889; text-align: center;">舒张压</td>
							<td><input type="text" name="name" value="mmhg">-<!--<hr style="width:10px; height:5px;border:none;border-top:5px ridge green;" />--><input type="text" name="name" value=""></td>
						
						</tr>
						<tr>
							<td style="background:#0ec889; text-align: center;">收缩压</td>
							<td><input type="text" name="name" value="">-<input type="text" name="name" value=""></td>
							
						</tr>
						<tr>
							<td colspan="2">
								<a href="javascript:;" class="modify">保存
		   					  		<input type="submit">
								</a>
							</td>
						</tr>
					</table>
				</form>	
		</div>
		<div>
			
				<button class="pat-butt">血压<img style="width:30px;height:30px;margin-left:10px; background:#fa8564;" src="/Health/public/images/hzgl/血压.png"/></button>
				<button class="pat-butt">血脂<img style="width:30px;height:30px;margin-left:10px; background:#aec785;" src="/Health/public/images/hzgl/血脂.png"/></button>
				<button class="pat-butt">血糖<img style="width:30px;height:30px;margin-left:10px; background:#ffc000;" src="/Health/public/images/hzgl/血糖.png"/></button>
				<button class="pat-butt">心率<img style="width:30px;height:30px;margin-left:10px; background:#22beef;" src="/Health/public/images/hzgl/心率.png"/></button>
				<button class="pat-butt">体重<img style="width:30px;height:30px;margin-left:10px; background:#e69124;" src="/Health/public/images/hzgl/体重.png"/></button>	
				<br/><br/><br/>	
				<!-- 周 -->
		
			   <label id="jqChart" style="width:500px;height:300px;margin:2%;"></label>
			   <script src="/Health/public/js/jquery-1.5.1.min.js" type="text/javascript"></script>
				<script src="/Health/public/js/jquery.jqChart.min.js" type="text/javascript"></script>
				<script lang="javascript" type="text/javascript">
					$(document).ready(function () {
					    $('#jqChart').jqChart({
					        title: { text: '血压（周）' },
					        axes: [
					            {
									location: 'left',//y轴位置，取值：left,right
									minimum: 50,//y轴刻度最小值
									maximum: 200,//y轴刻度最大值
									interval: 20//刻度间距
					            }
					        ],
					        series: [
					            //数据1开始
					            {
					                type: 'line',//图表类型，取值：column 柱形图，line 线形图
					                title:'周',//标题
					                data: [['MON', 80], ['TUE', 100], ['WED', 150], ['THU', 160], ['FRI', 120],['SAT', 120],['SUN', 98]],//数据内容，格式[[x轴标题,数值1],[x轴标题,数值2],......]
					            },
					            //数据1结束 
					        ]
					    });
					});
				</script>
				<br/>
					<!-- 月 -->
			   <label id="jqChar" style="width:500px;height:300px;margin:2%;"></label>
				<script lang="javascript" type="text/javascript">
					$(document).ready(function () {
					    $('#jqChar').jqChart({
					        title: { text: '血压（月）' },
					        axes: [
					            {
					                location: 'left',//y轴位置，取值：left,right
					                minimum: 50,//y轴刻度最小值
					                maximum: 200,//y轴刻度最大值
					                interval: 20//刻度间距
					            }
					        ],
					        series: [
					            //数据1开始
					            {
					                type: 'line',//图表类型，取值：column 柱形图，line 线形图
					                title:'月',//标题
					                data: [['MON', 190], ['TUE', 100], ['WED', 150], ['THU', 100], ['FRI', 190],['SAT', 150],['SUN', 190]],//数据内容，格式[[x轴标题,数值1],[x轴标题,数值2],......]
					            },
					            //数据1结束 
					        ]
					    });
					});
				</script>
					<br/>	
					<!-- 年 -->
			   <label id="jqCha" style="width:500px;height:300px;margin:2%;"></label>
				<script lang="javascript" type="text/javascript">
					$(document).ready(function () {
					    $('#jqCha').jqChart({
					        title: { text: '血压（年）' },
					        axes: [
					            {
					                location: 'left',//y轴位置，取值：left,right
					                minimum: 50,//y轴刻度最小值
					                maximum: 200,//y轴刻度最大值
					                interval: 20//刻度间距
					            }
					        ],
					        series: [
					            //数据1开始
					            {
					                type: 'line',//图表类型，取值：column 柱形图，line 线形图
					                title:'年',//标题
					                data: [['MON', 80], ['TUE', 100], ['WED', 150], ['THU', 160], ['FRI', 120],['SAT', 120],['SUN', 98]],//数据内容，格式[[x轴标题,数值1],[x轴标题,数值2],......]
					            },
					            //数据1结束 
					        ]
					    });
					});
				</script>
		</div>
	
</div>
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