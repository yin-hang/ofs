<?php
$_httprootdir = '/var/www/html';
require_once ($_httprootdir.'/app/common/User.php');
$_user = Common_User::current();
//var_dump($_user);
$_loginurl="http://www.ourfreesky.org/bbs/login.php";
#if($_user['is_login'] == false){
#  echo '<a href="http://www.ourfreesky.org/bbs/login.php">login</a>';
#}
#else{
#	echo 'current user :' . $_user['name'];
#}
$STAT_NULL = 0;
$STAT_APPLYING = 0;
$STAT_APPLYED = 1;
$STAT_FAIL = -1;
$STAT_SUCC = 100;

$MUSTBE = array("\"notice\" : \"on\"", "\"healthy\" : \"on\"", "\"supporttime\" :");
$MUSTNOT = array('"income" : ""', '"think" : ""' , '"risk" : ""' , '"parent" : ""');
?>
