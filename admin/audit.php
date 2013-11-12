<?php
//审核页面
require_once('../lib/Base.php');
class audit extends BaseAction{
    private $_intStat = false;
    private $_arrStat = array(
        Lib_Define::STAT_PSYCHOLOGY_TEST_EDN,
        Lib_Define::STAT_LESSON_UPLOAD_FINISH,
        Lib_Define::STAT_FIRST_CHECK_SUC,
    );
    private $_arrApplyData = array();
    protected function _execute(){
        $this->_getList();
        $this->_strTpl = 'audit.php';
    }
    private function _getList(){
        $arrData = array();
        if($_GET['all_apply'] == 1){
            $arrData = DB::query('select * from apply  order by moditime');
        }elseif($this->_intStat !== false && isset($_GET['stat'])){
            $arrData = DB::query('select * from apply  where stat=%d order by moditime',$this->_intStat);
        }else{
            $arrData = DB::query('select * from apply where stat in (%d,%d,%d) order by moditime', Lib_Define::STAT_PSYCHOLOGY_TEST_EDN,
                Lib_Define::STAT_LESSON_UPLOAD_FINISH,
                Lib_Define::STAT_FIRST_CHECK_SUC);
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
            $this->_intStat = intval($_GET['stat']);
        }
        return true;
    }
 }
$action = new audit();
$action->execute();
