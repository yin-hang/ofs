<?php
/**
 * Author: jiangzhibin
 * Date: 13-9-7
 * Time: 2013-09-07
 * Desc: Ô¤ÀÀÂß¼­
 */
require_once('init.php');
class preview extends BaseAction{
    protected $_strTpl = 'preview.php';
    protected $_strUserName = '';
    protected function _execute(){
        $this->_arrData['apply_data'] = Lib_Data::getUserInfoByName($this->_strUserName);
        $this->_arrData['user'] = $this->_arrUser;
    }
    protected function _check(){
        $this->_arrData['user'] = $this->_arrUser;
        if($this->_strUserName&&$this->_arrUser['is_login']&&$this->isAdmin()){
            return true;
        }
        $this->_strTpl = 'no_perm.php';
        return false;
    }
}

$action = new preview();
$action->execute();