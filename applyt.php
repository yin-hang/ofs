<?php
require("views/widget/top.php");
?>
<!--
<br>
ϵͳ��δ��ɣ���Ǹ��<br>
�뷢�Ÿ� volunteerteachers@gmail.com ����
<br>
<a href="./">���˷�������ϵͳ��ҳ</a>
-->
<p>

<?php
$filespath = $FILESPATH;
$username = $_user['name'];
$userhead = substr($username, 0, 1);
if(!is_dir("$filespath/$userhead") && !mkdir("$filespath/$userhead")) {
	print "�ļ�����Ŀ¼ $filespath/$userhead �޷�����, ����ϵ����Ա";
	die;
}
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
		print '<span class="red">��Ƭ�ϴ�ʧ��</span><br>';
	}
}
$info="\n";
foreach($_POST as $key=>$value) {
	str_replace("\"","\'",$value);
	str_replace(",","��",$value);
	$thisinfo = "\"".$key."\" : \"".$value."\" ,\n";
	//print "<br>\"".$thisinfo; //key."\" : \"".$value."\" ,";
	$info = $info.$thisinfo;
}
print "<hr>";

require_once ("db.php");

$results = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$username."'");
$nowTimeObj = new DateTime('NOW');
$nowTime = $nowTimeObj->format(DateTime::ISO8601);
if ($results == NULL) {
	//echo "Y";
	DB::insert($APPLYTABLE, array (
		  'user' => $username
		, 'info' => $info
		, 'file' => $photoPath
		, 'moditime' => $nowTime
		, 'creatime' => $nowTime
	));
} else {
	//echo "N";
	DB::update($APPLYTABLE, array (
		'info' => $info
		, 'file' => $photoPath
		, 'moditime' => $nowTime
		), "user=%s", $username
	);
}

if (isset($_POST['apply'])) {
	// check valid
	$valid = true;
	foreach ($MUSTBE as $rule) {
		if (strpos($info, $rule) == false) {
			$valid = false;
			print ("��д������, �����������д. ����д�Ĳ����ѱ��棬�ɷ���ˢ��<br>");
		}	
	}
	foreach ($MUSTNOT as $rule) {
		if (strpos($info, $rule) != false) {
			$valid = false;
			print ("��д������, �����������д. ����д�Ĳ����ѱ��棬�ɷ���ˢ��<br>");
		}	
	}
	// stat = $STAT_APPLYED
	if ($valid == true) {
		DB::update($APPLYTABLE, array (
			'stat' => $STAT_APPLYED
			, 'moditime' => $nowTime
			), "user=%s", $username
		);
		print "<br>�������ύ����ȴ����<br>";

	}
}
require('bottom.php');
