<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */
require_once('/../init.php');
abstract class BaseAction{
    protected $_intErrno = 0;//´íÎóºÅ
    protected $_strErrmsg = '';//´íÎóÐÅÏ¢
    protected $_arrData = array();
    protected $_arrUser = array();
    protected $_strTpl = '';
    public function execute(){
        $this->_arrUser = Common_User::current();
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
    abstract public function _check();
    abstract public function _execute();
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
        $arrResult = self::convert($arrResult,'gbk','utf-8');
        echo json_encode($arrResult);
    }
    public function displayTemplate(){
        Lib_View::assign($this->_arrData);
        Lib_View::assign('errno',$this->_intErrno);
        Lib_View::assign('errmsg',$this->_strErrmsg);
        Lib_View::loadPage($this->_strTpl);
    }
    public  static function convert($mixData,$strToEncode='gbk',$strFromEncode='utf-8'){
        $arrResult = array();
        if(is_array($mixData)){
            if (empty($mixVar)) return array();
            foreach($mixData as $key => $value){
                $key = self::convert($key,$strToEncode,$strFromEncode);
                $arrResult[$key] = self::convert($value,$strToEncode,$strFromEncode);
            }
            return $arrResult;
        }elseif(is_string($mixData)){
            return mb_convert_encoding($mixData,$strToEncode,$strFromEncode);
        }
        return $mixData;
    }
    protected  function  _error($intErrno,$strErrmsg = ''){
        $this->_intErrno = $intErrno;
        $this->_strErrmsg = $strErrmsg;
    }
}