<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>我的地址</title>
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
            #container{
                width: 100%;
                min-height: 90px;
                margin-top: 10px;;
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
                background-color: #fff;
            }
            #container>.con_name{
                min-height: 30px;
                line-height: 30px;;
                font-size: 14px;;
            }
            .con_name p{
                display: inline-block;
            }
            .con_name>.name1{
                margin-left: 10px;;
            }
            .con_name>.num{
                float: right;
                margin-right: 10px;;
            }
            #container>.con_address{
                min-height: 30px;;
                line-height: 30px;;
                padding-left: 10px;;
                font-size: 14px;;
                border-bottom: 1px solid #ddd;
            }
            #container>.con_xiuGai{
                min-height: 30px;;
                line-height: 30px;;
                padding:0 10px;;
            }
            .con_xiuGai p{
                display: inline-block;
            }
            .con_xiuGai p *{
                vertical-align: middle;
            }
            .con_xiuGai p img{
                width: 15px;;
                height: 15px;
            }
            .con_xiuGai p a{
                font-size: 12px;;
                color: #777;
            }
            .con_xiuGai p .moRen{
                color: #0191E8;
            }
            .con_xiuGai>.bianJi{
                float: right;
                margin-right: 10px;;
            }
            .con_xiuGai>.delete{
                float: right;
            }
            #footer{
                width: 100%;
                min-height:50px ;
                line-height: 50px;;
                text-align: center;
                color: #fff;
                background-color: #0191E8;
                position: fixed;
                bottom: 0;
            }
            #footer>img{
                width: 23px;
                height: 23px;;
                margin-right: 5px;
            }
            #footer *{
                vertical-align: middle;
            }
        }
    </style>
</head>
<body>
<div id="container">
    <div class="con_name">
        <p class="name1">某某某</p>
        <p class="num">15815248456</p>
    </div>
    <div class="con_address">重庆市巴南区万达广场B区T9-7-3</div>
    <div class="con_xiuGai">
        <p>
            <img src="/Health/public/Reception/images/per/lan-xuanzhong.png" alt=""/>
            <a class="moRen">默认地址</a>
        </p>
        <p class="delete">
            <img src="/Health/public/Reception/images/per/delete-hui.png" alt=""/>
            <a>删除</a>
        </p>
        <p class="bianJi">
            <img src="/Health/public/Reception/images/per/bianji-hui.png" alt=""/>
            <a >编辑</a>
        </p>
    </div>
</div>
<div id="container">
    <div class="con_name">
        <p class="name1">某某某</p>
        <p class="num">15815248456</p>
    </div>
    <div class="con_address">重庆市巴南区万达广场B区T9-7-3</div>
    <div class="con_xiuGai">
        <p>
            <img src="/Health/public/Reception/images/per/weixuan.png" alt=""/>
            <a>默认地址</a>
        </p>
        <p class="delete">
            <img src="/Health/public/Reception/images/per/delete-hui.png" alt=""/>
            <a>删除</a>
        </p>
        <p class="bianJi">
            <img src="/Health/public/Reception/images/per/bianji-hui.png" alt=""/>
            <a >编辑</a>
        </p>
    </div>
</div>
<div id="footer">
    <img src="/Health/public/Reception/images/per/jiahao.png" alt=""/>
    <a>添加新地址</a>
</div>
</body>
</html>