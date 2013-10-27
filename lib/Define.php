<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 定义的常量
 */
$STAT_APPLYING = 0;
$STAT_APPLYED = 1;
$STAT_LESSONPLAN = 2; //初审通过,待上传或修改教案.可开始复审
$STAT_RECHECKED_NOPLAN = 3; //复审已完成,但教案尚在修改
$STAT_PLANMODIED = 4; //教案有修改,需审核教案.复审尚未通过
$STAT_RECHECKED_PLANMODIED = 5; //教案待审。复审已通过
$STAT_RECHECKING = 6; //教案审核已通过,尚待复审
class Lib_Define {
    const STAT_APPLYING = 0;//申请中
    const STAT_APPLYED = 1;//申请完成,等待初审
    const STAT_FIRST_CHECK_SUC = 2;//初审完成,等待复审
    const STAT_FIST_CHECK_FAIL = 3;//初审失败，需要
    const STAT_SECOND_CHECK_SUC = 3;//复审完成,等待提交教案
    const STAT_SECOND_CHECK_FAIL = 4;//复审失败,需要修改信息
    const STAT_LESSON_PLAY = 4;//教案提交完成，等待审核
    const STAT_LESSON_CHECK_NOT_PASS = 5;//教案审核未通过，需要修改
    const STAT_LESSON_CHECK_PASS = 6;//教案审核通过,需要提交身份信息
    const STAT_SUBMIT_IDENTITY_END = 7;//身份信息提交完成,等待审核
    const STAT_IDENTITY_CHECK_SUC = 8;//身份信息提交成功
    const STAT_IDENTITY_CHECK_FAIL = 9;//身份信息提交失败,需要重新上传

}