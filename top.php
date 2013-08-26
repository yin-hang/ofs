<html>
<head>
    <title>Welcome to OFS</title>
    <meta charset="GBK">
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/css/teacher.css"/>
</head>
<body>
<div class="header">
    <div class="left"><a href="/"><img src="/teacher/static/img/ofs_logo.gif" width="240" height="100"/></a></div>
</div>
<?php
require_once ("user.php");
if($_user['is_login']){
	echo $_user['name']." &nbsp; (换用户<a href=\"/bbs/login.php?action=quit&verify=1acee49d\">登录</a>)<br>";
} else {
	echo " &nbsp; (请<a href=\"/bbs/login.php\">登录</a>)<br>";
}
require("flow.php");
require_once("db.php");
?>

