<?php
require_once('/../init.php');
class audit extends BaseAction{
    private $_intStat = false;
    private $_arrStat = array(
        Lib_Define::STAT_PSYCHOLOGY_TEST_EDN,
        Lib_Define::STAT_LESSON_UPLOAD_FINISH,
        Lib_Define::STAT_FIRST_CHECK_SUC,
        Lib_Define::STAT_SUBMIT_IDENTITY_END
    );
    private $_arrApplyData = array();
    protected function _execute(){
        $this->_getList();
        $this->_strTpl = 'audit.php';
    }
    private function _getList(){
        $arrData = array();
        if($this->_intStat === false){
           $arrData = DB::query('select * from apply order by moditime');
        }else{
            $arrData = DB::query('select * from apply  where stat=%d order by moditime',$this->_intStat);
        }
        if($arrData != false && !empty($arrData)){
            foreach($arrData as $key=>$value){
                $arrData[$key]['info'] = Lib_Encode::json2array($value['info']);
            }
            $this->_arrData['apply_list'] = $arrData;
        }
    }
    protected function _check(){
        $this->_strTpl = 'no_perm.php';
        if(!$this->isAdmin()){
            $this->_error(Lib_Errno::PERM_ERROR,Lib_Error::PERM_ERROR);
            return false;
        }
        if(isset($_GET['stat'])){
            $this->_intStat = intval($_POST['stat']);
        }
        return true;
    }
    }
$action = new audit();
$action->execute();