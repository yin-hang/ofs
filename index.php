<?php
require("user.php");
?>

<html>
<head>
</head>
<body>
    <?php if(!$_user['is_login']){?>
        你需要先<a href="http://www.ourfreesky.org/bbs/login.php">登录</a>之后才能进行申请操作
    <?php }else{?>
    <div class="tech_pro"></div>
    <div>申请状态</div>
    <a href="/teacher/apply.php">申请支教</a>
    <div>
        <ul>
            <li>申请编号</li>
            <li>提交时间</li>
            <li>最后修改时间</li>
            <li>当前状态
            </li>
        </ul>
    </div>
    <a href="">你当前的状态</a>
    <?php }?>
</body>
</html>