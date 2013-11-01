<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
$apply_stat = false;
if($user['is_login']){
    $apply_stat = Lib_Data::getApplyStatByUsername($user['name']);
}
?>
<div class="main_stat">
    <ul>
        <li class="header">��Ŀǰ��֧��������Ϣ</li>
    <?php if(!$user['is_login']){?>
        <li>��Ҫ��<a href="http://www.ourfreesky.org/bbs/login.php">��¼</a>֮����ܽ����������</li>
    <?php }else{
    if($apply_stat === false){
        echo '<li>����δ����֧�����룬<a href="/teacher/apply.php">�����������</a></li>';
    }else{
        echo '<li><div>������:' . $apply_data['apply_num']. '</div></li>';
        echo '<li><div>�ύʱ��:'.date('Y-m-d',$apply_data['moditime']).'</div></li>';
        switch($apply_stat){
            case Lib_Define::STAT_APPLYING;//������,��δ�ύ����
                echo '��ǰ״̬:������,��δ�ύ����,<a href="/teacher/apply.php">���</a>������Ϣ��������';
                break;
            case Lib_Define::STAT_APPLYED;//�������,�ȴ��������
                echo '��ǰ״̬:��δ�����������,<a href="http://www.cnpsy.net/16pf/index3.asp" id="j_star_test" target="_blank">��������������</a>';
                break;
            case Lib_Define::STAT_PSYCHOLOGY_TESTING;//��������У��ȴ�������Խ���
                echo '��ǰ״̬:�ȴ�����������,���Ѿ����,��<a href="/teacher/index.php" id="j_finish_test">�������</a>������һ�����<br/>';
                echo '���û���,����<a href="http://www.cnpsy.net/16pf/index3.asp" target="_blank">������Ե�ַ</a>���в���';
                break;
            case Lib_Define::STAT_PSYCHOLOGY_TEST_EDN;//������Խ���,�ȴ�����
                echo '<li>��ǰ״̬:�ύ���,������,�ȴ�������</li>';
                break;
            case Lib_Define::STAT_FIRST_CHECK_SUC;//�������,�ȴ�����
                echo '<li>��ǰ״̬:�������,������,�ȴ�������</li>';
                break;
            case Lib_Define::STAT_FIRST_CHECK_FAIL://����ʧ�ܣ����´�����������
                echo '<li>��ǰ״̬:���ʧ��,���¸�ѧ����������</li>';
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_SECOND_CHECK_SUC;//�������,�ȴ��ύ�̰�
                Lib_View::loadWidget('uploadLessonPlan.php');
                break;
            case Lib_Define::STAT_SECOND_CHECK_FAIL;//����ʧ��,���´�����������
                echo '<li>��ǰ״̬:���ʧ��,���¸�ѧ������������</li>';
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_LESSON_UPLOAD_FINISH;//�̰��ύ��ɣ��ȴ����
                echo '<li>��ǰ״̬:�̰��ύ���,�ȴ����</li>';
                break;
            case Lib_Define::STAT_LESSON_CHECK_NOT_PASS;//�̰����δͨ������Ҫ�޸�
                Lib_View::loadWidget('uploadLessonPlan.php');
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_LESSON_CHECK_PASS;//�̰����ͨ��,��Ҫ�ύ�����Ϣ
                Lib_View::loadWidget('identity_upload.php');
                break;
            case Lib_Define::STAT_SUBMIT_IDENTITY_END;//�����Ϣ�ύ���,�ȴ����
                echo '<li>��ǰ״̬:�����Ϣ�ύ���,�ȴ���������Ϣ���</li>';
                break;
            case Lib_Define::STAT_IDENTITY_CHECK_SUC;//�����Ϣ�ύ�ɹ�,�ȴ���ѵ
                echo '<li>��ǰ״̬:Ŀǰ��������Ѿ����,�ȴ���ѵ</li>';
                break;
            case Lib_Define::STAT_IDENTITY_CHECK_FAIL;//�����Ϣ�ύʧ��,��Ҫ�����ϴ������Ϣ
                echo '<li>';
                Lib_View::loadWidget('identity_upload.php');
                Lib_View::loadWidget('audit_remark.php');
                echo '</li>';
                break;
        }
    }
    }
    ?>
    </ul>
</div>