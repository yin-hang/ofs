<?php
require_once 'lib/meekrodb.2.2.class.php';
DB::$user = 'yinhang';
DB::$password = 'ofs@2006';
DB::$dbName = 'teacher';

DB::insert('test', array(
  'a' => 'row1',
));
$result = DB::query("SELECT * FROM test");
var_dump($result);
echo 'hello, world;';
