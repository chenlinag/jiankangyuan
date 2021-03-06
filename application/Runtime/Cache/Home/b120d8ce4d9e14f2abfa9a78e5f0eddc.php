<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>待发货</title>
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
            .header>.pending{
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
                width: 25%;
                height: 100px;
                line-height: 100px;
                text-align: center;
            }
            .container>.img>.head_pic{
                width: 55px;
                height: 70px;
                margin: 0 auto;

            }
            .container div{
                display: inline-block;
            }
            .container>.info{
                width: 73%;
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
                width: 100%;
                height: 50px;
            }
            .info>.price p{
                font-size: 12px;;
                color: #585858;
            }
            .price>.price_box{
                height: 35px;
                width: 100%;
            }
            .price_box>.waiting{
                height: 35px;
                width: 30%;
                font-size: 12px;
                color: #777;
                line-height: 35px;
                float: right;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <a href="payment.html">待支付</a>
    <a href="pending.html" class="pending">待发货</a>
    <a href="receiving.html">待收货</a>
    <a href="#">待换货</a>
</div>

<div class="container">
    <div class="img">
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <div class="price_box">
                <div>
                    <p>数量：3</p>
                    <p>价格：¥168</p>
                </div>
                <div class="waiting">等待发货</div>
            </div>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="img">
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <div class="price_box">
                <div>
                    <p>数量：3</p>
                    <p>价格：¥168</p>
                </div>
                <div class="waiting">等待发货</div>
            </div>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="img">
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <div class="price_box">
                <div>
                    <p>数量：3</p>
                    <p>价格：¥168</p>
                </div>
                <div class="waiting">等待发货</div>
            </div>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="img">
        <img class="head_pic" src="/Health/public/Reception/images/per/1.jpg" alt=""/>
    </div>
    <div class="info">
        <div class="salt">
            <p class="salt_txt">慢力康限钠配方盐</p>
        </div>
        <div class="price">
            <div class="price_box">
                <div>
                    <p>数量：3</p>
                    <p>价格：¥168</p>
                </div>
                <div class="waiting">等待发货</div>
            </div>
            <p>主治：慢力康限钠配方盐主治高血压</p>
        </div>
    </div>
</div>
</body>
</html>