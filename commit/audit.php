<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-30
 * Desc: Ìá½»ÉóºË
 */
require_once('../init.php');
class audit extends BaseAction{
    private $_intIsPass = 1;
    private $_intStat = false;
    private $_strRemark = '';
    private $_intToStat = 0;
    private $_intId = 0;
    private $_arrStat = array(
        Lib_Define::STAT_PSYCHOLOGY_TEST_EDN,
        Lib_Define::STAT_LESSON_UPLOAD_FINISH,
        Lib_Define::STAT_FIRST_CHECK_SUC
    );
    protected function _execute(){
        $this->_transStat();
        $this->_updateStat();
    }
    protected function _check(){
        if(!$this->isAdmin()){
            $this->_error(Lib_Errno::PARAM_ERR,Lib_Error::PARAM_ERR);
            return false;
        }
        if(!(isset($_POST['pass']) && isset($_POST['stat']) &&isset($_POST['remark'])&&isset($_POST['id']))){
            return fasle;
        }
        $this->_intIsPass = intval($_POST['pass']);
        $this->_strRemark = $_POST['remark'];
        $this->_intStat = $_POST['stat'];
        $this->_intId = $_POST['id'];
        if($this->_intIsPass ==0 && $this->_strRemark == ''){
            $this->_error(Lib_Errno::REMARK_NOT_NULL,Lib_Error::REMARK_NOT_NULL);
        }
        if(!in_array($this->_intStat,$this->_arrStat)){
            return false;
        }
        return true;
    }
    private function _updateStat(){
        $arrUpdate = array(
            'stat' => $this->_intToStat,
            'audit_time'=> time(),
        );
        if(!$this->_intIsPass){
            $arrUpdate['audit_remark'] = $this->_strRemark;
        }
        DB::update('apply',$arrUpdate,'id=%d',$this->_intId);

    }
    protected function _transStat(){
        switch($this->_intStat){
            case    Lib_Define::STAT_PSYCHOLOGY_TEST_EDN;
                if($this->_intIsPass){
                   $this->_intToStat = Lib_Define::STAT_FIRST_CHECK_SUC;
                }else{
                    $this->_intToStat = Lib_Define::STAT_FIRST_CHECK_FAIL;
                }
                break;
            case    Lib_Define::STAT_FIRST_CHECK_SUC;
                if($this->_intIsPass){
                    $this->_intToStat = Lib_Define::STAT_SECOND_CHECK_SUC;
                }else{
                    $this->_intToStat = Lib_Define::STAT_SECOND_CHECK_FAIL;
                }
                break;
            case    Lib_Define::STAT_LESSON_UPLOAD_FINISH;
                if($this->_intIsPass){
                    $this->_intToStat = Lib_Define::STAT_LESSON_CHECK_PASS;
                }else{
                    $this->_intToStat = Lib_Define::STAT_LESSON_CHECK_NOT_PASS;
                }
                break;
            default:
                return false;
        }
        return true;
    }
}
$action = new audit();
$action->execute();