<?php
namespace Home\Controller;
use Think\Controller;

class ActivityController extends Controller
{	//首页
	public function index()
	{	$id = M('activity')->max('id');
		$cont =M('activity')->where("id=$id")->find();
		$this->assign($cont,'cont');
		$this->display();
	}
	public function order()
	{	
		$id = M('activity')->max('id');
		$this->assign('pid',$id);
		$this->display();
	}

	public function insert(){
		// 获取最新活动
		// var_dump($id);
		// // exit;
		// $obj = array(
		// 	'pid' => 
		// 	'cname' => $_POST['name'],
		// 	'Gender' => $_POST['Gender'],
		// 	'Age'=>$_POST['Age'],
		// 	'phone' => $_POST['phone'],
		// 	'address' => $_POST['address']
		// );
		$inser = M('activity_enroll')->add($_POST);
		if($inser){
			$this->redirect("Activity/index");
		}else{
			$this->redirect("Activity/order");
		}
	}

}












