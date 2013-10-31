<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-31
 * Desc: 
 */
Lib_View::loadWidget('top.php');
$arrStatList = array(
    Lib_Define::STAT_PSYCHOLOGY_TEST_EDN => '�ȴ�����',
    Lib_Define::STAT_LESSON_UPLOAD_FINISH => '�ȴ�����',
    Lib_Define::STAT_FIRST_CHECK_SUC => '�ȴ��̰����',
    Lib_Define::STAT_SUBMIT_IDENTITY_END => '�ȴ�������'
);
$arrAllStat = array(
    Lib_Define::STAT_APPLYING =>'������,��δ�ύ����',//������,��δ�ύ����
    Lib_Define::STAT_APPLYED => '�������,�ȴ��������',//�������,�ȴ��������
    Lib_Define::STAT_PSYCHOLOGY_TESTING =>'���������',//��������У��ȴ�������Խ���
    Lib_Define::STAT_PSYCHOLOGY_TEST_EDN =>'�ȴ�����',//������Խ���,�ȴ�����
    Lib_Define::STAT_FIRST_CHECK_SUC =>'�ȴ�����',//�������,�ȴ�����
    Lib_Define::STAT_FIRST_CHECK_FAIL =>'����ʧ��',//����ʧ�ܣ����´�����������
    Lib_Define::STAT_SECOND_CHECK_SUC =>'�������,�ȴ��ύ�̰�',//�������,�ȴ��ύ�̰�
    Lib_Define::STAT_SECOND_CHECK_FAIL =>'����ʧ��',//����ʧ��,���´�����������
    Lib_Define::STAT_LESSON_UPLOAD_FINISH =>'�ȴ���˽̰�',//�̰��ύ��ɣ��ȴ����
    Lib_Define::STAT_LESSON_CHECK_NOT_PASS =>'�̰����δͨ��,���޸�',//�̰����δͨ������Ҫ�޸�
    Lib_Define::STAT_LESSON_CHECK_PASS =>'��Ҫ�ύ�����Ϣ',//�̰����ͨ��,��Ҫ�ύ�����Ϣ
    Lib_Define::STAT_SUBMIT_IDENTITY_END =>'�ȴ���������Ϣ',//�����Ϣ�ύ���,�ȴ����
    Lib_Define::STAT_IDENTITY_CHECK_SUC =>'�ȴ���ѵ',//�����Ϣ�ύ�ɹ�,�ȴ���ѵ
    Lib_Define::STAT_IDENTITY_CHECK_FAIL =>'�ȴ������ϴ������Ϣ',//�����Ϣ�ύʧ��,��Ҫ�����ϴ������Ϣ
    Lib_Define::STAT_ALL_FINISH =>'���������Ѿ����'//�������̶��Ѿ����
);
?>
<div>
  <div>
      <span>ѡ���ѯ���</span>
      <select name="audit_user" id="j_select_audit_user">
          <?
            echo '<option value="all">����������</option>';
            foreach($arrStatList as $key=>$value){
                if(isset($_GET['stat'])&&isset($arrStatList[$_GET['stat']])&&$_GET['stat'] == $key){
                    echo '<option value="' . $key.'" selected="true">'.$value.'</option>';
                }else{
                    echo '<option value="' . $key . '">' .$value .'</option>';
                }
            }
          ?>
      </select>
      <button class="btn btn-primary" id="query_stat_btn">��ѯ</button>

  </div>
  <div>
    <?if(isset($apply_list) && !empty($apply_list)){?>
        <table class="table">
            <thead>
                <tr>
                    <th>��ʵ�û���</th>
                    <th>���</th>
                    <th>��̳�˺�</th>
                    <th>��ǰ״̬</th>
                    <th>�鿴�ύ��Ϣ</th>
                    <th>����</th>
                    <th>��ע</th>
                </tr>
            </thead>
            <tbody>
                <?foreach($apply_list as $key=>$value){?>
                    <tr data-id="<?echo $value['id']?>" data-stat="<?echo $value['stat'];?>">
                        <td><?echo $value['info']['name']?></td>
                        <td><?echo $value['apply_num']?></td>
                        <td><?echo $value['user'];?></td>
                        <td>
                            <?
                                echo $arrAllStat[$value['stat']];
                            ?>
                        </td>
                        <td><a href="/teacher/preview.php?username=<?echo urlencode($value['user']);?>">����鿴</a></td>
                        <td>
                            <?
                                if(isset($arrStatList[$value['stat']])){
                                    echo '<input type="button" class="btn j_audit_pass_btn" value="ͨ��" stat="' . $value['stat'] .'"/>';
                                    echo '<input type="button" class="btn j_audit_reject_btn" value="��ͨ��" stat="' . $value['stat'] .'"/>';
                                }
                            ?>
                        </td>
                        <td>
                            <?if(isset($arrStatList[$value['stat']])){?>
                            <textarea class="j_audit_remark"></textarea>
                            <?}?>
                        </td>
                    </tr>
                <?}?>
            </tbody>
        </table>
    <?}else{?>
        <span>û�еȴ���˵��û�</span>
    <?}?>
  </div>
</div>

<?
Lib_View::loadWidget('bottom.php');
?>