<?php
	require_once '/var/www/html/app/common/lib/meekrodb.2.1.class.php';
//lib/meekrodb.2.2.class.php';
	DB::$user = 'yinhang';
	DB::$password = 'ofs@2006';
	DB::$dbName = 'teacher';
	$APPLYTABLE = DB::$dbName.".apply";
?>

