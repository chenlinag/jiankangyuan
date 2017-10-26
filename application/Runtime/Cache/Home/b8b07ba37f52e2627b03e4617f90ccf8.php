<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>活动介绍</title>
    <link rel="stylesheet" href="/Health/public/Reception/css/introduce.css"/>
</head>
<body>
    <div id="header">
        <img src="<?php echo ($icon_path); ?>" />
    </div>
    <div id="main">
        <div class="int_name">活动名称</div>
        <div class="int_score"><?php echo ($cname); ?></div>
        <div class="int_box">
            <p>活动介绍</p>
            <p class="int_txt">
               <?php echo ($remark); ?>
            </p>
            <p class="int_time">活动时间：<?php echo ($start_time); ?>至<?php echo ($end_time); ?></p>
            <p>活动地址：<?php echo ($address); ?></p>
        </div>
    </div>
    <div id="footer">
        <a href="order">我 要 报 名</a>
    </div>
</body>
</html>