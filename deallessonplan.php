<?php
	require("views/widget/top.php");
	
	$filespath = $FILESPATH;
	if(isset($_user['name']) == false) {
	  require("login.php");
		die;
	}
	$username = $_user['name'];
	$result = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$username."'");
	$newstat = $result['stat']; //TODO: �ɿ��Ǵ����ݿ���һ��   
	$userhead = substr($username, 0, 1);
	$userencode = $username; //TODO: ����base64
	if(!is_dir("$filespath/$userhead/$userencode")) {
		print "�ļ�����Ŀ¼ $filespath/$userhead/$userencode �޷�����, ����ϵ����Ա";
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
			print "�̰�δ�޸�<br>";
		} else {
			print "�̰��ϴ�ʧ��<br>";
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
