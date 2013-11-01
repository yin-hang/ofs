<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
$apply_stat = $apply_data['stat'];
?>

<div>
    <div>当前状态:
    <?
       if($apply_stat == Lib_Define::STAT_LESSON_CHECK_PASS){
           echo '教案审核通过,需要提交身份信息';
       }elseif($apply_stat == Lib_Define::STAT_IDENTITY_CHECK_FAIL){
           echo '身份信息审核失败,请重新提交';
       }
    ?>
    </div>
    <div>请上传身份信息</div>
    <form enctype="multipart/form-data" action="/teacher/commit/uploadIdentity.php" method="post" name="form" >
        <ul>
            <li>身份信息提交</li>
            <li>身份证扫描件:<input type="file" name="identity_card"></li>
            <li>学历证扫描件:<input type="file" name="acade_cert"/></li>
            <li>体检报告扫描件:<input type="file" name="medical_report"/></li>
            <li><button type="submit" class="btn btn-default" name="submit_identity">提交</button>
        </ul>
    </form>
</div>