<html>
<head>
	<title>Welcome to OFS</title>
	<meta charset="GBK">
</head>
<body>
Hello, 
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

