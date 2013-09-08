<?php
  require("user.php");
	$emph = 2;
	require("top.php");
	require_once ("db.php");

	$username = $_user['name'];
?>
<div class="container">
    <div class="main">
        <h1>OFS支教志愿者申请表</h1>
        <form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
            <?php require("form.php");?>
            <input class="btn btn-large" type=submit  value="保存" name="save" />
            <input class="btn btn-large btn-primary" type=submit value="申请" name="apply" />
        </form>
    </div>
</div>
<?php
//	include("bottom.php");
?>
