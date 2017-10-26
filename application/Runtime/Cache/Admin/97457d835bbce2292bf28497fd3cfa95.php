<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>健康源后台登录</title>
	<link rel="stylesheet" type="text/css" href="/Health/public/css/login.css">
	<script type="text/javascript" src="/Health/library/js/jquery.min.js"></script>
	<script type="text/javascript" src="/Health/library/js/layer.js"></script>
	<script type="text/javascript">

		//验证码，看不清换一张
		function changeImg()
		{
		  document.getElementById('myImg').src = "/Health/admin.php/Login/img/"+Math.random();//+Math.ceil(Math.random()*10);//随机0~1的数
		}
    </script>
</head>
<body>
<div class="main">
	<div class="logo">
		<img src="/Health/public/images/top/login.png">
	<!-- 	<div class="logo-text">健康源</div> -->
	</div>
	<div class="content">
			<div class="content-1">
				<div class="content-img"><img src="/Health/public/images/top/touxing.png"></div><input type="text" placeholder="请输入账号" name="name" id="name">
			</div>
			<div class="content-1">
				<div class="content-img"><img src="/Health/public/images/top/mima.png"></div><input type="password" placeholder="请输入密码" name="password" id="password">
			</div>
			<div class="content-1">
				<div class="content-img"><img src="/Health/public/images/top/yanzhengma.png"></div>
				<input type="text" placeholder="请输入验证码" name="code" id="code" style="width: 60%;">
				<img id="myImg" onclick="changeImg()" style="cursor:pointer;" title="看不清换一张" alt="看不清换一张" src="/Health/admin.php/Login/img">
			</div>
			
			<input type="submit" id="submit" value="登录" name="" class="submit">
	
	</div></div>

</body>
<script type="text/javascript">
	$('#submit').click(function(){
		
		var	name=$('#name').val();
		var	password=$('#password').val();
		var	code=$('#code').val();
		if(name==''){
			layer.msg('请输入账号');
			return;
		}
		if(password==''){
			layer.msg('请输入密码');
			return;
		}
		if(code==''){
			layer.msg('请输入验证码');
			return false;
		}
		$.ajax({
			url:'/Health/admin.php/Login/login',
			type:'post',
			dataType:'json',
			data:{
				name:name,
				password:password,
				code:code
			},
			success:function(data){

				if(data.code==1){
					layer.msg(data.msg, {shift: -1},function(){
						location.href='/Health/admin.php/Index/index';
					});
				}else{
					layer.msg(data.msg);
				}
			}
		});
	})
</script>
</html>