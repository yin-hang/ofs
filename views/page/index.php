<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
Lib_View::loadWidget('top.php');
?>
<div class="wrapper">
    <div class="page-header"><h3 class="text-center">OFS志愿者申请</h3></div>
   <?
   Lib_View::loadWidget('show_msg.php');
   Lib_View::loadWidget('process.php');
   Lib_View::loadWidget('stat.php');
   ?>
</div>
<div class="text-center">
        <?
                if($user['power']['teacher_apply_admin'] == 1){
                        echo '<a href="/teacher/admin/audit.php" target="_blank">管理员入口</a>';
                };
        ?>
</div>
<?
    Lib_View::loadWidget('bottom.php');
?>
