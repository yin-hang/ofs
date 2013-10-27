<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 保存申请信息
 */
require_once('../lib/Base.php');
class apply extends BaseAction{
    protected $_strTpl = '../views/page/stat.php';
    protected $_strPhotoPath = '';
    protected $_arrData = array();
    protected $_strApplyNum = array();
    protected $_arrApplyInfo = array();
    private $_bolIsUpdate = true;//是否是更新信息
    private $_bolIsSaveInfo = true;//是否是保存信息
    public function _execute(){
        $this->_processPic();//处理图片
        foreach($_POST as $key => $value){
            $arrList[$key] = $value;
        }
        $arrList['photo_path'] = $this->_strPhotoPath;
        $this->_arrApplyInfo = $arrList;
        $this->_buildNewApplyNum();
        $this->_insertToDB();//插入数据库
        $this->_display();
    }
    private function _display(){
        if($this->_intErrno == 0){//表示提交成功
            $this->_strTpl = 'apply_suc.php';
        }else{//表示提交失败
            $this->_strTpl = 'apply.php';
        }
        var_dump($this->_strTpl);
    }
    public function _check(){
        if(!$this->_arrUser['is_login']){
            return false;
        }
        if(isset($_POST['save'])){
            $this->_bolIsSaveInfo = true;
        }else{
            $this->_bolIsSaveInfo = false;
        }
        return true;
    }
    private  function _buildNewApplyNum(){
        //$strTime = $_POST['star_time'];//申请时间
        $strTime = '13A';//暂时写死，后面再改
        $intNum = 1;
        $arrResult = DB::query('select max(id) as max_num from apply');
        if($arrResult == NULL){
            $strNum = 1;//从0开始
        }else{
            $strNum = $arrResult[0]['max_num'] + 1;//获取最大的id值
        }
        $strNum = sprintf("%04d",$strNum);
        $this->_strApplyNum = $strTime . $strNum;
    }
    //处理图片
    private  function _processPic(){
        $strPhotoPath = $_POST['photo_path'];
        if($strPhotoPath){//
            $this->_strPhotoPath = $strPhotoPath;
            $strPath = Lib_FileUpload::upload($_FILES['photo'],Lib_Define::PHOTO_PATH,$this->_arrUser['name']);
            if($strPath == false){
                return true;
            }
            $this->_strPhotoPath = $strPath;
            return true;
        }else{
            $strPath = Lib_FileUpload::upload($_FILES['photo'],Lib_Define::PHOTO_PATH,$this->_arrUser['name']);
            if($strPath == false){
                $this->_error(Lib_Errno::UPLODA_PIC_FAIL,Lib_Error::UPLODA_PIC_FAIL);
                return false;
            }
            $this->_strPhotoPath = $strPath;
            return true;
        }
    }
    public function _insertToDB(){
        $result = DB::queryFirstRow('select * from apply where user=%s order by create_time desc',$this->_arrUser['name']);
        $intTime = Time();
        $arrInsert = array(
            'user' => $this->_arrUser['name'],
            'info' => Lib_Encode::array2json($this->_arrApplyInfo),
            'file' => $this->_strPhotoPath,
            'stat' => Lib_Define::STAT_APPLYED,
            'moditime' => $intTime,
        );
        if($result == NULL||$result == false){
            $arrInsert['create_time'] = $intTime;
            $arrInsert['apply_num'] = $this->_strApplyNum;
            DB::insert('apply',$arrInsert);
            $this->_bolIsUpdate = true;
        }else{//初审状态中不能再修改个人资料
            if($result[0]['stat'] >= Lib_Define::STAT_PSYCHOLOGY_TEST_EDN){//已经进入初审阶段，不能再修改信息
                $this->_error(Lib_Errno::CAN_NOT_UPDATE_IN_AUDIT,Lib_Error::CAN_NOT_UPDATE_IN_AUDIT);
            }else{
                DB::update('apply',$arrInsert,'id=%d',$arrInsert[0]['id']);
            }
            $this->_bolIsUpdate = false;
        }
    }
}
$action = new apply();
$action->execute();