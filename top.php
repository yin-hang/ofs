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
	echo $_user['name']." &nbsp; (���û�<a href=\"/bbs/login.php?action=quit&verify=1acee49d\">��¼</a>)<br>";
} else {
	echo " &nbsp; (��<a href=\"/bbs/login.php\">��¼</a>)<br>";
}
require("flow.php");
require_once("db.php");
?>

