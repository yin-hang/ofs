<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */

class Lib_Errno {
    const USER_NOT_LOGIN = 1;//�û�δ��¼
    const UN_KNOW_ERR = 2;//δ֪����
    const PARAM_ERR = 3;//��������
    const UPLODA_PIC_FAIL = 4;//ͼƬ�ϴ�ʧ��
    const UPLOAD_LESSON_FAIL = 5;
    const UPLOAD_IDENTITY_NOT_FULL =6;// '�����Ϣ�ϴ���ȫ';
    const UPLOAD_IDENTITY_FAIL = 7;//'�����Ϣ�ϴ�ʧ��';
    const CAN_NOT_UPDATE_IN_AUDIT = 8;//'���״̬�������޸�';

    const NEED_UPLOAD_IDENTITY_CARD = 9;
    const NEED_UPLOAD_ADACT_CERT = 10;
    const NEED_UPLOAD_MEDICIAL_REPORT = 11;
    const NEED_UPLOAD_IDENTITY = 12;
    const NEED_UPLOAD_LESSON = 13;

    const PERM_ERROR = 14;//Ȩ�޴���
    const REMARK_NOT_NULL = 15;
}