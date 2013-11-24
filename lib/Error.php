<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */
class Lib_Error{
    const USER_NOT_LOGIN = '用户未登录';//用户未登录
    const UN_KNOW_ERR = '未知错误';//未知错误
    const PARAM_ERR = '参数错误';//参数错误
    const UPLODA_PIC_FAIL = '图片上传失败';//图片上传失败
    const UPLOAD_LESSON_FAIL = '教案上传失败';
    const UPLOAD_IDENTITY_NOT_FULL = '身份信息上传不全';
    const UPLOAD_IDENTITY_FAIL = '身份信息上传失败';
    const CAN_NOT_UPDATE_IN_AUDIT = '审核状态不能再修改';

    const NEED_UPLOAD_IDENTITY_CARD = '请上传学历证书';
    const NEED_UPLOAD_ADACT_CERT = '请上传学历扫描件';
    const NEED_UPLOAD_MEDICIAL_REPORT = '请上传体检报告扫描件';

    const NEED_UPLOAD_IDENTITY = '身份信息上传不全，请重新上传';
    const NEED_UPLOAD_LESSON = '教案上传不正确，请重新上传';

    const UPLOAD_LESSON_SUCCESS = '教案上传成功';
    const REMARK_NOT_NULL = '请填写审核不通过的原因';

    const PERM_ERROR = '没有权限访问';
}