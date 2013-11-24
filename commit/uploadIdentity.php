<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 上传身份信息
 */
require_once('../lib/Base.php');
class uploadIdentity extends BaseAction{
    private $_strIdentityUrl = '';//身份证
    private $_strAcadeUrl = '';//学历
    private $_strMedicalUrl = '';//体检
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
        if($this->_arrApplyData == false ||empty($this->_arrApplyData)){
            return false;
        }
        return true;
    }
    private function _processFile(){
        $this->_strAcadeUrl = $this->_upload('acade_cert');
        $this->_strIdentityUrl = $this->_upload('identity_card');
        $this->_strMedicalUrl = $this->_upload('medical_report');
    }
    //更新身份信息
    private function _upIdentity(){
        $arrApplyData = $this->_arrApplyData;
        $arrUpdate = array();
        if(!$this->_strAcadeUrl || !$this->_strMedicalUrl||!$this->_strIdentityUrl){
            $this->_error(Lib_Errno::NEED_UPLOAD_IDENTITY,Lib_Errno::NEED_UPLOAD_IDENTITY);
            return false;
        }
        if(Lib_Define::STAT_IDENTITY_CHECK_FAIL != $arrApplyData['stat']&&Lib_Define::STAT_LESSON_CHECK_PASS != $arrApplyData['stat']){
            return false;
        }
        $arrUpdate = array(
            'identity_card'=>$this->_strIdentityUrl,
            'acade_cert'=>$this->_strAcadeUrl,
            'medical_report' => $this->_strMedicalUrl,
            'stat' => Lib_Define::STAT_SUBMIT_IDENTITY_END,
            'moditime' => time(),
        );
        $arrResult = DB::update('apply',$arrUpdate,'user=%s',$this->_arrUser['name']);
        if($arrResult == false||$arrResult == null){
            $this->_error(Lib_Errno::UN_KNOW_ERR,Lib_Error::UN_KNOW_ERR);
            return false;
        }
        return true;
    }
    private function _upload($strPostName){
        $strUrl = Lib_FileUpload::upload($_FILES[$strPostName],Lib_Define::PHOTO_PATH,$this->_arrUser['name'],$strPostName);
        return $strUrl;
    }
}
$action = new uploadIdentity();
$action->execute();