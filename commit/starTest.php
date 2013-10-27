<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */
require_once('../lib/Base.php');
class starTest extends BaseAction{
    private $_intApplyNum = 0;
    public function _execute(){
        $arrResult = DB::update('update apply set stat=%d where user=%s and apply_num=%s',Lib_Define::STAT_PSYCHOLOGY_TESTING,$this->_arrUser['name'],$this->_intApplyNum);
        if($arrResult !== false){
            return true;
        }
        return false;
    }
    public function _check(){
        if(!$this->_arrUser['is_login'] || !isset($_POST['apply_num'])){
            return false;
        }
        $this->_intApplyNum = $_POST['apply_num'];
        if(Lib_Data::getApplyStatByUsername($this->_arrUser['name']) !== Lib_Define::STAT_APPLYED){
            return false;
        }
        return true;
    }
}
$action = new FinishText();
$action->execute();