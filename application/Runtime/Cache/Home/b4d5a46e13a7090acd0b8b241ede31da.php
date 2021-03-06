<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>待支付</title>
    <style>
        *{
            box-sizing: border-box;
        }
        body,h1,h2,h3,h4,h5,h6,p,ul,ol,dl,li,div{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        body{
            background-color: #eee;
            color: #202020;
        }
        a{
            text-decoration: none;
        }
        @media screen and (max-width: 767px) {
            .header{
                width: 100%;
                height: 40px;
                margin-bottom: 10px;;
                display: flex;
                padding: 0 3%;
                justify-content: space-between;
                border-bottom: 1px solid #ddd;
            }
            .header a{
                font-size: 14px;
                font-weight: bold;
                display: block;
                height: 39px;
                line-height: 39px;
                color: #202020;
            }
            .header>.pay{
                color: #0191E8;
                border-bottom: 2px solid #0191E8;
            }
            .container{
                width: 100%;
                min-height: 100px;
                padding: 0 3%;
                margin-bottom: 10px;
                background-color: #fff;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .container *{
                vertical-align: middle;
            }
            .container>.img{
                width: 29%;
                height: 100px;
                line-height: 100px;
            }
            .container>.img>.choice_green{
                width: 20px;
                height: 20px;
            }
            .container>.img>.head_pic{
                width: 55px;
                height: 70px;
                margin-left: 5px;
            }
            .container div{
                display: inline-block;
            }
            .container>.info{
                width: 69%;
                height: 100px;
                padding: 15px 0;
            }
            .info>.salt{
                height: 20px;
            }
            .info>.salt>.salt_txt{
                font-size: 14px;
                font-weight: bold;
            }
            .info>.salt{
                width: 100%;
            }
            .info>.price{
                height: 50px;
            }
            .info>.price p{
                font-size: 12px;;
                color: #777;
            }
            #footer{
                width: 100%;
                height: 40px;
                line-height: 40px;
                padding-left: 3%;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
                position: fixed;
                bottom: 0;
            }
            #footer div{
                display: inline-block;
            }
            #footer>.foot_left{
                width: 40%;
                height: 40px;
            }
            #footer>.foot_left *{
                vertical-align: middle;
            }
            #footer>.foot_left>img{
                width: 20px;
                height: 20px;
            }
            #footer>.foot_right{
                width: 58%;
                height: 40px;
                line-height: 40px;
            }
            .foot_right>.total{
                width: 50%;
                height: 40px;
            }
            .total>b{
                color: #0191E8;
            }
            .foot_right>.jieSuan{
                width: 47%;
                text-align: center;
                color: #fff;
                float: right;
                background-color: #0191E8;
            }
            .foot_right p{
                display: inline-block;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <a href="#" class="pay">待支付</a>
    <a href="pending.html">待发货</a>
    <a href="receiving.html">待收货</a>
    <a href="#">待换货</a>
</div>

<div class="container">
    <div class="img">
        <img class="choice_green" src="/Health/public/Reception/images/per/lan-xuanzhong.png" alt=""/>
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <p>数量：3</p>
            <p>价格：¥168</p>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="img">
        <img class="choice_green" src="/Health/public/Reception/images/per/weixuan.png" alt=""/>
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <p>数量：3</p>
            <p>价格：¥168</p>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="img">
        <img class="choice_green" src="/Health/public/Reception/images/per/weixuan.png" alt=""/>
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <p>数量：3</p>
            <p>价格：¥168</p>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>

<div id="footer">
    <div class="foot_left">
        <img src="/Health/public/Reception/images/per/weixuan.png" alt=""/>
        <span>全选</span>
    </div>
    <div class="foot_right">
        <p class="total">合计：<b>¥168</b></p>
        <p class="jieSuan">结算(1)</p>
    </div>
</div>

</body>
</html>