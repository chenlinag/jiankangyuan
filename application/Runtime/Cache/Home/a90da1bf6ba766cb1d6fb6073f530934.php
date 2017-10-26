<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>测心率</title>
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
                min-height: 100px;
                margin-top: 10px;
                margin-bottom: 230px;
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
            .box>p{
                display:inline-block;
                width: 50%;
                font-size: 14px;
            }
            .box>.company{
                float: right;
                text-align: right;
            }
            .box>.company>span{
                font-size: 14px;
            }
            .company>img{
                width: 10px;
                height: 17px;
                padding-top: 5px;
            }
            .weight_box>.test_time{
                border-bottom: none;
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
        <p>心率</p>
        <a class="company">
            <span>0次/分</span>
            <img src="/Health/public/Reception/images/data/gengduo2.png" alt=""/>
        </a>
    </div>
    <div class="box test_time">
        <p>测试时间</p>
        <a class="company">
            <span>2017-9-21 15:19</span>
            <img src="/Health/public/Reception/images/data/gengduo2.png" alt=""/>
        </a>
    </div>
    
</div>
<div id="footer">保 存</div>
</body>
</html>