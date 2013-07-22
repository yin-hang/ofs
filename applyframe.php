<?php
  require("user.php");
	$emph = 2;
	require("top.php");
	require_once ("db.php");

	$username = $_user['name'];
?>
<hr>
<h1>OFS支教志愿者申请表
</h1><hr>
<form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
<h3>决定前，请慎重考虑如下问题：</h3>
<p>
<?php require("form.php"); ?>
<hr>
<input type=submit value="保存" name="save" />
<input type=submit value="申请" name="apply" />
</form>
<?php
	include("bottom.php");
?>
