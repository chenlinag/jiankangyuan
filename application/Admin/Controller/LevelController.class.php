<?php
namespace Admin\Controller;
use Think\Upload;
class LevelController extends BaseController
{
	public function index()
	{
		$this->display();
	}
	// 添加
	public function insert(){
		$this->display();
	}
	// 添加领导
	public function inse(){
		$this->display();
	}
	
	
	public function property(){
		$this->display();
	}
	// 图片上传
	public function select(){

		$img = $this->img_save($_POST["imgone"],'public/Famous',time());
		var_dump($img);
		exit;
	}
	public function inser(){
		$root= __ROOT__;
		$img = $this->img_save($_POST["imgone"],'public/Eimg',time());

		$obj = array(
			'head_portrait' => 	"$root/$img",
			'cname' => $_POST['name'],
			'group' => $_POST['group'],
			'school'=>$_POST['school']
		);


		var_dump($obj);
		die;
	}
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

}

