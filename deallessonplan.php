<?php
	require("views/widget/top.php");
	
	$filespath = $FILESPATH;
	if(isset($_user['name']) == false) {
	  require("login.php");
		die;
	}
	$username = $_user['name'];
	$result = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$username."'");
	$newstat = $result['stat']; //TODO: 可考虑从数据库检查一下   
	$userhead = substr($username, 0, 1);
	$userencode = $username; //TODO: 考虑base64
	if(!is_dir("$filespath/$userhead/$userencode")) {
		print "文件保存目录 $filespath/$userhead/$userencode 无法创建, 请联系管理员";
		die;
	}
	
	$lessonplanObj = $_FILES['lessonplan'];
	//$lessonplanExt = strrchr($lessonplanObj['name'], ".");
	$lessonplanPath = $filespath."/$userhead/$userencode/".$lessonplanObj['name']; //$lessonplanExt;
	if (move_uploaded_file($lessonplanObj['tmp_name'], $lessonplanPath)) {
		#good
		if (isset($_POST['apply'])) {
			if ($newstat == $STAT_LESSONPLAN)
				$newstat = $STAT_PLANMODIED;
			else
				$newstat = $STAT_RECHECKED_PLANMODIED;
		}

	} else {
		$lessonplanPath = $INVALIDSTR; //die;
		if (isset($_POST["lastlessonplanpath"])) {
			$lessonplanPath = $_POST["lastlessonplanpath"];
			print "教案未修改<br>";
		} else {
			print "教案上传失败<br>";
		}
	}


	require_once ("views/widget/db.php");

	DB::update($APPLYTABLE, array (
		 'doc' => $lessonplanPath
		, 'stat' => $newstat
		), "user=%s", $username
	);

	
	include("views/widget/bottom.php");
?>
