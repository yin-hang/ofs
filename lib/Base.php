<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */
require_once(dirname(__FILE__).'/../init.php');
abstract class BaseAction{
    protected $_intErrno = 0;//错误号
    protected $_strErrmsg = '';//错误信息
    protected $_arrData = array();
    protected $_arrUser = array();
    protected $_strTpl = '';
    public function execute(){
	global $_user;
        $this->_arrUser = $_user; 
        if($this->_check()){
            $ret = $this->_execute();
            if($ret === false && $this->_intErrno ===0){
                $this->_error(Lib_Errno::UN_KNOW_ERR,Lib_Error::UN_KNOW_ERR);
            }
        }else{
            if($this->_intErrno === 0){
                $this->_error(Lib_Errno::PARAM_ERR,Lib_Error::PARAM_ERR);
            }
        }
        $this->build();
    }
    abstract protected  function _check();
    abstract protected  function _execute();
    protected function build(){
        if($this->_strTpl !== ''){
            $this->displayTemplate();
        }else{
            $this->displayJson();
        }
    }
    public function displayJson(){
        $arrResult = array(
            'errno' => $this->_intErrno,
            'errmsg' => $this->_strErrmsg,
            'data' => $this->_arrData
        );
        echo Lib_Encode::array2json($arrResult);
    }
    public function displayTemplate(){
        if(!isset($this->_arrData['user'])){
            $this->_arrData['user'] = $this->_arrUser;
        }
        Lib_View::assign($this->_arrData);
        Lib_View::assign('errno',$this->_intErrno);
        Lib_View::assign('errmsg',$this->_strErrmsg);
        Lib_View::loadPage($this->_strTpl);
    }
    protected  function  _error($intErrno,$strErrmsg = ''){
        $this->_intErrno = $intErrno;
        $this->_strErrmsg = $strErrmsg;
    }
    public function isAdmin(){
        $arrUser = $this->_arrUser;
        if(isset($arrUser['power']['teacher_apply_admin'])){
            if($arrUser['power']['teacher_apply_admin'] == 1){
                return true;
            }
        }
        return false;
    }
}
