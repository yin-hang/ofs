<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
$apply_stat = $apply_data['stat'];
?>

<div>
    <div>��ǰ״̬:
    <?
       if($apply_stat == Lib_Define::STAT_LESSON_CHECK_PASS){
           echo '�̰����ͨ��,��Ҫ�ύ�����Ϣ';
       }elseif($apply_stat == Lib_Define::STAT_IDENTITY_CHECK_FAIL){
           echo '�����Ϣ���ʧ��,�������ύ';
       }
    ?>
    </div>
    <div>���ϴ������Ϣ</div>
    <form enctype="multipart/form-data" action="/teacher/commit/uploadIdentity.php" method="post" name="form" >
        <ul>
            <li>�����Ϣ�ύ</li>
            <li>���֤ɨ���:<input type="file" name="identity_card"></li>
            <li>ѧ��֤ɨ���:<input type="file" name="acade_cert"/></li>
            <li>��챨��ɨ���:<input type="file" name="medical_report"/></li>
            <li><input type="submit" class="btn" name="submit_identity" value="�ύ"/></li>
        </ul>
    </form>
</div>