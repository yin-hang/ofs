<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: ����������Ϣ
 */
require_once('../lib/Base.php');
class apply extends BaseAction{
    protected $_strTpl = '../views/page/stat.php';
    protected $_strPhotoPath = '';
    protected $_arrData = array();
    protected $_strApplyNum = array();
    protected $_arrApplyInfo = array();
    private $_bolIsUpdate = 1;//�Ƿ��Ǹ�����Ϣ
    public function _execute(){
        $this->_processPic();//����ͼƬ
        foreach($_POST as $key => $value){
            $arrList[$key] = $value;
        }
        $arrList['photo_path'] = $this->_strPhotoPath;
        $this->_buildNewApplyNum();
        $this->_insertToDB();//�������ݿ�
        $this->_display();
    }
    private function _display(){
        if($this->_intErrno == 0){//��ʾ�ύ�ɹ�
            $this->_strTpl = '../apply_suc.php';
        }else{//��ʾ�ύʧ��
            $this->_strTpl = '../applyt.php';
        }
    }
    public function _check(){
        if(!$this->_arrUser['is_login']){
            return false;
        }
        return true;
    }
    private  function _buildNewApplyNum(){
        //$strTime = $_POST['star_time'];//����ʱ��
        $strTime = '13A';//��ʱд���������ٸ�
        $intNum = 0;
        $arrResult = DB::query('select max(id) from apply');
        if($arrResult == NULL){
            $strNum = 0;//��0��ʼ
        }else{
            $strNum = $arrResult[0]['id'];//��ȡ����idֵ
        }
        $strNum = sprintf("%04d",$strNum);
        $this->_strApplyNum = $strTime . $strNum;
    }
    //����ͼƬ
    private  function _processPic(){
        $strPhotoPath = $_POST['photo_path'];
        if($strPhotoPath){//
            $this->_strPhotoPath = $strPhotoPath;
            $strPath = Lib_FileUpload::upload($_POST['photo'],Lib_Define::PHOTO_PATH,$this->_arrUser['name']);
            if($strPath == false){
                return true;
            }
            $this->_strPhotoPath = $strPath;
            return true;
        }else{
            $strPath = Lib_FileUpload::upload($_POST['photo'],Lib_Define::PHOTO_PATH,$this->_arrUser['name']);
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
            'info' => $this->_arrApplyInfo,
            'file' => $this->_strPhotoPath,
            'stat' => Lib_Define::STAT_APPLYED,
            'moditime' => $intTime,
        );
        if($result == NULL||$result == false){
            $arrInsert['create_time'] = $intTime;
            $arrInsert['apply_num'] = $this->_strApplyNum;
            DB::insert('apply',$arrInsert);
            $this->_bolIsUpdate = true;
        }else{//����״̬�в������޸ĸ�������
            if($result[0]['stat'] >= Lib_Define::STAT_PSYCHOLOGY_TEST_EDN){//�Ѿ��������׶Σ��������޸���Ϣ
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