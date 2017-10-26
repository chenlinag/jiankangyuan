<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>记用药</title>
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
                height: 50px;
                line-height: 50px;
                margin-top: 10px;
                background-color: #fff;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .header p{
                display: inline-block;
                text-align: center;
            }
            .header p *{
                vertical-align: middle;
            }
            .header>.left_pic{
                width: 20%;
                height: 50px;
            }
            .left_pic>img{
                width: 12px;
                height: 17px;
            }
            .header>.middle{
                width: 57%;
                height: 50px;
                font-size: 14px;
            }
            .container{
                width: 100%;
                min-height: 200px;
                margin-top: 10px;
                background-color: #fff;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .container>.box{
                width: 100%;
                padding:0 3%;
                min-height: 50px;
                line-height: 50px;
                border-bottom: 1px solid #ddd;
            }
            .box>span{
                font-size: 14px;
                padding:0 10px;
                color: #0191E8;
                border-left: 2px solid #0191E8;
            }
            .container>.box2{
                font-size: 14px;
                color: #777;
            }
            .container>.box3{
                border-bottom: none;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <p class="left_pic"><img src="/Health/public/Reception/images/data/zuo.png" alt=""/></p>
    <p class="middle">2017年9月21日</p>
    <p class="left_pic"><img src="/Health/public/Reception/images/data/you.png" alt=""/></p>
</div>
<div class="container">
    <div class="box">
        <span>今日用药</span>
    </div>
    <div class="box box2">慢力康限钠配方盐</div>
    <div class="box box2">慢力康限钠配方盐</div>
    <div class="box box2 box3">慢力康限钠配方盐</div>
</div>
</body>
</html>