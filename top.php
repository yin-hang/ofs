<html>
<head><title>Welcome to OFS</title></head>
<body>
Hello, 
<?php
require_once ("user.php");
echo $_user['name']." &nbsp; (换用户<a href=\"/bbs/login.php?action=quit&verify=1acee49d\">登录</a>)<br>";
require("flow.php");

?>
