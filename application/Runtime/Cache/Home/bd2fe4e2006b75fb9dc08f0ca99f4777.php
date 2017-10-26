<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>服务列表</title>
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
            .content{
                width: 100%;
                min-height:157px; ;
                margin-top: 10px;
                background-color: #fff;
                border: 1px solid #ddd;
            }
            .content div{
                display: inline-block;
            }
            .content>.con_sh{
                width: 100%;
                height: 120px;
            }
            .content>.con_sh *{
                display: inline-block;
                vertical-align: middle;
            }
            .con_sh>.con_left{
                width: 25%;
                height: 85px;
                text-align: center;
            }
            .con_left>img{
                width: 70px;
                height: 90px;
                margin: 2.5px 0;
                border: 1px solid #ddd;
            }
            .con_sh>.con_right{
                width: 73%;
                height: 120px;
                border-bottom: 1px dashed #ddd;
            }
            .con_right>.right_p1{
                font-size: 19px;
                font-weight: bold;
                padding: 5px 0;
            }
            .right_p1>span{
                font-size: 14px;
                font-weight: normal;
                margin-left: 10px;
            }
            .con_right>p:nth-child(2){
                font-size: 12px;
                margin-bottom: 5px;
                line-height: 20px;
                text-indent: 2em;
            }
            .content>.con_xia{
                width: 100%;
                height: 35px;
                line-height: 35px;
                text-align: right;
                padding-right: 10px;
            }
            .con_xia>a{
                font-size: 13px;
                color: #0FC98A;
            }
            .con_xia>a>img{
                padding-left: 10px;
                padding-top: 2px;
                width: 18px;
                height: 13px;
            }
        }
    </style>
</head>
<body>
<div class="content">
    <div class="con_sh">
        <div class="con_left">
            <img src="/Health/public/Reception/images/doc.jpg" />
        </div>
        <div class="con_right">
            <p class="right_p1">高血压<span>服务包</span></p>
            <p>擅长高血压、冠心病、风湿性心脏病、心肌炎、心肌病及心力衰竭等疾病的诊治</p>
        </div>
    </div>
    <div class="con_xia">
        <a href="/Health/index.php/Index/xiangqing">
            <span>详细介绍</span>
            <img src="/Health/public/Reception/images/gengduo2.png" />
        </a>
    </div>
</div>
<div class="content">
    <div class="con_sh">
        <div class="con_left">
            <img src="/Health/public/Reception/images/doc.jpg" />
        </div>
        <div class="con_right">
            <p class="right_p1">陈媛<span>主治医生</span></p>
            <p>擅长高血压、冠心病、风湿性心脏病、心肌炎、心肌病及心力衰竭等疾病的诊治，对心律失常及心血管危机重症的处理有丰富经验。</p>
        </div>
    </div>
    <div class="con_xia">
        <a href="#">
            <span>详细介绍</span>
            <img src="/Health/public/Reception/images/gengduo2.png" />
        </a>
    </div>
</div>
<div class="content">
    <div class="con_sh">
        <div class="con_left">
            <img src="/Health/public/Reception/images/doc.jpg" />
        </div>
        <div class="con_right">
            <p class="right_p1">陈媛<span>主治医生</span></p>
            <p>擅长高血压、冠心病、风湿性心脏病、心肌炎、心肌病及心力衰竭等疾病的诊治，对心律失常及心血管危机重症的处理有丰富经验。</p>
        </div>
    </div>
    <div class="con_xia">
        <a href="#">
            <span>详细介绍</span>
            <img src="/Health/public/Reception/images/gengduo2.png" />
        </a>
    </div>
</div>
<div class="content">
    <div class="con_sh">
        <div class="con_left">
            <img src="/Health/public/Reception/images/doc.jpg" />
        </div>
        <div class="con_right">
            <p class="right_p1">陈媛<span>主治医生</span></p>
            <p>擅长高血压、冠心病、风湿性心脏病、心肌炎、心肌病及心力衰竭等疾病的诊治，对心律失常及心血管危机重症的处理有丰富经验。</p>
        </div>
    </div>
    <div class="con_xia">
        <a href="#">
            <span>详细介绍</span>
            <img src="/Health/public/Reception/images/gengduo2.png" />
        </a>
    </div>
</div>
</body>
</html>