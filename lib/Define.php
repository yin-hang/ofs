<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: ����ĳ���
 */
class Lib_Define {
    const STAT_APPLYING = 0;//������,��δ�ύ����
    const STAT_APPLYED = 1;//�������,�ȴ��������
    const STAT_PSYCHOLOGY_TESTING = 2;//��������У��ȴ�������Խ���
    const STAT_PSYCHOLOGY_TEST_EDN = 3;//������Խ���,�ȴ�����
    const STAT_FIRST_CHECK_SUC = 4;//�������,�ȴ�����
    const STAT_FIST_CHECK_FAIL = 5;//����ʧ�ܣ����´�����������
    const STAT_SECOND_CHECK_SUC = 6;//�������,�ȴ��ύ�̰�
    const STAT_SECOND_CHECK_FAIL = 7;//����ʧ��,���´�����������
    const STAT_LESSON_PLAY = 8;//�̰��ύ��ɣ��ȴ����
    const STAT_LESSON_CHECK_NOT_PASS = 9;//�̰����δͨ������Ҫ�޸�
    const STAT_LESSON_CHECK_PASS = 10;//�̰����ͨ��,��Ҫ�ύ�����Ϣ
    const STAT_SUBMIT_IDENTITY_END = 11;//�����Ϣ�ύ���,�ȴ����
    const STAT_IDENTITY_CHECK_SUC = 12;//�����Ϣ�ύ�ɹ�,�ȴ���ѵ
    const STAT_IDENTITY_CHECK_FAIL = 13;//�����Ϣ�ύʧ��,��Ҫ�����ϴ������Ϣ

    const MIN_STAT = 0;
    const MAX_STAT = 13;
    const PHOTO_PATH = '../static/file/';
    const LESSONG_PATH = '../static/file/';
    const IDENTITY_PATH = '../static/file/';
}