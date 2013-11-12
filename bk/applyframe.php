<?php
	require("user.php");
	$emph = 2;
	require("top.php");
	require_once ("db.php");

	//$formvalues["notice"] = "off";
	$formvalues["supporttime"] = "";
	$formvalues["work"] = "";

	$formvalues["workdetail"] = "";
	$formvalues["income"] = "";
	$formvalues["think"] = "";
	$formvalues["risk"] = "";
	$formvalues["hope"] = "";
	$formvalues["friend"] = "";
	$formvalues["parent"] = "";
	$formvalues["name"] = "";
	$formvalues["sex"] = "";
	$formvalues["birth"] = "";
	$formvalues["edu"] = "";
	$formvalues["marriage"] = "";
	$formvalues["nation"] = "";
	$formvalues["hometown"] = "";
	$formvalues["liveplace"] = "";
	$formvalues["mobile"] = "";
	$formvalues["tel"] = "";
	$formvalues["email"] = "";
	$formvalues["addr"] = "";
	$formvalues["edubegintime1"] = "";
	$formvalues["eduendtime1"] = "";
	$formvalues["edu1"] = "";
	$formvalues["edubegintime2"] = "";
	$formvalues["eduendtime2"] = "";
	$formvalues["edu2"] = "";
	for ($i=1; $i<6; $i++) {
		$formvalues["edubegintime$i"] = "";
		$formvalues["eduendtime$i"] = "";
		$formvalues["edu$i"] = "";
		$formvalues["jobbegintime$i"] = "";
		$formvalues["jobendtime$i"] = "";
		$formvalues["job$i"] = "";
		$formvalues["positon$i"] = "";
		$formvalues["folk$i"] = "";
		$formvalues["folkwork$i"] = "";
	}
	$formvalues["EmergencyContactName"] = "";
	$formvalues["EmergencyContact"] = "";
	$formvalues["EmergencyContactWork"] = "";
	$formvalues["ability"] = "";
	$formvalues["illdetail"] = "";
	$formvalues["expdetail"] = "";
	$formvalues["supporttimedetail"] = "";
	$formvalues["supportstart"] = "";
	$formvalues["infosrc"] = "";

	$username = $_user['name'];
	$res = DB::queryFirstRow("select * from $APPLYTABLE where user = '".$username."'");
	if ($res == NULL) {
		$photofilename = "";
	} else {
		$photofilename = $res['file'];
		$row = explode(",", $res['info']);
		foreach ($row as $key=>$value) {
			$info1 = explode("\" : \"", $value);
			if (isset($info1[1])) {
				$info1index = trim($info1[0], "\" \t\n\r\0\x0B");
				//echo $formvalues["$info1index"]." CHANGE ";
				$formvalues["$info1index"] = substr($info1[1], 0, -2);
				//echo $formvalues[$info1index]." $info1index BECAUSE ";
				//print_r($info1); //echo "$key => $value<hr>";
				//echo "<hr>";
			}
		}
		//$i=4; echo "\$formvalues[eduendtime$i] = '".$formvalues["eduendtime$i"]."'<hr>";
	}
?>
<hr>
<h1>OFS支教志愿者申请表
</h1><hr>
<form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
<h3>决定前，请慎重考虑如下问题：</h3>

<input type=submit value="保存" name="save" />
<input type=submit value="申请" name="apply" />
</form>
<?php
	include("bottom.php");
?>

