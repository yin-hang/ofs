<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-28
 * Desc: 
 */

class Lib_Encode {
    public  static function convert($mixData,$strToEncode='gbk',$strFromEncode='utf-8'){
        $arrResult = array();
        if(is_array($mixData)){
            if (empty($mixVar)) return array();
            foreach($mixData as $key => $value){
                $key = self::convert($key,$strToEncode,$strFromEncode);
                $arrResult[$key] = self::convert($value,$strToEncode,$strFromEncode);
            }
            return $arrResult;
        }elseif(is_string($mixData)){
            return mb_convert_encoding($mixData,$strToEncode,$strFromEncode);
        }
        return $mixData;
    }
    public static function json2array($strJson,$strToEncode='gbk'){
        $arrData = json_decode($strJson,true);
        if($strToEncode = 'gbk'){
            return self::convert($arrData,$strToEncode,'utf-8');
        }
        return $arrData;
    }
    public static function array2json($arrData,$strFromEncode='gbk'){
        if($strFromEncode = 'gbk'){
            $arrData = self::convert($arrData,'utf-8',$strFromEncode);
        }
        return json_encode($arrData);
    }
} 