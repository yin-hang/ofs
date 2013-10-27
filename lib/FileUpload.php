<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 文件上传
 */
class Lib_FileUpload {
    //图片上传
    public static function upload($objFile,$strSavePath,$strUsername){
        $strUsername = rawurlencode($strUsername);
        $strSavePath = $strSavePath . $strUsername . '/';
        if(!is_dir($strSavePath) && !mkdir($strSavePath)){
            return false;
        }
        $strPath = $strSavePath . $objFile['name'];
        $ret = move_uploaded_file($objFile['tmp_name'],$strPath);
        if($ret == false){
            return false;
        }
        //返回图片地址
        $strUrl = 'http://' . $_SERVER['SERVER_NAME'] . '/teacher/file/' . $strUsername .'/'.$objFile['name'];
        return $strUrl;
    }
    //上传图片
    public static function uploadPhoto(){

    }
}