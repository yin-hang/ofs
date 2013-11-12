<html>
<head>
    <title>OFS支教申请</title>
    <meta charset="GBK">
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/css/teacher.css"/>
</head>
<body>
<div class="header">
    <div class="left"><a href="/"><img src="/teacher/static/img/ofs_logo.gif" width="240" height="100"/></a></div>
</div>
<?php
$file_path = dirname(__FILE__) . '/../../';
require_once ($file_path . "user.php");
require_once($file_path . "db.php");
require_once($file_path . "lib/Data.php");
require_once($file_path . "lib/Define.php");
require_once($file_path . "lib/FileUpload.php");
?>

