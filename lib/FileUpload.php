<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: �ļ��ϴ�
 */
class Lib_FileUpload {
    //ͼƬ�ϴ�
    public static function upload($objFile,$strSavePath,$strUsername){
        $strUsername = rawurlencode($strUsername);
        $strSavePath = $strSavePath . $strUsername . '/';
        if(!is_dir($strSavePath) && !mkdir($strSavePath)){
            echo 'mkdir fail';
            return false;
        }
        $strPath = $strSavePath . $objFile['name'];
        $ret = move_uploaded_file($objFile['tmp_name'],$strPath);
        if($ret == false){
            return false;
        }
        //����ͼƬ��ַ
        $strUrl = 'http://' . $_SERVER['SERVER_NAME'] . '/teacher/file/' . $strUsername .'/'.$objFile['name'];
        return $strUrl;
    }
    //�ϴ�ͼƬ
    public static function uploadPhoto(){

    }
}