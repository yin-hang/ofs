<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
Lib_View::loadWidget('top.php');
?>
<div class="wrapper">
    <div class="page-header"><h3 class="text-center">OFS÷æ‘∏’ﬂ…Í«Î</h3></div>
   <?
   Lib_View::loadWidget('show_msg.php');
   Lib_View::loadWidget('process.php');
   Lib_View::loadWidget('stat.php');
   ?>
</div>
<?
    Lib_View::loadWidget('bottom.php');
?>