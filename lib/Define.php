<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: ����ĳ���
 */
$STAT_APPLYING = 0;
$STAT_APPLYED = 1;
$STAT_LESSONPLAN = 2; //����ͨ��,���ϴ����޸Ľ̰�.�ɿ�ʼ����
$STAT_RECHECKED_NOPLAN = 3; //���������,���̰������޸�
$STAT_PLANMODIED = 4; //�̰����޸�,����˽̰�.������δͨ��
$STAT_RECHECKED_PLANMODIED = 5; //�̰����󡣸�����ͨ��
$STAT_RECHECKING = 6; //�̰������ͨ��,�д�����
class Lib_Define {
    const STAT_APPLYING = 0;//������
    const STAT_APPLYED = 1;//�������,�ȴ�����
    const STAT_FIRST_CHECK_SUC = 2;//�������,�ȴ�����
    const STAT_FIST_CHECK_FAIL = 3;//����ʧ�ܣ���Ҫ
    const STAT_SECOND_CHECK_SUC = 3;//�������,�ȴ��ύ�̰�
    const STAT_SECOND_CHECK_FAIL = 4;//����ʧ��,��Ҫ�޸���Ϣ
    const STAT_LESSON_PLAY = 4;//�̰��ύ��ɣ��ȴ����
    const STAT_LESSON_CHECK_NOT_PASS = 5;//�̰����δͨ������Ҫ�޸�
    const STAT_LESSON_CHECK_PASS = 6;//�̰����ͨ��,��Ҫ�ύ�����Ϣ
    const STAT_SUBMIT_IDENTITY_END = 7;//�����Ϣ�ύ���,�ȴ����
    const STAT_IDENTITY_CHECK_SUC = 8;//�����Ϣ�ύ�ɹ�
    const STAT_IDENTITY_CHECK_FAIL = 9;//�����Ϣ�ύʧ��,��Ҫ�����ϴ�

}