<?php
require("top.php");

if(!isset($_POST['user']) || !isset($_POST['oldstat'])) {
	print "<h2>Illegal visit of this page!</h2>";
	die;
}
$filespath = $FILESPATH;
$username = $_POST['user'];
$oldstat = $_POST['oldstat'];
/*
$userhead = substr($username, 0, 1);
$userencode = $username; //TODO: 考虑base64
if(!is_dir("$filespath/$userhead/$userencode") && !mkdir("$filespath/$userhead/$userencode")) {
	print "文件保存目录 $filespath/$userhead/$userencode 无法创建, 请联系管理员";
	die;
}

$photoObj = $_FILES['photo'];
//$photoExt = strrchr($photoObj['name'], ".");
$photoPath = $filespath."/$userhead/$userencode/".$photoObj['name']; //$photoExt;
if (move_uploaded_file($photoObj['tmp_name'], $photoPath)) {
	#good
} else {
	$photoPath = $INVALIDSTR; //die;
	if (isset($_POST["lastphotopath"])) {
		$photoPath = $_POST["lastphotopath"];
		print "照片未修改<br>";
	} else {
		print "照片上传失败<br>";
	}
}
*/
//print_r($_POST);
//print "File: $photoPath - ".$_FILES['photo']['name'];
//print_r($_FILES);
require_once ("db.php");

$stattrans['succ'][$STAT_APPLYED] = $STAT_LESSONPLAN;
$transtip['succ'][$STAT_APPLYED] = "初审";
$stattrans['succ'][$STAT_LESSONPLAN] = $STAT_RECHECKED_PLANMODIED;
$transtip['succ'][$STAT_LESSONPLAN] = "复审";
$stattrans['succ'][$STAT_RECHECKING] = $STAT_SUCC;
$transtip['succ'][$STAT_RECHECKING] = "祝贺已完成申请流程！复审";
$stattrans['succ'][$STAT_PLANMODIED] = $STAT_RECHECKED_PLANMODIED;
$transtip['succ'][$STAT_PLANMODIED] = "复审";
$stattrans['planok'][$STAT_LESSONPLAN] = $STAT_RECHECKING;
$stattrans['planok'][$STAT_PLANMODIED] = $STAT_RECHECKING;
$stattrans['planok'][$STAT_RECHECKED_PLANMODIED] = $STAT_SUCC;
//$stattrans['fail'][$STAT_APPLYED] = $STAT_FAIL;


//$results = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$username."'");
//if ($results == NULL) {
//	echo "Error: No such user: $usename <br>";
//} else {
	//echo "N";
	//应检查数据是否isset, 否则是输入的状态不合法。//TODO
	if (isset($_POST['succ'])) {
		$newstat = $stattrans['succ'][$oldstat];
		print "<br>$username ".$transtip['succ'][$oldstat]."通过<br>";
	} else if (isset($_POST['planok'])) {
		$newstat = $stattrans['planok'][$oldstat];
		print "<br>$username 老师的教案已审核通过<br>";
	} else if (isset($_POST['planbad'])) {
		$newstat = $stattrans['planbad'][$oldstat];
		print "<br>$username 的教案审核未通过，请与之沟通，争取早日做出一份合格的教案<br>";
	} else if (isset($_POST['fail'])) {
		$newstat = $STAT_FAIL;
		print "<br>$username 审核不通过<br>";
	} else {
		echo "Error: illeagle review stat!<br>";
		$newstat = $oldstat;//STAT_APPLYED;
	}
	$nowTimeObj = new DateTime('NOW');
	$nowTime = $nowTimeObj->format(DateTime::ISO8601);
	DB::update($APPLYTABLE, array (
		'stat' => $newstat
		, 'moditime' => $nowTime
		), "user=%s", $username
	);
//}

?>
