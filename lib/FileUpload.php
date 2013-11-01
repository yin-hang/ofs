<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 文件上传
 */
class Lib_FileUpload {
    //图片上传
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
        //返回图片地址
        $strUrl = 'http://' . $_SERVER['SERVER_NAME'] . '/teacher/files/' . $strUsername .'/'.$strName;
        return $strUrl;
    }
    //上传图片
    public static function uploadPhoto(){

    }
}