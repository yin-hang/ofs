<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
Lib_View::loadWidget('top.php');
?>
<div class="container">
   <?
   Lib_View::loadWidget('show_msg.php');
   Lib_View::loadWidget('stat.php');
   ?>
</div>
<?
    Lib_View::loadWidget('bottom.php');
?>