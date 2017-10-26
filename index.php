<?php
header("content-type:text/html;charset=utf-8");

//绑定模块
define("BIND_MODULE","Home");
//应用程序的路径
define("APP_PATH","application/");
//开启调试模式
define("APP_DEBUG",true);
//开启目录安全(作用：在application下的每个文件夹中新建一个空白index.html)
define("BUILD_DIR_SECURE",false);
//包含ThinkPHP资源包的入口文件
include_once 'library/ThinkPHP/ThinkPHP.php';










