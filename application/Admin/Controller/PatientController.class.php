<?php
namespace Admin\Controller;

class PatientController extends BaseController
{
	public function index(){
		// 用户信息
		if($_GET){
		
			// $cont = M('doctor_sufferer')->where("cname='$_POST['cname']' || idnumber='$_POST['idnumber']' || Disease='$_POST['Disease']'")->select();
			 $typename = M('doctor_sufferer')->where('cname=\''.$_GET['cname'].'\'|| Disease=\''.$_GET['Disease'].'\'||idnumber=\''.$_GET['idnumber'].'\'||name=\''.$_GET['name'].'\'')->select(); 
			 // var_dump( $typename);exit;
			// $this->assign('content',$content);
			$this->assign('cont',$typename);
		
		}else{

		$data = M('doctor_sufferer')->join('equipment')->where('doctor_sufferer.id = equipment.pid ')->select();

		$cont = M('doctor_sufferer')->select();
		foreach ($variable as $key => $value) {
			# code...
		}
		$this->assign('data',$data);
		$this->assign('cont',$cont);
	}
	$content = M('equipment')->select();
	$this->assign('content',$content);

		$this->display();
	}
	// 身份证算年龄
	// function get_age(){ 
	// 	$cont = M('doctor_sufferer')->query('select idnumber from Doctor_sufferer where id>0');

	 //    if(empty($idcard)) return null; 
	 //    #  获得出生年月日的时间戳 
	 //    $date = strtotime(substr($idcard,6,8));
	 //    #  获得今日的时间戳 
	 //    $today = strtotime('today');
	 //    #  得到两个日期相差的大体年数 
	 //    $diff = floor(($today-$date)/86400/365);
	 //    #  strtotime加上这个年数后得到那日的时间戳后与今日的时间戳相比 
	 //    $age = strtotime(substr($idcard,6,8).' +'.$diff.'years')>$today?($diff+1):$diff; 
	 //    return $age; 
	// } 

	//新增
	public function insert(){
		$obj = array(
			'name' => $_POST['login'],
			'cname' => $_POST['name'],
			'Gender' => $_POST['gender'],
			'idnumber'=>$_POST['card'],
			'Disease' => $_POST['appa']
		);
		$content = M('doctor_sufferer')->add($obj);
		if($content){
			$_josn=array('code'=>1,'msg'=>'添加成功');
		}else{
			$_josn=array('code'=>2,'msg'=>'添加失败');
		}
		$this->ajaxReturn($_josn);
	}
	public function data($id){
		$dataes = M("doctor_sufferer")->where("id=$id")->delete(); // 删除所有状态为0的用户数据
		if($dataes){
			
				$_josn=array('code'=>1,'msg'=>'删除成功');	
		}else{
			$_josn=array('code'=>2,'msg'=>'删除失败');
		}
		$this->ajaxReturn($_josn);
	}
	//详情
	public function details($id){	
		$this->display();
	}
	//基本信息
	public function updata(){
		var_dump($_POST);
		exit;
	}
	//既往病史
	public function history(){
		var_dump($_POST);
		exit;
	}
	//测量
	public function celiang(){
		var_dump($_POST);
		exit;
	}
	//搜索
	public function select(){
		var_dump($_POST);
		exit;
	}
}

