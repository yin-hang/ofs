<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc:开始心理测试
 */
require_once('../lib/Base.php');
class starTest extends BaseAction{
    private $_intApplyNum = 0;
    public function _execute(){
        $arrResult = DB::query('update apply set stat=%d where user=%s',Lib_Define::STAT_PSYCHOLOGY_TESTING,$this->_arrUser['name']);
        if($arrResult !== false){
            return true;
        }
        return false;
    }
    public function _check(){
        if(!$this->_arrUser['is_login']){
            return false;
        }
        //$this->_intApplyNum = $_POST['apply_num'];
        $stat = Lib_Data::getApplyStatByUsername($this->_arrUser['name']);
        if(!in_array($stat,array(
            Lib_Define::STAT_PSYCHOLOGY_TESTING,
            Lib_Define::STAT_APPLYED
        ))){
            var_dump($stat);
            return false;
        }
        return true;
    }
}
$action = new starTest();
$action->execute();