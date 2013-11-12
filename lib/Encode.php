<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-28
 * Desc: 
 */

class Lib_Encode {
    public  static function convert($mixData,$strToEncode='utf-8',$strFromEncode='utf-8'){
        $arrResult = array();
        if(is_array($mixData)){
            if (empty($mixData)) return array();
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
    public static function json2array($strJson,$strFromEncode='utf-8',$strToEncode='utf-8'){
	if($strFromEncode != 'utf-8'){
       	$strJson = self::convert($strJson,'utf-8',$strFromEncode);
	}
        $arrData = json_decode($strJson,true);
        if($strToEncode == 'gbk'){
            return self::convert($arrData,$strToEncode,'utf-8');
        }
        return $arrData;
    }
    public static function array2json($arrData,$strFromEncode='utf-8',$strToEncode='utf-8'){
        if($strFromEncode == 'gbk'){
            $arrData = self::convert($arrData,'utf-8',$strFromEncode);
        }
        $strData =  json_encode($arrData);
		if($strToEncode != 'utf-8'){
        	$strData = self::convert($strData,$strToEncode,'utf-8');
		}
        return $strData;
    }
} 
