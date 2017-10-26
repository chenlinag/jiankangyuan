<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;
class LoginController extends Controller
{
	public function index()
	{
		layout(false);//不调用头部文件

		$this->display();
	}
	public function img()//验证码
	{
		$qwe = new Verify();
		$qwe -> fontSize=14;
		$qwe -> length=4;
		$qwe -> entry();
	}
	public function login(){
	
		session_start ();
		$name = $_POST['name'];
		$pwd =$_POST['password'];
		$verify = new Verify();
		if($verify->check(I('post.code'))){
			$userInfo = M('admin_user')->where("username='%s' and password='%s'",array($name,$pwd))->find();
			// echo M()->getlastsql();
			if($userInfo){
				$_SESSION["userMsg"] = $userInfo;
				$_josn=array('code'=>1,'msg'=>'登录成功');
						// $this->redirect("Index/index");
			}else{
				$_josn=array('code'=>2,'msg'=>'账号或用户名错误');
				 // $this->error('操作失败');
				// $this->success('用错户或密码误',U('Login/index'),3);
			}
		}else{
			$_josn=array('code'=>3,'msg'=>'验证码错误');
			// $this->success('验证码错误',U('Login/index'),3);
		}
		$this->ajaxReturn($_josn);
	}

		public function logout(){

		unset($_SESSION["userMsg"]);
		$this->redirect("Login/index");
	}
}










