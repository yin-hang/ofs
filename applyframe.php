<?php
  require("user.php");
	$emph = 2;
	require("top.php");
	require_once ("db.php");

	$username = $_user['name'];
?>
<hr>
<h1>OFS֧��־Ը�������
</h1><hr>
<form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
<h3>����ǰ�������ؿ����������⣺</h3>
<p>
<?php require("form.php"); ?>
<hr>
<input type=submit value="����" name="save" />
<input type=submit value="����" name="apply" />
</form>
<?php
	include("bottom.php");
?>
