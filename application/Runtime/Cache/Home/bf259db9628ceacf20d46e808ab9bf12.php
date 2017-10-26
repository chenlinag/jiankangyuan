<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>活动报名</title>
    <link rel="stylesheet" href="/Health/public/Reception/css/order.css"/>
    <style>
    .modify {
    position: relative;
    display: inline-block;
    background: #0191E8;
    border-radius: 4px;
    padding: 7px 100px;
    left:20%;
    overflow: hidden;
    margin:54px 0 0 0;
    color: #fff;
    text-decoration: none;
    text-indent: 0;
    line-height: 42px;
    font-size:20px;
}
.modify input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
    </style>
</head>
<body>
    <form action="/Health/index.php/Activity/insert" method="post">
        <div id="main">
            <div class="main_box">
                <img src="/Health/public/Reception/images/intro/xinming.png" />
                <span>姓名：</span>
                <input type="text" name="cname" placeholder="请点击输入"/>
                <input type="hidden" name="pid" value="<?php echo ($pid); ?>">
            </div>
            <div class="main_box box">
                <img src="/Health/public/Reception/images/intro/xinbie.png" />
                <span>性别：</span>
                <input type="text" name="Gender" placeholder="请点击输入"/>
            </div>
            <div class="main_box box">
                <img src="/Health/public/Reception/images/intro/nianling.png" />
                <span>年龄：</span>
                <input type="text" name="Age" placeholder="请点击输入"/>
            </div>
            <div class="main_box box">
                <img src="/Health/public/Reception/images/intro/dianhua.png" />
                <span>联系电话：</span>
                <input type="text" name="phone" placeholder="请点击输入"/>
            </div>
            <div class="main_box box">
                <img src="/Health/public/Reception/images/intro/dizhi.png" />
                <span>家庭住址：</span>
                <input type="text" name="address" placeholder="请点击输入"/>
            </div>
        </div>
            <a href="javascript:;" class="modify">提 交
                <input type="submit" id="Prese">
            </a>
    </form>
</body>
</html>