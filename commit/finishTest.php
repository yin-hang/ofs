<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: ����������
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
                'errmsg' => '�û�δ��¼'
            );

        }else{

        }
        echo json_encode($arrResult,true);
    }
}
$finish = new FinishText();
$finish->execute();