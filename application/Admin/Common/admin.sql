CREATE DATABASE health;

# 后台用户表 --------------
CREATE TABLE `admin_user`(
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
`username` varchar(25) NOT NULL COMMENT '用户名',
`password` char(32) NOT NULL COMMENT '密码',
`type` tinyint(1) UNSIGNED NOT NULL COMMENT '类型？0>超级管理员，1>医生，2>顾问',
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;


# 医生表---------
CREATE TABLE `Doctor`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` int(11) UNSIGNED NOT NULL  COMMENT '关联后台用户表主键id',
  `head_portrait` varchar(255) NOT NULL COMMENT '头像路径',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `physician` varchar(25) NOT NULL COMMENT '主治医生',
  `Specialty` varchar(25) NOT NULL COMMENT '专科',
  `school` varchar(255) NOT NULL COMMENT '毕业学校',
  `group` varchar(255) NOT NULL COMMENT '组别',
  `brief` varchar(255) NOT NULL COMMENT '简介',
  `Begood` varchar(255) NOT NULL COMMENT '擅长',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;



# 患者表 ----------------
CREATE TABLE `Doctor_sufferer`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `name` varchar(255) NOT NULL COMMENT '登陆账号',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `Gender` varchar(25) NOT NULL COMMENT '性别',
  `idnumber` varchar(255) NOT NULL COMMENT '身份证',
  `Disease` varchar(255) NOT NULL COMMENT '病种',
  PRIMARY KEY (`id`)
  )ENGINE=InnoDB DEFAULT CHARSET=utf8;


# 设备表-----------------
CREATE TABLE `equipment`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` int(11) UNSIGNED NOT NULL COMMENT '关联患者表主键id',
  `number` varchar(255) NOT NULL COMMENT '编号',
  `appa` varchar(255) NOT NULL COMMENT '类型',
PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
#病种表
-- CREATE TABLE `Disease_list`(
--     `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
--     `cid` int(11) UNSIGNED NOT NULL  COMMENT '关联id',
--     `disease` varchar(255) NOT NULL COMMENT '病种名',
--     PRIMARY KEY (`id`)
--   )ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- # 顾问表++++
-- CREATE TABLE `Doctor_patient`(
--   `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
--   `cid` int(11) UNSIGNED NOT NULL  COMMENT '关联医生表主键id',
--   `head_portrait` varchar(255) NOT NULL COMMENT '头像路径',
--   `cname` varchar(25) NOT NULL COMMENT '顾问姓名',
--   `phone` varchar(25) NOT NULL COMMENT '电话',
--   `Gender` varchar(25) NOT NULL COMMENT '性别',
--   `group` varchar(25) NOT NULL COMMENT '组别',
--   `profile` varchar(255) NOT NULL COMMENT '个人简介',
--   PRIMARY KEY (`id`)
-- )ENGINE=InnoDB DEFAULT CHARSET=utf8;

#患者详细信息表++++
-- CREATE TABLE `Patient_basic`(
--   `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
--   `cid` int(11) UNSIGNED NOT NULL  COMMENT '关联患者表id',
--   `name` varchar(25) NOT NULL COMMENT '姓名',
--   `height` tinyint(1) UNSIGNED NOT NULL COMMENT '身高', 
--   `Gender` varchar(25) NOT NULL COMMENT '性别',
--   `idnumber` varchar(255) NOT NULL COMMENT '身份证',
--   `weight` tinyint(1) UNSIGNED NOT NULL COMMENT '体重',
--   `Age` tinyint(1) UNSIGNED NOT NULL COMMENT '年龄',
--   `vocation` varchar(255) NOT NULL COMMENT '职业',
--   `Nation` varchar(25) NOT NULL COMMENT '民族',
--   `Marital` varchar(25) NOT NULL COMMENT '婚姻状况',
--   PRIMARY KEY (`id`)
--   )ENGINE=InnoDB DEFAULT CHARSET=utf8;








# 地址表
# 药品表
# 健康管理

#活动表  --------------
CREATE TABLE `activity`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `icon_path` varchar(255) NOT NULL COMMENT '图片路径',
  `cname` varchar(25) NOT NULL COMMENT '活动名称',
  `start_time` date comment '开始时间', 
  `end_time` date comment '结束时间',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `remark` varchar(255) NOT NULL COMMENT '概括',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
#活动报名表  ---------------
  CREATE TABLE `activity_enroll`(
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` int(11) UNSIGNED NOT NULL COMMENT '关联活动表主键id',
  `cname` varchar(25) NOT NULL COMMENT '姓名',
  `phone` varchar(25) NOT NULL COMMENT '电话',
  `Gender` varchar(25) NOT NULL COMMENT '性别',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `Age` int(11) UNSIGNED NOT NULL COMMENT '年龄',
  PRIMARY KEY (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
