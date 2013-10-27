<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 定义的常量
 */
class Lib_Define {
    const STAT_APPLYING = 0;//申请中,还未提交申请
    const STAT_APPLYED = 1;//申请完成,等待心理测试
    const STAT_PSYCHOLOGY_TESTING = 2;//心理测试中，等待心理测试结束
    const STAT_PSYCHOLOGY_TEST_EDN = 3;//心理测试结束,等待初审
    const STAT_FIRST_CHECK_SUC = 4;//初审完成,等待复审
    const STAT_FIST_CHECK_FAIL = 5;//初审失败，请下次再重新申请
    const STAT_SECOND_CHECK_SUC = 6;//复审完成,等待提交教案
    const STAT_SECOND_CHECK_FAIL = 7;//复审失败,请下次再重新申请
    const STAT_LESSON_PLAY = 8;//教案提交完成，等待审核
    const STAT_LESSON_CHECK_NOT_PASS = 9;//教案审核未通过，需要修改
    const STAT_LESSON_CHECK_PASS = 10;//教案审核通过,需要提交身份信息
    const STAT_SUBMIT_IDENTITY_END = 11;//身份信息提交完成,等待审核
    const STAT_IDENTITY_CHECK_SUC = 12;//身份信息提交成功,等待培训
    const STAT_IDENTITY_CHECK_FAIL = 13;//身份信息提交失败,需要重新上传身份信息

    const MIN_STAT = 0;
    const MAX_STAT = 13;
    const PHOTO_PATH = '../static/file/';
    const LESSONG_PATH = '../static/file/';
    const IDENTITY_PATH = '../static/file/';
}