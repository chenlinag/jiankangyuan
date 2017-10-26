<?php
return array(
 /* 默认设定 */
    'DEFAULT_MODULE'        =>  'Admin',  // 默认模块
    'DEFAULT_CONTROLLER'    =>  'login', // 默认控制器名称
    'DEFAULT_ACTION'        =>  'index', // 默认操作名称

    // 'DB_TYPE'               =>  'mysql',     // 数据库类型
    // 'DB_HOST'               =>  'www.healths2017.com', // 服务器地址
    // 'DB_NAME'               =>  'wwwhealths2017com',          // 数据库名
    // 'DB_USER'               =>  'healths2017',      // 用户名
    // 'DB_PWD'                =>  'YQNNscFCIUmtgXUd',          // 密码
    // 'DB_PORT'               =>  '3306',        // 端口
    'DB_TYPE'               =>  'mysqli',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'health',        // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_FIELDS_CACHE'       =>  false, // 启用字段缓存
	//配置项=>配置值
    'TMPL_LAYOUT_ITEM'  =>'{__CONTENT__}',// 布局魔板的内容替换标识
    'LAYOUT_ON' 		=> true,//是否启用布局
    'LAYOUT_NAME'		=>'layout',//当前布局名称  默认为layout
);