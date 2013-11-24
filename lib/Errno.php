<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */

class Lib_Errno {
    const USER_NOT_LOGIN = 1;//用户未登录
    const UN_KNOW_ERR = 2;//未知错误
    const PARAM_ERR = 3;//参数错误
    const UPLODA_PIC_FAIL = 4;//图片上传失败
    const UPLOAD_LESSON_FAIL = 5;
    const UPLOAD_IDENTITY_NOT_FULL =6;// '身份信息上传不全';
    const UPLOAD_IDENTITY_FAIL = 7;//'身份信息上传失败';
    const CAN_NOT_UPDATE_IN_AUDIT = 8;//'审核状态不能再修改';

    const NEED_UPLOAD_IDENTITY_CARD = 9;
    const NEED_UPLOAD_ADACT_CERT = 10;
    const NEED_UPLOAD_MEDICIAL_REPORT = 11;
    const NEED_UPLOAD_IDENTITY = 12;
    const NEED_UPLOAD_LESSON = 13;

    const PERM_ERROR = 14;//权限错误
    const REMARK_NOT_NULL = 15;
}