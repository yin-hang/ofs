<?php
	require("views/widget/top.php");
	//echo "Ȩ��:".$_user['power']['teacher_apply_admin'].".<br>";
	//check user
	if (!isset($_user['power']['teacher_apply_admin']) || $_user['power']['teacher_apply_admin'] != true) {
		print "û��Ȩ��";
		include ("views/widget/bottom.php");
		die;
	}
?>
<a href="audit.php">���������ҳ</a>
<hr>
