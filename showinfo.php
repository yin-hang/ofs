<?php
	echo "<hr> $username 的信息如下：<br>";
	require("form.php");
	$photofile = str_replace("/home/yinhang/proj/","/", $photofilename);
	echo "<a href=\"$photofile\"><img src=\"$photofile\" alt=\"照片\" /></a><br>";
	if ($docfilename == "NULL") {
		echo "教案尚未上传<br>";
	} else {
		$docfile = str_replace("/home/yinhang/proj/","/", $docfilename);
		echo "<a href=\"$docfile\">教案</a><br>";
		//echo "<a href=\"$docfile\">教案</a>";
	}
?>

