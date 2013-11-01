<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 上传教案
 */
$apply_stat = $apply_data['stat'];
?>
<div>当前状态:
<?
    switch($apply_stat){
        case Lib_Define::STAT_SECOND_CHECK_SUC;
            echo '复审完成,需要提交教案';
            break;
        case Lib_Define::STAT_LESSON_CHECK_NOT_PASS:
            echo '教案未通过审核,需要修改,请重新上传';
            break;
    }
?>
</div>
<div class="upload_lesson">
    <div>请上传教案:</div>
    <form enctype="multipart/form-data" action="/teacher/commit/uploadLesson.php" method="post" name="form" >
        <input type="file" name="doc"/>
        <button type="submit" class="btn btn-default" name="submit_doc">提交</button>
    </form>
</div>