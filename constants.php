<?php
$FILESPATH="/home/yinhang/proj/teacher/files";
$INVALIDSTR = "NO";

$STAT_NULL = 0;
$STAT_APPLYING = 0;
$STAT_APPLYED = 1;
$STAT_LESSONPLAN = 2; //初审通过,待上传或修改教案.可开始复审  
$STAT_RECHECKED_NOPLAN = 3; //复审已完成,但教案尚在修改  
$STAT_PLANMODIED = 4; //教案有修改,需审核教案.复审尚未通过  
$STAT_RECHECKED_PLANMODIED = 5; //教案待审。复审已通过  
$STAT_RECHECKING = 6; //教案审核已通过,尚待复审  
$STAT_FAIL = -1;
$STAT_SUCC = 100;

$EMPH_OFFSET = 2; //中间STAT+2 => emph (flow中的高亮位置)
$MAXEMPHSTAT = 3; //stat>=这个数，则EMPH只取 $MAXEMPHSTAT+$EMPH_OFFSET
$EMPH_SUCC = 7;
//用上面的方法也可，但后来看flow里不必像状态标这么碎，故改为下面的方法:  
$stat2emph[$STAT_NULL] = 1;
$stat2emph[$STAT_APPLYING] = 2;
$stat2emph[$STAT_APPLYED] = 3;
$stat2emph[$STAT_LESSONPLAN] = 4;
$stat2emph[$STAT_RECHECKED_NOPLAN] = 4;
$stat2emph[$STAT_PLANMODIED] = 5;
$stat2emph[$STAT_RECHECKED_PLANMODIED] = 5;
$stat2emph[$STAT_RECHECKING] = 6;
$stat2emph[$STAT_SUCC] = 7;
$stat2emph[$STAT_FAIL] = 1;


$MUSTBE = array("\"notice\" : \"on\"", "\"healthy\" : \"on\"", "\"supporttime\" :");
$MUSTNOT = array('"income" : ""', '"think" : ""' , '"risk" : ""' , '"parent" : ""');
?>
