<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */

class Lib_View {
    private static $_arrData = array();
    protected static $_strTpl = '';
    public static function loadPage($strTplName,$arrData = array()){
        $strPath =  dirname(__FILE__) . '/../views/page/' . $strTplName;
        $arrResult = $arrData;
        if(!empty(self::$_arrData)){
            $arrResult = array_merge(self::$_arrData,$arrResult);
        }
        extract($arrResult,EXTR_OVERWRITE);
        if(is_file($strPath)){
            include($strPath);
        }
    }
    public static function setTpl($strTpl){
        self::$_strTpl = $strTpl;
    }
    public static function assign($mixName,$mixValue = ''){
        if(is_array($mixName)){
            if(empty($mixName)) return ;
            foreach($mixName as $key => $value){
                self::$_arrData[$key] = $value;
            }
        }elseif(is_string($mixName)){
            self::$_arrData[$mixName] = $mixValue;
        }
    }
    public static function loadWidget($strTplName){
        $strPath = dirname(__FILE__). '/../views/widget/' . $strTplName;
        if(is_file($strPath)){
            include($strPath);
        }
    }
}