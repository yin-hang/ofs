<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 数据接口
 */

class Lib_Data {
    //获取用户当前的申请状态
    public static function getApplyStatByUsername($strName){
        $arrResult = DB::query('select stat from apply where user=%s', $strName);
        if($arrResult !== false && isset($arrResult[0]['stat'])){
            return $arrResult[0]['stat'];
        }
        return false;
    }
    public static function getUserInfoByName($strName){
        $arrResult = DB::query('select stat from apply where $strName=%s',$strName);
        if($arrResult !== false || isset($arrResult[0])){
            return $arrResult[0];
        }
        return false;
    }
    //更改申请状态
    public static function setApplyStat($strName,$stat){
        if($stat < Lib_Define::MIN_STAT || $stat > Lib_Define::MAX_STAT){
            return false;
        }
        $arrResult = DB::update('apply',array(
            'stat' => $stat
        ),'user=%s',$strName);
        if(!$arrResult){
            return true;
        }
    }

}