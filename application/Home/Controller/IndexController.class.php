<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller
{	//首页
	public function index()
	{	
		$this->display();
	}

	//服务列表
	public function lists()
	{
		$this->display();
	}

	// 服务详情
	public function xiangqing()
	{
		$this->display();
	}

	//心率
	public function healthy_file()
	{
		$this->display();
	}
	//管理
	public function healthy()
	{
		$this->display();
	}
	// 上传数据
	public function Updata(){
		$this->display();
	}
	//测心率
	public function heart_rate(){
	$this->display();
	}
	//测血压
	public function blood_pressure(){
	$this->display();
	}
	//测血糖
	public function blood_sugar(){
	$this->display();
	}
	//测血脂
	public function blood_fat(){
	$this->display();
	}
	//记用药
	public function weight(){
	$this->display();
	}
	//记心情
	public function sport(){
	$this->display();
	}
	// 健康顾问简介
	public function doctor_situation(){
	$this->display();
	}

}












