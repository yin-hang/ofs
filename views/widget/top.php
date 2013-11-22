<?
    $arrItem = array(
        '基本信息提交',
        '心理测试',
        '初审（7天)',
        '复审(15天)',
        '教案提交',
        '开学'
    );
               
     if($user['is_login']){
        $stat = Lib_Data::getApplyStatByUsername($user['name']);
        $arrStat = array(
             Lib_Define::STAT_APPLYING => 0,//申请中,还未提交申请
             Lib_Define::STAT_APPLYED => 1,//申请完成,等待心理测试
             Lib_Define::STAT_PSYCHOLOGY_TESTING => 1,//心理测试中，等待心理测试结束
             Lib_Define::STAT_PSYCHOLOGY_TEST_EDN => 2,//心理测试结束,等待初审
             Lib_Define::STAT_FIRST_CHECK_SUC => 3,//初审完成,等待复审
             Lib_Define::STAT_FIRST_CHECK_FAIL => 3,//初审失败，请下次再重新申请
             Lib_Define::STAT_SECOND_CHECK_SUC => 4,//复审完成,等待提交教案
             Lib_Define::STAT_SECOND_CHECK_FAIL => 4,//复审失败,请下次再重新申请
             Lib_Define::STAT_LESSON_UPLOAD_FINISH => 5,//教案提交完成，等待审核
             Lib_Define::STAT_LESSON_CHECK_NOT_PASS => 5,//教案审核未通过，需要修改
             Lib_Define::STAT_LESSON_CHECK_PASS => 6,//教案审核通过,等待培训
             Lib_Define::STAT_ALL_FINISH => 6,//所有流程都已经完成
        );
        $user_stat = $arrStat[$stat];
     }else{
        $user_stat = 1;   
     }
     
?>

<html>
<head>
    <title>OFS支教申请</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/jquery-ui.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/css/teacher.css"/>
</head>
<body>
<div class="header">
    <div class="nav-top"></div>
    <div class="nav">
        <div class="nav-list fr">
            <?
                $itemLength = count($arrItem);
                for($i = 0;$i < $itemLength;$i ++){
                    if($i == $user_stat){
                        echo '<span class="nav-item cur-item">' . $arrItem[$i] . '</span>';
                        
                    }else{
                        echo '<span class="nav-item">' . $arrItem[$i] . '</span>';
                    }
                    if($i != $itemLength -1){
                        echo '<span class="nav-sep">></span>';    
                    }    
                }
            ?>
        </div>
        <div class="nav-logo">
            <span class="f30"><a href="/">我们的自由天空</a></span><span class="f22 sub-logo">公益助学</span>
        </div>
    </div>
    <div class="nav-bottom">
        <?echo $arrItem[$user_stat];?>
    </div>
</div>
<?php
$file_path = dirname(__FILE__) . '/../../';
//require_once ($file_path . "user.php");
//require_once($file_path . "db.php");
//require_once($file_path . "lib/Data.php");
//require_once($file_path . "lib/Define.php");
//require_once($file_path . "lib/FileUpload.php");
?>

