<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-31
 * Desc: 
 */
Lib_View::loadWidget('top.php');
$arrStatList = array(
    Lib_Define::STAT_PSYCHOLOGY_TEST_EDN => '等待初审',
    Lib_Define::STAT_LESSON_UPLOAD_FINISH => '等待复审',
    Lib_Define::STAT_FIRST_CHECK_SUC => '等待教案审核',
    Lib_Define::STAT_SUBMIT_IDENTITY_END => '等待身份审核'
);
$arrAllStat = array(
    Lib_Define::STAT_APPLYING =>'申请中,还未提交申请',//申请中,还未提交申请
    Lib_Define::STAT_APPLYED => '申请完成,等待心理测试',//申请完成,等待心理测试
    Lib_Define::STAT_PSYCHOLOGY_TESTING =>'心理测试中',//心理测试中，等待心理测试结束
    Lib_Define::STAT_PSYCHOLOGY_TEST_EDN =>'等待初审',//心理测试结束,等待初审
    Lib_Define::STAT_FIRST_CHECK_SUC =>'等待复审',//初审完成,等待复审
    Lib_Define::STAT_FIRST_CHECK_FAIL =>'初审失败',//初审失败，请下次再重新申请
    Lib_Define::STAT_SECOND_CHECK_SUC =>'复审完成,等待提交教案',//复审完成,等待提交教案
    Lib_Define::STAT_SECOND_CHECK_FAIL =>'申请失败',//复审失败,请下次再重新申请
    Lib_Define::STAT_LESSON_UPLOAD_FINISH =>'等待审核教案',//教案提交完成，等待审核
    Lib_Define::STAT_LESSON_CHECK_NOT_PASS =>'教案审核未通过,需修改',//教案审核未通过，需要修改
    Lib_Define::STAT_LESSON_CHECK_PASS =>'需要提交身份信息',//教案审核通过,需要提交身份信息
    Lib_Define::STAT_SUBMIT_IDENTITY_END =>'等待审核身份信息',//身份信息提交完成,等待审核
    Lib_Define::STAT_IDENTITY_CHECK_SUC =>'等待培训',//身份信息提交成功,等待培训
    Lib_Define::STAT_IDENTITY_CHECK_FAIL =>'等待重新上传身份信息',//身份信息提交失败,需要重新上传身份信息
    Lib_Define::STAT_ALL_FINISH =>'所有流程已经完成'//所有流程都已经完成
);
?>
<div>
  <div>
      <span>选择查询类别</span>
      <select name="audit_user" id="j_select_audit_user">
          <?
            echo '<option value="all">所有申请者</option>';
            foreach($arrStatList as $key=>$value){
                if(isset($_GET['stat'])&&isset($arrStatList[$_GET['stat']])&&$_GET['stat'] == $key){
                    echo '<option value="' . $key.'" selected="true">'.$value.'</option>';
                }else{
                    echo '<option value="' . $key . '">' .$value .'</option>';
                }
            }
          ?>
      </select>
      <button class="btn btn-primary" id="query_stat_btn">查询</button>

  </div>
  <div>
    <?if(isset($apply_list) && !empty($apply_list)){?>
        <table class="table">
            <thead>
                <tr>
                    <th>真实用户名</th>
                    <th>编号</th>
                    <th>论坛账号</th>
                    <th>当前状态</th>
                    <th>查看提交信息</th>
                    <th>操作</th>
                    <th>备注</th>
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
                        <td><a href="/teacher/preview.php?username=<?echo urlencode($value['user']);?>">点击查看</a></td>
                        <td>
                            <?
                                if(isset($arrStatList[$value['stat']])){
                                    echo '<input type="button" class="btn j_audit_pass_btn" value="通过" stat="' . $value['stat'] .'"/>';
                                    echo '<input type="button" class="btn j_audit_reject_btn" value="不通过" stat="' . $value['stat'] .'"/>';
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
        <span>没有等待审核的用户</span>
    <?}?>
  </div>
</div>

<?
Lib_View::loadWidget('bottom.php');
?>