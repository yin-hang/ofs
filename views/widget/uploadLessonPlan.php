<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: �ϴ��̰�
 */
$apply_stat = $apply_data['stat'];
?>
<div>��ǰ״̬:
<?
    switch($apply_stat){
        case Lib_Define::STAT_SECOND_CHECK_SUC;
            echo '�������,��Ҫ�ύ�̰�';
            break;
        case Lib_Define::STAT_LESSON_CHECK_NOT_PASS:
            echo '�̰�δͨ�����,��Ҫ�޸�,�������ϴ�';
            break;
    }
?>
</div>
<div class="upload_lesson">
    <div>���ϴ��̰�:</div>
    <form enctype="multipart/form-data" action="/teacher/commit/uploadLesson.php" method="post" name="form" >
        <input type="file" name="doc"/>
        <button type="submit" class="btn btn-default" name="submit_doc">�ύ</button>
    </form>
</div>