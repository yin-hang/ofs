<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
    Lib_View::loadWidget('top.php');
?>
<div>
    <span>�����ύ�ɹ�,��ȴ����</span><br/>
    <span>����������:<?=$apply_data['apply_num'];?></span><br/>
    <span>�����������:<a href="http://www.cnpsy.net/16pf/index3.asp" id="j_star_test" target="_blank">���ӵ�ַ</a>
</div>
<?
    Lib_View::loadWidget('preview.php');
    Lib_View::loadWidget('bottom.php');
?>
