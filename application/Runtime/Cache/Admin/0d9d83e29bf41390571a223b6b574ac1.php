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
	<div id="div">
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
	<div class="right">
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
	<div id="content">
		<div id="isert-div">

<!-- 	<div><input type="file" name="page"/></div> -->
			
		<form  method="post" name="form" enctype="multipart/form-data" action="/Health/admin.php/level/select" onSubmit="return beforeSubmit(this);">
			<table cellspacing="0" id="consu-table">
				<tr>
					<td colspan="2">
							<div id="preview">
								<img id="imghead" border="0" src="/Health/Public/images/photo_icon.png" width="90" height="90" onClick="$('#previewImg').click();">
							 </div>    
							<input type="file" onChange="previewImage(this)" style="display: none;" id="previewImg" name="img">
					</td>
				</tr>
				<tr>
					<td class="td">姓名：</td>
					<td><input style="border:0;color:#202020;" type="text" name="name" placeholder="请点击输入" ></td>	
				</tr>
				<tr>
					<td class="td">电话：</td>
					<td><input style="border:0;color:#202020;" type="text" name="data" placeholder="请点击输入" ></td>
				</tr>
				<tr>
					<td class="td">性别：</td>
					<td><input style="border:0;color:#202020;" type="text" name="place" placeholder="请点击输入" ></td>
				</tr>
				<tr>
					<td class="td">组别：</td>
					<td><input style="border:0;color:#202020;" type="text" name="group" placeholder="请点击输入" ></td>
				</tr>
				<tr>
					<td class="td">简介：</td>
					<td><textarea style="width:100%; height:100px; color:#202020;" placeholder="请点击输入" name="brief"></textarea></td>
				</tr>
			</table> <!-- placeholder="请输入简介内容..." -->
			<a href="javascript:;" class="modify">保 存
	   			<input type="submit" id="Prese">
			</a>
		</form>	
	</div>
	<script type="text/javascript">
		function beforeSubmit(form){
		if(form.img.value==''){
		alert('请上传图片！');
		form.img.focus();
		return false;
		}
		if(form.name.value==''){
		alert('姓名不能为空！');
		form.name.focus();
		return false;
		}
		if(form.data.value==''){
		alert('电话不能为空！');
		form.data.focus();
		return false;
		}
		if(form.place.value==''){
		alert('性别不能为空！');
		form.place.focus();
		return false;
		}
		if(form.group.value==''){
		alert('组别不能为空！');
		form.group.focus();
		return false;
		}
		if(form.brief.value==''){
		alert('简介不能为空！');
		form.brief.focus();
		return false;
		}
		return true;
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
		
		/*图片传值操作*/
		
		$("#Prese").click(function() { 
 		var imgone=$("#imghead")[0].src;
		//console.log(imgone);
 		$.ajax({
			type: "post",
			url: "/Health/admin.php/Level/select",
			data: {					
				imgone:imgone	
			},
			dataType: "json",
			success: function(data) {
			
			console.log(data);
			}	
		});
 	});
    </script>
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