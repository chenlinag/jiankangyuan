<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>心率</title>
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
        .container {
            width: 100%;
            min-height: 330px;
            margin: 0 auto;
        }
        .container:before {
            min-height: 330px;
            content: "";
            width: 1px;
            height: 65%;
            background: #0191E8;
            left: 50%;
            top: 365px;
            position: absolute;
        }
        @media screen and (max-width: 767px) {
            .header{
                width: 100%;
                height: 60px;
                line-height: 60px;
                text-align: center;
                border-bottom: 1px solid #ddd;
            }
            .header input{
                width: 33%;
                height: 30px;
                line-height: 30px;
                outline: none;
                border: 1px solid #777;
                border-radius: 5px;
            }
            .header button{
                height: 30px;
                line-height: 30px;
                color: #fff;
                margin-left: 5px;
                border: 1px solid #0191E8;
                border-radius: 5px;
                background-color: #0191E8;
            }
            .time_box{
                width: 100%;
                height: 60px;
                display: flex;
                justify-content: space-around;
                padding-top: 14px;
            }
            .time_box p{
                display: inline-block;
                width: 26%;
                height: 30px;
                line-height: 30px;
                font-size: 14px;
                text-align: center;
                border: 1px solid #777;
                border-radius: 15px;
                color: #0191E8;
            }
            .time_box>.select{
                color: #fff;
                background-color: #0191E8;
                border: none;
            }
            .date_time{
                width: 35%;
                height:30px;
                line-height: 30px;
                margin: 0 auto;
                text-align: center;
                color: #fff;
                font-size: 14px;
                background-color: #0191E8;
                border-radius: 15px;
            }

            #timeline .timeline-item:after, #timeline .timeline-item:before {
                content: '';
                display: block;
                width: 100%;
                clear: both;
            }

            *, *:before, *:after {
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
            }

            body, html {
                height: 100%
            }

            img {
                max-width: 100%
            }

            a {
                text-decoration: none;
            }

            /*.container {*/
                /*width: 100%;*/
                /*min-height: 330px;*/
                /*margin: 0 auto;*/
            /*}*/
            /*.container:before {*/
                /*min-height: 330px;*/
                /*content: "";*/
                /*width: 1px;*/
                /*height: 65%;*/
                /*background: #0191E8;*/
                /*left: 50%;*/
                /*top: 65%;*/
                /*position: absolute;*/
            /*}*/
            #timeline {
                margin: 30px auto;
                position: relative;
                -webkit-transition: all 0.4s ease;
                -moz-transition: all 0.4s ease;
                -ms-transition: all 0.4s ease;
                transition: all 0.4s ease;
            }



            #timeline:after {
                content: "";
                clear: both;
                display: table;
                width: 100%
            }

            #timeline .timeline-item {
                position: relative;
                min-height: 100px;
            }

            #timeline .timeline-item .timeline-icon {

                width: 13px;
                height: 13%;
                position: absolute;
                top: 6px;
                left: 48.5%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -ms-border-radius: 50%;
                border-radius: 50%
            }

            #timeline .timeline-item .timeline-icon img {
                position: relative;
                top: 14px;
                left: 14px;
            }

            #timeline .timeline-item .timeline-content {
                width: 42%;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                border-radius: 5px;
                -webkit-transition: all 0.3s ease;
                -moz-transition: all 0.3s ease;
                -ms-transition: all 0.3s ease;
                transition: all 0.3s ease;
            }

            #timeline .timeline-item .timeline-content h2 {
                background: #ee4d4d;
                color: #fff;
                margin: -4px -20px 0 -20px;
                -webkit-border-radius: 3px 3px 0 0;
                -moz-border-radius: 3px 3px 0 0;
                -ms-border-radius: 3px 3px 0 0;
                border-radius: 3px 3px 0 0;
            }

            #timeline .timeline-item .timeline-content:before {
                content: '';
                position: absolute;
                left: 42%;
                top: 5px;
                width: 0;
                height: 0;
                border-top: 7px solid transparent;
                border-bottom: 7px solid transparent;
                border-left: 12px solid #ee4d4d;
            }

            #timeline .timeline-item .timeline-content.right {
                float: right;
            }

            #timeline .timeline-item .timeline-content.right:before {
                content: '';
                right: 41%;
                top:5px;
                left: inherit;
                border-left: 0;
                border-right: 12px solid #1FA1C3;
            }

            .btn {
                padding: 5px 15px;
                text-decoration: none;
                background: transparent;
                border: 2px solid #f27c7c;
                color: #f27c7c;
                display: inline-block;
                position: relative;
                text-transform: uppercase;
                font-size: 12px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                -ms-border-radius: 5px;
                border-radius: 5px;
                -webkit-transition: background 0.3s ease;
                -moz-transition: background 0.3s ease;
                -ms-transition: background 0.3s ease;
                transition: background 0.3s ease;
                -webkit-box-shadow: 2px 2px 0 #f27c7c;
                -moz-box-shadow: 2px 2px 0 #f27c7c;
                -ms-box-shadow: 2px 2px 0 #f27c7c;
                /*box-shadow: 2px 2px 0 #f27c7c;*/
            }

            .btn:hover {
                box-shadow: none;
                top: 2px;
                left: 2px;
                -webkit-box-shadow: 2px 2px 0 transparent;
                -moz-box-shadow: 2px 2px 0 transparent;
                -ms-box-shadow: 2px 2px 0 transparent;
                box-shadow: 2px 2px 0 transparent;
            }

            .time {
                width: 65%;
                height: 25px;
                line-height: 25px;
                background-color: #1FA1C3;
                font-size: 12px;
                color: #fff;
                margin-left: 3px;
                margin-bottom: 10px;
            }
            .txt{
                height: 65px;
                font-size: 13px;
                border: 1px solid #1FA1C3;
                border-radius: 5px;
                padding: 2%;
            }
            .txt>span{
                color: #29D656;
                float: right;
            }
            .txt2>span{
                color:#ee4d4d ;
            }
            .cricl_lan{
                background:#1FA1C3 ;
            }
            .cricl_red{
                background: #ee4d4d;
            }
            #container{
                width: 100%;
                min-height: 200px;
                padding: 0 3%;
                margin-top: 20px;
            }
            rect{
                fill:#eee;
            }
            .highcharts-tracker path{
                fill:#3A6BA6;
            }
            .highcharts-axis-labels text {
                fill:#333;

            }
            .highcharts-legend{
                display:none;
            }
            .highcharts-legend path{
                  stroke-width:0;
              }
        }
    </style>
</head>
<body>
<div class="header">
    <input type="date"/>
    -
    <input type="date"/>
    <button>搜 索</button>
</div>
<div class="time_box">
    <p>2017年10月</p>
    <p class="select">2017年9月</p>
    <p>2017年8月</p>
</div>


<div id="container"></div>


<div class="htmleaf-container" style="padding: 0 3%;">
    <div class="date_time">2017年9月</div>
    <div class="container">
        <div id="timeline">
            <div class="timeline-item">
                <div class="timeline-icon cricl_lan">
                </div>
                <div class="timeline-content right">
                    <p class="time">&nbsp;09-20(8:30)</p>
                    <p class="txt">
                        心率<span>88次/分</span>
                        <br/>
                        测量结果：本次测量结果为心率正常
                    </p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon cricl_red">
                </div>
                <div class="timeline-content time-info">
                    <p class="time" style="margin-left: 35%;    background-color: #ee4d4d;text-align: right">09-20(8:30)&nbsp;</p>
                    <p class="txt">
                        心率<span>88次/分</span>
                        <br/>
                        测量结果：本次测量结果为心率正常
                    </p>
                </div>
            </div>


            <div class="timeline-item">
                <div class="timeline-icon cricl_lan">
                </div>
                <div class="timeline-content right">
                    <p class="time">&nbsp;09-20(8:30)</p>
                    <p class="txt">
                        心率<span>88次/分</span>
                        <br/>
                        测量结果：本次测量结果为心率正常
                    </p>
                 </div>
            </div>

        </div>
    </div>
</div>


<script type="text/javascript" src="/public/Reception/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/public/Reception/js/highcharts.js"></script>
<script>
    $(function () {
        $('#container').highcharts({
            chart: {
                type: 'line'
            },
            title: {
                text: ' '
            },
            subtitle: {
                text: ' '
            },
            xAxis: {
                categories: ['2017-9-20', '2017-9-21', '2017-9-22', '2017-9-23', '2017-9-24', '2017-9-25', '2017-9-26', '2017-9-27']
            },
            yAxis: {
                title: {
                    text: ' '
                }
            },
            series: [{
                name: ' ',
                data: [30, 48,52 , 57, 86, 90, 94, 92]
            }]
        });
    });
</script>
</body>
</html>