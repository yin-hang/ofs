<?php
$rootpath = dirname(__FILE__);
$target_dir = dirname(__FILE__) . '/files/_file';
//mkdir($target_dir);
copy($rootpath . '/user.php', $target_dir . '/u.php');
file_put_contents("$target_dir/test.txt", 'hhah');
