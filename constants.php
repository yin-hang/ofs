<?php
$FILESPATH="/home/yinhang/proj/teacher/files";
$INVALIDSTR = "NO";

$STAT_NULL = 0;
$STAT_APPLYING = 0;
$STAT_APPLYED = 1;
$STAT_LESSONPLAN = 2; //����ͨ��,���ϴ����޸Ľ̰�.�ɿ�ʼ����  
$STAT_RECHECKED_NOPLAN = 3; //���������,���̰������޸�  
$STAT_PLANMODIED = 4; //�̰����޸�,����˽̰�.������δͨ��  
$STAT_RECHECKED_PLANMODIED = 5; //�̰����󡣸�����ͨ��  
$STAT_RECHECKING = 6; //�̰������ͨ��,�д�����  
$STAT_FAIL = -1;
$STAT_SUCC = 100;

$EMPH_OFFSET = 2; //�м�STAT+2 => emph (flow�еĸ���λ��)
$MAXEMPHSTAT = 3; //stat>=���������EMPHֻȡ $MAXEMPHSTAT+$EMPH_OFFSET
$EMPH_SUCC = 7;
//������ķ���Ҳ�ɣ���������flow�ﲻ����״̬����ô�飬�ʸ�Ϊ����ķ���:  
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
