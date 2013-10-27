<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 完成心里测试
 */
require_once('/../user.php');
class FinishText{
    private $_user;
    public function execute(){
        $this->_user = Common_User::current();
        $arrResult = array(
            'errno' => 0,
            'errmsg' => ''
        );
        if($this->_user['is_login']){
            $arrResult = array(
                'errno' => 1,
                'errmsg' => '用户未登录'
            );

        }else{

        }
        echo json_encode($arrResult,true);
    }
}
$finish = new FinishText();
$finish->execute();