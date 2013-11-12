<?php
require("top.php");
?>
<br>
系统尚未完成，抱歉！<br>
请发信给 volunteerteachers@gmail.com 报名
<br>
<a href="./">按此返回申请系统首页</a>

<p>

<?php
$filespath = $FILESPATH;
if(isset($_user['name']) == false) {
  require("login.php");
	die;
}
$username = $_user['name'];
$userhead = substr($username, 0, 1);
if(!is_dir("$filespath/$userhead") && !mkdir("$filespath/$userhead")) {
	print "文件保存目录 $filespath/$userhead 无法创建, 请联系管理员";
	die;
}
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

//print_r($_POST);
//print "File: $photoPath - ".$_FILES['photo']['name'];
//print_r($_FILES);
$info="\n";
foreach($_POST as $key=>$value) {
	str_replace("\"","\'",$value);
	str_replace(",","，",$value);
	$thisinfo = "\"".$key."\" : \"".$value."\" ,\n";
	//print "<br>\"".$thisinfo; //key."\" : \"".$value."\" ,";
	$info = $info.$thisinfo;
}
print "<hr>";

require_once ("db.php");

$results = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$username."'");
$nowTime = new DateTime('NOW');
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
			print ("填写不完整, 请回退重新填写. 已填写的部分已保存，可放心刷新<br>");
			die;
		}	
	}
	foreach ($MUSTNOT as $rule) {
		if (strpos($info, $rule) != false) {
			$valid = false;
			print ("填写不完整, 请回退重新填写. 已填写的部分已保存，可放心刷新<br>");
			die;
		}	
	}
	// stat = $STAT_APPLYED
	if ($valid == true) {
		DB::update($APPLYTABLE, array (
			'stat' => $STAT_APPLYED
			, 'moditime' => $nowTime
			), "user=%s", $username
		);

	}
}
?>
