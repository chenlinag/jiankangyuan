<?php
namespace Admin\Controller;
use Think\Page;
class ConsuController extends BaseController
{	
	public function index()
	{	
		// echo __ROOT__;
		$id= $_POST['cons'];
		if($id){

			$huo = M('activity')->where("id=$id")->getField("id,cname,start_time,end_time");
			$neis = M('activity_enroll')->where("pid=$id")->count();

			// $page = new Page($neis,2);
			$nei = M('activity_enroll')->where("pid=$id")->select();

// ->limit($page->firstRow,$page->listRows)
			}

    	// $user = M('activity')->getField("cname");
     	$user = M('activity')->field("id,cname")->select();
    	// echo M()->getlastsql(); 
    	// exit;
    	// 人内容
    	$this->assign('nei',$nei);
    	// 获取的人数
    	$this->assign('neis',$neis);
    	// $this->assign("pageList",$page->show());
 		$this->assign('huo',$huo);
    	$this->assign('user',$user);
		$this->display();
	}
	//添加活动
	public function select(){
		// 图片上传	
		$root = __ROOT__;
		$img = $this->img_save($_POST["imgone"],'public/Activity',time());
		// var_dump("$root/$img");exit;	
		$obj = array(
			'icon_path' => 	"$root/$img",
			'cname' => $_POST['name'],
			'start_time' => $_POST['data'],
			'end_time'=>$_POST['demo'],
			'address' => $_POST['place'],
			'remark' => $_POST['brief']
		);
		$content = M('activity')->add($obj);

		if($content){
			$_josn=array('code'=>1,'msg'=>'添加成功');
		}else{
			$_josn=array('code'=>2,'msg'=>'添加失败');
		}
		$this->ajaxReturn($_josn);
	}
	public function Updata($id){
		$dataes = M("activity")->where("id=$id")->delete(); // 删除所有状态为0的用户数据
		$data = M("activity_enroll")->where("pid=$id")->delete();
		if($dataes){
			if($data){
				$_josn=array('code'=>1,'msg'=>'删除成功');	
			}else{
				$_josn=array('code'=>2,'msg'=>'删除成功该活动可能没有用户');
			}
		}else{
			$_josn=array('code'=>2,'msg'=>'删除失败');
		}
		$this->ajaxReturn($_josn);
	}

	//查询活动人数
	public function insert(){
		$id= $_POST['cons'];
		$user = M('activity')->where("id=$id")->getField("cname");
	}
	// public function img(){
	// 	// $img = $this->img_save($_POST["imgone"],'public/Activity',time());
	// }
	/* @param  $img base64图片
	 * @param  $url 默认存储目录
	 * @param  $fileInfo 自定义文件名
	 * @return string
	 */
	 function img_save($img,$url,$fileInfo){	
	 	$uploadDir =iconv("UTF-8", "GBK",$url);		
		if (!file_exists($uploadDir)) {
			mkdir($uploadDir,0777,true);
		}
		$uploadPath = $uploadDir . '/' . $fileInfo;
		if(!empty($img)){
			if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $img)){
				$file_name = $uploadPath . ".jpg";
				$base64_body = substr(strstr($img,','),1);//截取字符串获取文件信息

				$image = imagecreatefromstring(base64_decode($base64_body));//从字符串中的图像流新建一图像
				imagejpeg($image, $file_name);//以$file_name命名
				imagedestroy($image);
			}
		}
		return $file_name;
	}
/*
	function img($img,$time){
		var_dump($img);
		exit;
					 $imgone =$img;
					 if (!file_exists($uploadDir)) {
					 mkdir($uploadDir,0777,true);
					 
					 }	
			    	//$dir = iconv("UTF-8", "GBK", "Public/bookcover");
					 $uploadDir =iconv("UTF-8", "GBK", __ROOT__.'/public/Activity/'.$time);//默认存储目录

					 //自定义文件名
					 // $fileInfo = time().'-'.$_SESSION['user']['id'];
					// $ext = strtolower($fileInfo["extension"]); //扩展名
					 $uploadPath = $uploadDir ;//. '/' 
					 $imgs =$imgone;
					if(!empty($imgs)){
					 	if (preg_match('/^(data:\s*image\/(\w+);base64,)/', $imgs)){
						 $file_name = $uploadPath . ".jpg";
						 $base64_body = substr(strstr($imgs,','),1);//截取字符串获取文件信息
						 $image = imagecreatefromstring(base64_decode($base64_body));//从字符串中的图像流新建一图像
						var_dump($image);
						exit;
							 imagejpeg($image, $file_name);//以$file_name命名
						 imagedestroy($image);
						 $license= $file_name; 
						 return $license;
						}	

					}
	}
*/



}
