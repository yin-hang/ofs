<?php
require('views/widget/top.php');
$apply_stat = false;
if($_user['is_login']){
    $apply_stat = Lib_Data::getApplyStatByUsername($_user['name']);
}
?>
    <?php if(!$_user['is_login']){?>
        ����Ҫ��<a href="http://www.ourfreesky.org/bbs/login.php">��¼</a>֮����ܽ����������
    <?php }else{
        if($apply_stat === false){
            echo '����δ����֧�����룬<a href="/teacher/apply.php">�����������</a>';
        }else{
            switch($apply_stat){
                case Lib_Define::STAT_APPLYING;//������,��δ�ύ����
                    break;
                case Lib_Define::STAT_APPLYED;//�������,�ȴ��������
                    break;
                case Lib_Define::STAT_PSYCHOLOGY_TESTING;//��������У��ȴ�������Խ���
                    break;
                case Lib_Define::STAT_PSYCHOLOGY_TEST_EDN;//������Խ���,�ȴ�����
                    break;
                case Lib_Define::STAT_FIRST_CHECK_SUC;//�������,�ȴ�����
                    break;
                case Lib_Define::STAT_FIST_CHECK_FAIL;//����ʧ�ܣ����´�����������
                    break;
                case Lib_Define::STAT_SECOND_CHECK_SUC;//�������,�ȴ��ύ�̰�
                    break;
                case Lib_Define::STAT_SECOND_CHECK_FAIL;//����ʧ��,���´�����������
                    break;
                case Lib_Define::STAT_LESSON_PLAY;//�̰��ύ��ɣ��ȴ����
                    break;
                case Lib_Define::STAT_LESSON_CHECK_NOT_PASS;//�̰����δͨ������Ҫ�޸�
                    break;
                case Lib_Define::STAT_LESSON_CHECK_PASS;//�̰����ͨ��,��Ҫ�ύ�����Ϣ
                    break;
                case Lib_Define::STAT_SUBMIT_IDENTITY_END;//�����Ϣ�ύ���,�ȴ����
                    break;
                case Lib_Define::STAT_IDENTITY_CHECK_SUC;//�����Ϣ�ύ�ɹ�,�ȴ���ѵ
                    break;
                case Lib_Define::STAT_IDENTITY_CHECK_FAIL;//�����Ϣ�ύʧ��,��Ҫ�����ϴ������Ϣ
                    break;
            }
        }
        ?>

    <div class="tech_pro"></div>
    <div>����״̬</div>
    <a href="/teacher/apply.php">����֧��</a>
    <div>
        <ul>
            <li>������</li>
            <li>�ύʱ��</li>
            <li>����޸�ʱ��</li>
            <li>��ǰ״̬
            </li>
        </ul>
    </div>
    <a href="">�㵱ǰ��״̬</a>
    <?php
    }
        include('views/widget/bottom.php')
    ?>
