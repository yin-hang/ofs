<?php
require_once('init.php');
class index extends BaseAction{
    protected $_strTpl = 'index.php';
    protected function _execute(){
        if($this->_arrUser['is_login']){
            $this->_arrData['apply_data'] = Lib_Data::getUserInfoByName($this->_arrUser['name']);
        }
    }
    protected function _check(){
        $this->_arrData['user'] = $this->_arrUser;
        return true;
    }
}

$action = new index();
$action->execute();
