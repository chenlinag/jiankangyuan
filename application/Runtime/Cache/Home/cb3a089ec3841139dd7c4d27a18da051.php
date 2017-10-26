<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>我的购物车</title>
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
        b{
            font-weight: normal;
        }
        @media screen and (max-width: 767px) {
            .container{
                width: 100%;
                min-height: 80px;
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
            }
            .container>.img>.choice_green{
                width: 20px;
                height: 20px;
            }
            .container>.img>.head_pic{
                width: 60px;
                height: 60px;
            }
            .container div{
                display: inline-block;
            }
            .container>.info{
                width: 69%;
            }
            .info>.salt>.salt_txt{
                font-size: 14px;
                font-weight: bold;
            }
            .info>.salt{
                width: 100%;
            }
            .salt p{
                display: inline-block;
            }
            .info>.salt>.salt_img{
                float: right;
            }
            .info>.salt>.salt_img>img{
                width: 11px;
                height: 11px;
            }
            .info>.price p{
                font-size: 12px;;
                color: #777;
            }
            .price div{
                display: inline-block;
            }
            .price>.price_box{
                width: 85%;
            }
            .price>.num{
                width: 12%;
                color: #0EC889;
                text-align: right;
            }
            .price>.num2{
                color: #777;
            }
            .container2{
                padding-right: 0;
                display: none;
            }
            .container>.operation{
                width: 50%;
                height: 80px;
                margin-left: 5px;
                padding: 30px 0;
            }
            .operation img{
                width: 20px;
                height: 20px;
            }
            .operation>p{
                display:inline-block;
                width: 70px;
                height: 20px;
                line-height: 20px;
                text-align: center;
                margin: 0 5px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            .container2>.finish{
                width: 15%;
                height: 80px;
                line-height: 80px;
                float: right;
                text-align: center;
                color: #fff;
                background-color: #0EC889;
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
<div class="container">
    <div class="img">
        <img class="choice_green" src="/Health/public/Reception/images/per/xuanzhong.png" alt=""/>
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
            <p class="salt_img">
                <img src="/Health/public/Reception/images/per/bianji.png" alt=""/>
            </p>
        </div>
        <div class="price">
            <div class="price_box">
                <p>价格：¥168</p>
                <p>主治：慢力康限钠配方盐主治高血压、糖尿病等</p>
            </div>
            <div class="num">x1</div>
        </div>
    </div>
</div>

<div class="container container2" >
    <div class="img">
        <img class="choice_green" src="/Health/public/Reception/images/per/xuanzhong.png" alt=""/>
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="operation">
        <img src="/Health/public/Reception/images/per/jian.png" alt=""/>
        <p>1</p>
        <img src="/Health/public/Reception/images/per/jia.png" alt=""/>
    </div>
    <div class="finish">完 成</div>
</div>

<div class="container">
    <div class="img">
        <img class="choice_green" src="/Health/public/Reception/images/per/weixuan.png" alt=""/>
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
            <p class="salt_img">
                <img src="/Health/public/Reception/images/per/bianji.png" alt=""/>
            </p>
        </div>
        <div class="price">
            <div class="price_box">
                <p>价格：¥168</p>
                <p>主治：慢力康限钠配方盐主治高血压、糖尿病等</p>
            </div>
            <div class="num num2">x3</div>
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
            <p class="salt_img">
                <img src="/Health/public/Reception/images/per/bianji.png" alt=""/>
            </p>
        </div>
        <div class="price">
            <div class="price_box">
                <p>价格：¥168</p>
                <p>主治：慢力康限钠配方盐主治高血压、糖尿病等</p>
            </div>
            <div class="num num2">x3</div>
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
<script src="/Health/public/Reception/js/jquery-1.11.3.js"></script>
<script>
    $(".container>.info>.salt>.salt_img").click(function () {
        $(".container2").show();
    })
</script>
</html>