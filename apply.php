<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */

require_once('lib/Base.php');
class apply extends BaseAction{
    protected $_strTpl = 'apply.php';
    protected $_strPhotoPath = '';
    protected $_arrData = array();
    protected $_strApplyNum = array();
    protected $_arrApplyInfo = array();
    public function _execute(){
        $this->_arrData['apply_data'] = Lib_Data::getUserInfoByName($this->_arrUser['name']);

        return true;
    }
    public function _check(){
        if(!$this->_arrUser['is_login']){
            return false;
        }
        return true;
    }
}
$action = new apply();
$action->execute();
?>
