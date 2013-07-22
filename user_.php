<?php

$_httprootdir = '/var/www/html';
require_once ($_httprootdir.'/app/common/User.php');
$_user = Common_User::current();
//var_dump($_user);
$_loginurl="http://www.ourfreesky.org/bbs/login.php";

if($_user['is_login'] == false){
  echo '<a href="http://www.ourfreesky.org/bbs/login.php">login</a>';
}
else{
var_dump($_user);
	echo 'current user :' . $_user['name'];
}

