<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-30
 * Desc: 
 */
Lib_View::loadWidget('top.php');
if($apply_data == false || empty($apply_data)){
    echo '���������κ�������Ϣ';
}else{
    Lib_View::loadWidget('preview.php');
}
Lib_View::loadWidget('bottom.php');
