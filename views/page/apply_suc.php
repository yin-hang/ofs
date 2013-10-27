<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
    Lib_View::loadWidget('top.php');
?>
<div>
    <span>申请提交成功,请等待审核</span><br/>
    <span>您的申请编号:<?=$apply_data['apply_num'];?></span><br/>
    <span>请点击心理测试:<a href="http://www.cnpsy.net/16pf/index3.asp" id="j_star_test" target="_blank">链接地址</a>
</div>
<?
    Lib_View::loadWidget('preview.php');
    Lib_View::loadWidget('bottom.php');
?>
