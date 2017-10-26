<?php
namespace Admin\Controller;

class DeviceController extends BaseController
{
	public function index()
	{	
		if($_POST){
			$content = M('equipment')->where("number='$_POST[text]'")->select();
			
			$this->assign('content',$content);
			}else{
			$content = M('equipment')->select();
			$this->assign('content',$content);

			}
			$this->display();
	}
	public function insert()
	{
	
	}
	// 添加设备
	public function style(){
		$cont = M('equipment')->where("number='$_POST[number]'")->find();
		// var_dump($cont);
		// exit;
		if($cont){
			$_josn = array('code'=>3,'msg'=>'设备编号重复');
			$this->ajaxReturn($_josn);
			exit;
		}else{
		$obj = array(
			'pid'=> 0 ,
			'number' => $_POST['number'],
			'appa' => $_POST['appa'],
		);
		$tent = M('equipment')->add($obj);
		// var_dump($tent);
		// exit;
		if($tent){
			$_josn = array('code'=>1,'msg'=>'添加成功');
		}else{
			$_josn=array('code'=>2,'msg'=>'添加失败');
		}
		
		}
		
		$this->ajaxReturn($_josn);
	}
	// 解绑
	public function Updata($id){
		$dataes = M("equipment")->where("id=$id")->delete();
		if($dataes){
			$_josn=array('code'=>1,'msg'=>'解绑成功');	
		}else{
			$_josn=array('code'=>2,'msg'=>'解绑失败');
		}
		$this->ajaxReturn($_josn);
	}
}
