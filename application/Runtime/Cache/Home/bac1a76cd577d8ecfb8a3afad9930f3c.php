<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>我的服务包</title>
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
                min-height: 100px;
                margin-bottom: 10px;
                padding: 0 2%;
                background-color:#fff ;
            }
            .container>.product{
                width: 81%;
                padding: 10px 0;
            }
            .product>img{
                width: 80px;
                height: 80px;
                display: inline-block;
                border: 1px solid transparent;
                border-radius: 5px;
            }
            .product>.box{
                display: inline-block;
            }
            .product>.box>.salt{
                font-size: 15px;;
            }
            .product>.box>.salt>b{
                font-size: 12px;;
                color: #0191E8;
            }
            .product>.box>.ill{
                font-size: 12px;
                color: #777;
            }
            .product *{
                vertical-align: middle;
            }
            .container div{
                display: inline-block;
            }
            .container>.shengYu{
                font-size: 12px;
                color: #0191E8;
            }
            .container>.shengYu2{
                color: red;
            }
            #content{
                display: none;
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background:rgba(55,55,55,.2);
            }
            #content>.box{
                width: 200px;
                height: 100px;
                background: #fff;
                position: absolute;
                top: 56%;
                left: 65%;
                margin-top: -100px;
                margin-left: -150px;
                line-height: 1.5em;
                border-radius: 10px;
            }
            .box>.keFu{
                height: 49px;
                line-height: 49px;;
                margin: 0 5%;
                border-bottom: 1px solid #0EC889;
            }
            .keFu p{
                display: inline-block;
            }
            .box>.keFu p:first-child{
                width: 85%;
                height: 49px;
                line-height: 49px;;
                color: #0EC889;
                text-align: center;
                font-size: 18px;;
            }
            .keFu>.close{
                float: right;
                width: 20px;
                height: 20px;;
                line-height: 20px;;
                text-align: center;
                margin: 6px 0;
                color: #777;
                border: 1px solid #777;
                border-radius: 50px;;
            }
            .box>.num{
                width: 100%;;
                height: 50px;
                line-height: 50px;
                color: #0EC889;
                font-size: 18px;;
                text-align: center;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="product">
        <img src="/Health/public/Reception/images/per/1.jpg" alt=""/>
        <div class="box">
            <p class="salt">慢力康限钠配方盐<b>(180g)</b></p>
            <p class="ill">专治糖尿病、高血压等</p>
        </div>
    </div>
    <div class="shengYu">剩余30天</div>
</div>
<div class="container">
    <div class="product">
        <img src="/Health/public/Reception/images/per/1.jpg" alt=""/>
        <div class="box">
            <p class="salt">慢力康限钠配方盐<b>(180g)</b></p>
            <p class="ill">专治糖尿病、高血压等</p>
        </div>
    </div>
    <div class="shengYu">剩余30天</div>
</div>
<div class="container">
    <div class="product">
        <img src="/Health/public/Reception/images/per/1.jpg" alt=""/>
        <div class="box">
            <p class="salt">慢力康限钠配方盐<b>(180g)</b></p>
            <p class="ill">专治糖尿病、高血压等</p>
        </div>
    </div>
    <div class="shengYu shengYu2">剩余10天</div>
</div>
<div id="content">
    <div class="box">
        <div class="keFu">
            <p>客服热线</p>
            <p class="close">X</p>
        </div>
        <div class="num">023-15414514</div>
    </div>
</div>
</body>
<script src="/Health/public/Reception/js/jquery-1.11.3.js"></script>
<script>
    //点击container显示模态框
    $(".container").click(function () {
        $("#content").show();
    });
    //点击小圆×关闭模态框
    $("#content>.box>.keFu>.close").click(function () {
        $("#content").hide();
    });
</script>
</html>