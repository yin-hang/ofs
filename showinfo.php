<?php
	echo "<hr> $username ����Ϣ���£�<br>";
	require("form.php");
	$photofile = str_replace("/home/yinhang/proj/","/", $photofilename);
	echo "<a href=\"$photofile\"><img src=\"$photofile\" alt=\"��Ƭ\" /></a><br>";
	if ($docfilename == "NULL") {
		echo "�̰���δ�ϴ�<br>";
	} else {
		$docfile = str_replace("/home/yinhang/proj/","/", $docfilename);
		echo "<a href=\"$docfile\">�̰�</a><br>";
		//echo "<a href=\"$docfile\">�̰�</a>";
	}
?>

