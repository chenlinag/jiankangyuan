<?php
namespace Admin\Controller;
use Think\Controller;

//所有控制器的父类、也是Controller类的子类
class BaseController extends Controller
{
	//相当于构造函数
	
	public function _initialize()
	{	
		// 		//判断当前用户是否登陆了
		if(!isset($_SESSION["userMsg"]))
		{
			$this->redirect("Login/index");exit();
		}
	}
}




