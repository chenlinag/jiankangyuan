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
					
<div id="admin_tit" class="clearfix">
			<h3 class="admin_tit_now" onClick="change(0)">报名人数</h3>
			<h3 onClick="change(1)">添加活动</h3>

</div>

<div id="asdasd">
	<div class="admin_now"> 

			<form class="cons-form" action="/Health/admin.php/Consu/index" method="post">
					<span>活 动 名 称：</span>
						<select name="cons" id="select_k1" >
							<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option class="pat-na" value="<?php echo ($v['id']); ?>" ><?php echo ($v['cname']); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
	    				</select>
				<a href="javascript:;" class="co-file">搜 索<input type="submit"></a>
				
			</form>
				<?php if($huo == ''): ?><table id="cons-one" cellspacing="0">
							<tr>
								<td class="td">活动名称：</td>
								<td>请搜索活动名</td>
							</tr>
							<tr>
								<td class="td">活动人数：</td>
								<td style="color:#f00;"></td>
							</tr>
							<tr>
								<td class="td">活动时间：</td>
								<td>请输入活动时间 </td>
							</tr>
						</table>
				<?php else: ?>
					<?php if(is_array($huo)): $i = 0; $__LIST__ = $huo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><table id="cons-one" cellspacing="0">
							<tr>
								<td class="td">活动名称：</td>
								<td><?php echo ($v['cname']); ?><a onclick="nhInfo(<?php echo ($v['id']); ?>);" class="cons-file">删除此活动的所有信息</a></td>
							</tr>
							<tr>
								<td class="td">活动人数：</td>
								<td style="color:#f00;"><?php echo ($neis); ?>人</td>
							</tr>
							<tr>
								<td class="td">活动时间：</td>
								<td><?php echo ($v['start_time']); ?>至<?php echo ($v['end_time']); ?></td>
							</tr>
						</table><?php endforeach; endif; else: echo "" ;endif; endif; ?>
				<table id="cons-two" cellspacing="0">
					<tr class="td">
						<td>姓 名</td>
						<td>性 别</td>
						<td>联 系 电 话</td>
						<td style="width:60%;">地 址</td>
					</tr>
					<?php if(is_array($nei)): foreach($nei as $key=>$v): ?><tr>
						<td><?php echo ($v["cname"]); ?></td>
						<td><?php echo ($v["Gender"]); ?></td>
						<td><?php echo ($v["phone"]); ?></td>
						<td><?php echo ($v["address"]); ?></td>
					</tr><?php endforeach; endif; ?>
				<!-- 	<tr>
        				<td colspan="4" align="center"><?php echo ($page); ?></td>
      				</tr> -->
				</table>
		</div> 	
	

	<div>
			<table cellspacing="0" id="inde-table">
				<tr style="text-align: center;">
					<td colspan="2">
							<label id="preview">
								<img id="imghead" border="0" src="/Health/Public/images/photo_icon.png" width="90" height="90" onClick="$('#previewImg').click();">
							</label>    
							<input type="file" onChange="previewImage(this)" style="display: none;" id="previewImg" name="file">
					</td>
				</tr>
				<tr>
					<td style="width:20%; font-size:16px;padding:12px 0;">活动名：</td>
					<td><input style="border:0;color:#202020;" type="text" id="name" name="name" placeholder="请点击输入" ></td>	
				</tr>
				<tr>
					<td style="width:20%; font-size:16px;padding:12px 0;">活动时间：</td>
					<td><input onClick="laydate()" id="data" name="data"></td>
				</tr>
				<tr>
					<td style="width:20%; font-size:16px;padding:12px 0;">结束时间：</td>
					<td><input id="demo" id="dataes" name="dataes"></td>
				</tr>
				<tr>
					<td style="width:20%; font-size:16px;padding:12px 0;">活动地点：</td>
					<td><input style="border:0;color:#202020;" type="text" id="place" name="place" placeholder="请点击输入" ></td>
				</tr>
				<tr>
					<td style="width:20%; font-size:16px;padding:12px 0;">活动大概内容：</td>
					<td>
					<textarea style="width:100%; height:100px; color:#202020;" placeholder="请点击输入" id="brief" name="brief"></textarea></td>
				</tr>
			</table> <!-- placeholder="请输入简介内容..." -->
			<a href="javascript:;" class="modify">保 存
	   			<input type="submit" id="Prese">
			</a>
	</div>
</div>
	
<script>
	function nhInfo(id){
	  // window.location.href = "/Health/admin.php/Consu/nhcid/"+id; 
	 var msg = "您真的确定要删除吗？";
	if (confirm(msg)==true){
			 	$.ajax({
					url:"/Health/admin.php/Consu/Updata/id/"+id,
					type:'post',
					dataType:'json',
					
					success:function(data){

						if(data.code==1){
							layer.msg(data.msg, {shift: -1},function(){
								window.setTimeout("window.location.href='/Health/admin.php/Consu/index'",2000);
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

<script type="text/javascript" src="/Health/library/js/jquery.min.js"></script>
		 <script>
      //图片上传预览    IE是用了滤镜。
        function previewImage(file)
        {
          var MAXWIDTH  = 90; 
          var MAXHEIGHT = 90;
          var div = document.getElementById('preview');
          if (file.files && file.files[0])
          {
              div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
              var img = document.getElementById('imghead');
              img.onload = function(){
                var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
                img.width  =  rect.width;
                img.height =  rect.height;
//               img.style.marginLeft = rect.left+'px';
                img.style.marginTop = rect.top+'px';
              }
              var reader = new FileReader();
              reader.onload = function(evt){img.src = evt.target.result;}
              reader.readAsDataURL(file.files[0]);
          }
          else //兼容IE
          {
            var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
            file.select();
            var src = document.selection.createRange().text;
            div.innerHTML = '<img id=imghead>';
            var img = document.getElementById('imghead');
            img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
            div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
          }
        }
        function clacImgZoomParam( maxWidth, maxHeight, width, height ){
            var param = {top:0, left:0, width:width, height:height};
            if( width>maxWidth || height>maxHeight ){
                rateWidth = width / maxWidth;
                rateHeight = height / maxHeight;
                
                if( rateWidth > rateHeight ){
                    param.width =  maxWidth;
                    param.height = Math.round(height / rateWidth);
                }else{
                    param.width = Math.round(width / rateHeight);
                    param.height = maxHeight;
                }
            }
            param.left = Math.round((maxWidth - param.width) / 2);
            param.top = Math.round((maxHeight - param.height) / 2);
            return param;
        }
		


 		</script>
    <script>
		
		$("#Prese").click(function() { 
		var name=$('#name').val();
		var brief=$('#brief').val();
		var place=$('#place').val();
		var data=$('#data').val();
		var demo=$('#demo').val();
		if(name == ""){
			alert('活动名不能为空！');
			return false;
		}
		if(data == ""){
			alert('活动时间！');
			return false;
		}
		if(demo == ""){
			alert('结束时间！');
			return false;
		}
		if(place == ""){
			alert('活动地点！');
			return false;
		}
		if(brief == ""){
			alert('活动内容！');
			return false;
		}
		
		
 		var imgone=$("#imghead")[0].src;
		// console.log(imgone);
		// return false;
 		$.ajax({
			url:'/Health/admin.php/Consu/select',
			type:'post',
			dataType:'json',
			data:{
				brief:brief,
				place:place,
				data:data,
				demo:demo,
				name:name,
				imgone:imgone	
			},
			success:function(data){

				if(data.code==1){
					layer.msg(data.msg, {shift: -1},function(){
						window.setTimeout("window.location.href='/Health/admin.php/Consu/index'",2000);
					});
				}else{
					layer.msg(data.msg);
				}
			}
		});

 	})
    </script>
    <script>
		;!function(){
		laydate({
		   elem: '#demo'
		})
		}();
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