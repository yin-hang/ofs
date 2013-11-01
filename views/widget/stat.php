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
    <?php if(!$user['is_login']){?>
        ����Ҫ��<a href="http://www.ourfreesky.org/bbs/login.php">��¼</a>֮����ܽ����������
    <?php }else{
    if($apply_stat === false){
        echo '����δ����֧�����룬<a href="/teacher/apply.php">�����������</a>';
    }else{
        echo '<div>������:' . $apply_data['apply_num']. '</div>';
        echo '<div>�ύʱ��:'.date('Y-m-d',$apply_data['moditime']).'</div>';
        switch($apply_stat){
            case Lib_Define::STAT_APPLYING;//������,��δ�ύ����
                echo '��ǰ״̬:������,��δ�ύ����,<a href="/teacher/apply.php">���</a>������Ϣ��������';
                break;
            case Lib_Define::STAT_APPLYED;//�������,�ȴ���������
                echo '��ǰ״̬:��δ������������,<a href="http://www.cnpsy.net/16pf/index3.asp" id="j_star_test" target="_blank">���������������</a>';
                break;
            case Lib_Define::STAT_PSYCHOLOGY_TESTING;//���������У��ȴ��������Խ���
                echo '��ǰ״̬:�ȴ������������,<a href="/teacher/index.php" class="btn" id="j_finish_test">������</a><br/>';
                echo '<a href="http://www.cnpsy.net/16pf/index3.asp" target="_blank">�������Ե�ַ</a>';
                break;
            case Lib_Define::STAT_PSYCHOLOGY_TEST_EDN;//�������Խ���,�ȴ�����
                echo '��ǰ״̬:�����������,�ȴ�����';
                break;
            case Lib_Define::STAT_FIRST_CHECK_SUC;//�������,�ȴ�����
                echo '��ǰ״̬:�������,�ȴ�����';
                break;
            case Lib_Define::STAT_FIRST_CHECK_FAIL://����ʧ�ܣ����´�����������
                echo '��ǰ״̬:���ʧ��,���¸�ѧ����������';
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_SECOND_CHECK_SUC;//�������,�ȴ��ύ�̰�
                Lib_View::loadWidget('uploadLessonPlan.php');
                break;
            case Lib_Define::STAT_SECOND_CHECK_FAIL;//����ʧ��,���´�����������
                echo '��ǰ״̬:���ʧ��,���¸�ѧ������������';
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_LESSON_UPLOAD_FINISH;//�̰��ύ��ɣ��ȴ����
                echo '��ǰ״̬:�̰��ύ���,�ȴ����';
                break;
            case Lib_Define::STAT_LESSON_CHECK_NOT_PASS;//�̰����δͨ������Ҫ�޸�
                Lib_View::loadWidget('uploadLessonPlan.php');
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_LESSON_CHECK_PASS;//�̰����ͨ��,��Ҫ�ύ������Ϣ
                Lib_View::loadWidget('identity_upload.php');
                break;
            case Lib_Define::STAT_SUBMIT_IDENTITY_END;//������Ϣ�ύ���,�ȴ����
                echo '��ǰ״̬:������Ϣ�ύ���,�ȴ����';
                break;
            case Lib_Define::STAT_IDENTITY_CHECK_SUC;//������Ϣ�ύ�ɹ�,�ȴ���ѵ
                echo '��ǰ״̬:Ŀǰ�Ѿ�������,�ȴ���ѵ';
                break;
            case Lib_Define::STAT_IDENTITY_CHECK_FAIL;//������Ϣ�ύʧ��,��Ҫ�����ϴ�������Ϣ
                Lib_View::loadWidget('identity_upload.php');
                Lib_View::loadWidget('audit_remark.php');
                break;
        }
    }
    }
    ?>
</div>