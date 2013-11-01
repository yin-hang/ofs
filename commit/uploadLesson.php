<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: �ϴ��̰�
 */
require_once('../lib/Base.php');
class uploadLesson extends BaseAction{
    private $_strDoc = '';
    private $_arrApplyData = array();
    protected $_strTpl = 'index.php';
    public function _execute(){
        $this->_processFile();
        $this->_upIdentity();
        $this->_arrData['apply_data'] = $this->_arrApplyData;
    }
    public function _check(){
        $this->_arrData['user'] = $this->_arrUser;
        if(!$this->_arrUser['is_login']){
            return false;
        }
        $this->_arrApplyData = Lib_Data::getUserInfoByName($this->_arrUser['name']);
        $this->_arrData['apply_data'] = $this->_arrApplyData;
        if($this->_arrApplyData == false ||empty($this->_arrApplyData)){
            return false;
        }
        return true;
    }
    private function _processFile(){
        $this->_strDoc = $this->_upload('doc');
    }
    //���������Ϣ
    private function _upIdentity(){
        $arrApplyData = $this->_arrApplyData;
        $arrUpdate = array();
        if(!$this->_strDoc){
            $this->_error(Lib_Errno::NEED_UPLOAD_LESSON,Lib_Error::NEED_UPLOAD_LESSON);
            return false;
        }
        if(Lib_Define::STAT_SECOND_CHECK_SUC != $arrApplyData['stat'] && (Lib_Define::STAT_LESSON_CHECK_NOT_PASS != $arrApplyData['stat'])){
            echo 'error';
            $this->_error(Lib_Errno::UN_KNOW_ERR,Lib_Error::UN_KNOW_ERR);
            return false;
        }
        $arrUpdate = array(
            'doc' =>$this->_strDoc,
            'stat' => Lib_Define::STAT_LESSON_UPLOAD_FINISH,
            'moditime' => time()
        );
        $arrResult = DB::update('apply',$arrUpdate,'user=%s',$this->_arrUser['name']);
        if($arrResult == false||$arrResult == null){
            $this->_error(Lib_Errno::UN_KNOW_ERR,Lib_Error::UN_KNOW_ERR);
            return false;
        }
        $this->_arrApplyData = Lib_Data::getUserInfoByName($this->_arrUser['name']);
        return true;
    }
    private function _upload($strPostName){
        $strUrl = Lib_FileUpload::upload($_FILES[$strPostName],Lib_Define::PHOTO_PATH,$this->_arrUser['name'],'lesson');
        return $strUrl;
    }
}
$action = new uploadLesson();
$action->execute();