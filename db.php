<?php
	//require_once  '/var/www/html/teacher/lib/meekrodb.2.2.class.php';
	//require_once '../app/common/lib/meekrodb.2.1.class.php';
//lib/meekrodb.2.2.class.php';
//	DB::disconnect();
	DB::$user = 'yinhang';
	DB::$password = 'ofs@2006';
	DB::$dbName = 'teacher';
//	DB::get('teacher');
	DB::useDB('teacher');
//	DB::get();
	$APPLYTABLE = DB::$dbName.".apply";
?>