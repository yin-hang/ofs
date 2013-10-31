<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 完成心里测试
 */
require_once('../lib/Base.php');
class finishTest extends BaseAction{
    private $_intApplyNum = 0;
    public function _execute(){
        $arrResult = DB::query('update apply set stat=%d where user=%s',Lib_Define::STAT_PSYCHOLOGY_TEST_EDN,$this->_arrUser['name']);
        if($arrResult !== false){
            return true;
        }
        return false;
    }
    public function _check(){
        if(!$this->_arrUser['is_login']){
            return false;
        }
        $this->_intApplyNum = $_POST['apply_num'];
        if(Lib_Data::getApplyStatByUsername($this->_arrUser['name']) != Lib_Define::STAT_PSYCHOLOGY_TESTING){
            return false;
        }
        return true;
    }
}
$action = new finishTest();
$action->execute();