<?php
$FILESPATH="/home/yinhang/proj/teacher/files";
$INVALIDSTR = "NO";

$STAT_NULL = 0;
$STAT_APPLYING = 0;
$STAT_APPLYED = 1;
$STAT_LESSONPLAN = 2; //����ͨ��,���ϴ����޸Ľ̰�.�ɿ�ʼ����  
$STAT_RECHECKED_NOPLAN = 3; //���������,���̰������޸�  
$STAT_PLANMODIED = 2; //�̰����޸�,����˽̰�.������δͨ��  
$STAT_RECHECKED_PLANMODIED = 4; //�̰����󡣸�����ͨ��  
$STAT_RECHECKING = 5; //�̰������ͨ��,�д�����  
$STAT_FAIL = -1;
$STAT_SUCC = 100;
$EMPH_OFFSET = 2; //�м�STAT+2 => emph (flow�еĸ���λ��)
$MAXEMPHSTAT = 3; //stat>=���������EMPHֻȡ $MAXEMPHSTAT+$EMPH_OFFSET
$EMPH_SUCC = 7;

$MUSTBE = array("\"notice\" : \"on\"", "\"healthy\" : \"on\"", "\"supporttime\" :");
$MUSTNOT = array('"income" : ""', '"think" : ""' , '"risk" : ""' , '"parent" : ""');
?>
