<?php
  require("user.php");
	$emph = 2;
	require("top.php");
	require_once ("db.php");

	$username = $_user['name'];
?>
<div class="container">
    <div class="main">
        <h1>OFS֧��־Ը�������</h1>
        <form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
            <?php require("form.php");?>
            <input class="btn btn-large" type=submit class="" value="����" name="save" />
            <input class="btn btn-large btn-primary" type=submit class="" value="����" name="apply" />
        </form>
    </div>
</div>
<?php
	include("bottom.php");
?>
