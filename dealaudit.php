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
$userencode = $username; //TODO: ����base64
if(!is_dir("$filespath/$userhead/$userencode") && !mkdir("$filespath/$userhead/$userencode")) {
	print "�ļ�����Ŀ¼ $filespath/$userhead/$userencode �޷�����, ����ϵ����Ա";
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
		print "��Ƭδ�޸�<br>";
	} else {
		print "��Ƭ�ϴ�ʧ��<br>";
	}
}
*/
//print_r($_POST);
//print "File: $photoPath - ".$_FILES['photo']['name'];
//print_r($_FILES);
require_once ("db.php");

$stattrans['succ'][$STAT_APPLYED] = $STAT_LESSONPLAN;
$transtip['succ'][$STAT_APPLYED] = "����";
$stattrans['succ'][$STAT_LESSONPLAN] = $STAT_RECHECKED_PLANMODIED;
$transtip['succ'][$STAT_LESSONPLAN] = "����";
$stattrans['succ'][$STAT_RECHECKING] = $STAT_SUCC;
$transtip['succ'][$STAT_RECHECKING] = "ף��������������̣�����";
$stattrans['succ'][$STAT_PLANMODIED] = $STAT_RECHECKED_PLANMODIED;
$transtip['succ'][$STAT_PLANMODIED] = "����";
//$stattrans['planok'][$STAT_LESSONPLAN] = $STAT_RECHECKING;
$stattrans['planok'][$STAT_PLANMODIED] = $STAT_RECHECKING;
$stattrans['planok'][$STAT_RECHECKED_PLANMODIED] = $STAT_SUCC;
$stattrans['planbad'][$STAT_PLANMODIED] = $STAT_LESSONPLAN;
$stattrans['planbad'][$STAT_RECHECKED_PLANMODIED] = $STAT_RECHECKED_NOPLAN;
//$stattrans['fail'][$STAT_APPLYED] = $STAT_FAIL;


//$results = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$username."'");
//if ($results == NULL) {
//	echo "Error: No such user: $usename <br>";
//} else {
	//echo "N";
	//Ӧ��������Ƿ�isset, �����������״̬���Ϸ���//TODO
	if (isset($_POST['succ'])) {
		$newstat = $stattrans['succ'][$oldstat];
		print "<br>$username ".$transtip['succ'][$oldstat]."ͨ��<br>";
	} else if (isset($_POST['planok'])) {
		$newstat = $stattrans['planok'][$oldstat];
		print "<br>$username ��ʦ�Ľ̰������ͨ��<br>";
	} else if (isset($_POST['planbad'])) {
		$newstat = $stattrans['planbad'][$oldstat];
		print "<br>$username �Ľ̰����δͨ��������֮��ͨ����ȡ��������һ�ݺϸ�Ľ̰�<br>";
	} else if (isset($_POST['fail'])) {
		$newstat = $STAT_FAIL;
		print "<br>$username ��˲�ͨ��<br>";
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
