<?php
$_httprootdir = dirname(__FILE__) . '/..';
require_once ($_httprootdir .'/app/common/User.php');
$_user  = Common_User::current();
$_loginurl="http://www.ourfreesky.org/bbs/login.php";
if($_user['is_login'] == false){
  echo '<a href="http://www.ourfreesky.org/bbs/login.php">login</a>';
}
else{
	echo 'current user :' . $_user['name'];
	var_dump($_user);
}
?>
