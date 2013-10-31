<?php
	require("views/widget/top.php");
	//echo "权限:".$_user['power']['teacher_apply_admin'].".<br>";
	//check user
	if (!isset($_user['power']['teacher_apply_admin']) || $_user['power']['teacher_apply_admin'] != true) {
		print "没有权限";
		include ("views/widget/bottom.php");
		die;
	}
?>
<a href="audit.php">返回审核首页</a>
<hr>
