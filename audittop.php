<?php
	require("top.php");
	//echo "Ȩ��:".$_user['power']['teacher_apply_admin'].".<br>";
	//check user
	if (!isset($_user['power']['teacher_apply_admin']) || $_user['power']['teacher_apply_admin'] != true) {
		print "û��Ȩ��";
		include ("bottom.php");
		die;
	}
?>
<a href="audit.php">���������ҳ</a>
<hr>
