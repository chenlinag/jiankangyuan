<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>记心情</title>
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
            .weight_box{
                width: 100%;
                min-height: 150px;
                margin-top: 10px;
                margin-bottom: 184px;
                background-color: #fff;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .weight_box>.box{
                padding:0 3%;
                min-height: 50px;
                line-height: 50px;
                border-bottom: 1px solid #ddd;
            }
            .box>span{
                font-size: 14px;
                padding:0 10px;
                border-left: 2px solid #0EC889;
            }
            .weight_box>.bottom{
                width: 100%;
                min-height: 100px;
            }
            .bottom div{
                display: inline-block;
            }
            .bottom>.happy{
                width: 32.3%;
                min-height: 100px;
                text-align: center;
                padding: 12px 0;
            }
            .happy>img{
                width: 55px;
                height: 55px;
            }
            .happy>p{
                color: #777;
            }
            #footer{
                width: 90%;
                min-height: 50px;
                line-height: 50px;;
                border-radius: 5px;;
                margin: 0 auto;
                color: #fff;
                font-size: 20px;;
                text-align: center;
                background-color: #0191E8;
            }
        }
    </style>
</head>
<body>
<div class="weight_box">
    <div class="box">
        <span>今日心情</span>
    </div>
    <div class="bottom">
        <div class="happy">
            <img src="/Health/public/Reception/images/data/kaixin.png" alt=""/>
            <p>开心</p>
        </div>
        <div class="happy">
            <img src="/Health/public/Reception/images/data/pingjing.png" alt=""/>
            <p>平静</p>
        </div>
        <div class="happy">
            <img src="/Health/public/Reception/images/data/beishang.png" alt=""/>
            <p>沮丧</p>
        </div>
    </div>
</div>
<div id="footer">保 存</div>
</body>
</html>