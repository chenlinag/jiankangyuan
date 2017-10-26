<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>上传数据</title>
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
            .my_data{
                width: 100%;
                height: 50px;
                line-height: 50px;
                padding: 0 3%;
                margin-bottom: 10px;
                background-color: #fff;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .data_box{
                width: 100%;
                min-height: 400px;
                background-color: #fff;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .data_box>.box{
                padding-left: 10px;
                min-height: 50px;
                line-height: 50px;
                border-bottom: 1px solid #ddd;
            }
            .box>a{
                display: block;
                min-height: 50px;
            }
            .box>a *{
                vertical-align: middle;
            }
            .box>a>.pic{
                width: 30px;
                height: 27px;
            }
            .box>a>span{
                color: #202020;
                font-size: 15px;
                margin-left: 5px;
            }
            .box>a>.jianTou{
                margin-right: 10px;
                float: right;
                width: 10px;
                height: 12px;
                margin-top: 20px;
            }
            .data_box>.mood{
                border-bottom: none;
            }
        }
    </style>
</head>
<body>
<div class="my_data">我的数据</div>
<div class="data_box">
    <div class="box">
        <a href="heart_rate.html">
            <img class="pic" src="/Health/public/Reception/images/data/xinlv.png" alt=""/>
            <span>测心率</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box">
        <a href="blood_pressure.html">
            <img class="pic" src="/Health/public/Reception/images/data/xueya.png" alt=""/>
            <span>测血压</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box">
        <a href="blood_sugar.html">
            <img class="pic" src="/Health/public/Reception/images/data/xuetang.png" alt=""/>
            <span>测血糖</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box">
        <a href="blood_fat.html">
            <img class="pic" src="/Health/public/Reception/images/data/xuezhi.png" alt=""/>
            <span>测血脂</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box">
        <a href="weight.html">
            <img class="pic" src="/Health/public/Reception/images/data/tizhong.png" alt=""/>
            <span>测体重</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box">
        <a href="drug.html">
            <img class="pic" src="/Health/public/Reception/images/data/yongyao.png" alt=""/>
            <span>记用药</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box">
        <a href="sport.html">
            <img class="pic" src="/Health/public/Reception/images/data/yundong.png" alt=""/>
            <span>记运动</span>
            <img class="jianTou" src="/Health/public/Reception./images/data/gengduo.png" alt=""/>
        </a>
    </div>
    <div class="box mood">
        <a href="mood.html">
            <img class="pic" src="/Health/public/Reception/images/data/xinqing.png" alt=""/>
            <span>记心情</span>
            <img class="jianTou" src="/Health/public/Reception/images/data/gengduo.png" alt=""/>
        </a>
    </div>
</div>
</body>
</html>