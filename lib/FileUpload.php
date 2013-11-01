<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: �ļ��ϴ�
 */
class Lib_FileUpload {
    //ͼƬ�ϴ�
    public static function upload($objFile,$strSavePath,$strUsername,$strSavePrix = ''){
        if($objFile['name'] == ''){
            return false;
        }
        $strUsername = rawurlencode($strUsername);
        $strSavePath = $strSavePath . $strUsername . '/';
        if(!is_dir($strSavePath) && !mkdir($strSavePath)){
            return false;
        }
        $arrFile = explode('.',$objFile['name']);
        $strName = '';
        $strSuff = '';
        if(count($arrFile) >= 2){
            $strSuff = end($arrFile);
        }
        if($strSuff){
            $strName = $strSavePrix.md5($objFile['name']).'.'. $strSuff;
        }else{
            $strName = $strSavePrix.md5($objFile['name']);
        }
        $strPath = $strSavePath . $strName;
        $ret = move_uploaded_file($objFile['tmp_name'],$strPath);
        if($ret == false){
            return false;
        }
        //����ͼƬ��ַ
        $strUrl = 'http://' . $_SERVER['SERVER_NAME'] . '/teacher/files/' . $strUsername .'/'.$strName;
        return $strUrl;
    }
    //�ϴ�ͼƬ
    public static function uploadPhoto(){

    }
}