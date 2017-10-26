<?php
namespace Admin\Controller;

class IndexController extends BaseController
{
	public function index()
	{
		
		$name = 90;
		$user = $name+5;
		$this->assign("name",$name);
		$this->assign("user",$user);
		$this->display();
	}

	public function select()
	{
		var_dump($_POST);
		exit;
		$this->display();
	}
	public function early(){
		var_dump($_POST);
		exit;
	}
}





