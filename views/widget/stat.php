<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-29
 * Desc: 
 */
$apply_stat = false;
if($user['is_login']){
    $apply_stat = Lib_Data::getApplyStatByUsername($user['name']);
}
?>
<div class="main_stat">
    <ul>
        <li>您目前的支教申请信息</li>
    <?php if(!$user['is_login']){?>
        <li>需要先<a href="http://www.ourfreesky.org/bbs/login.php">登录</a>之后才能进行申请操作</li>
    <?php }else{
    if($apply_stat === false){
        echo '<li>你尚未进行支教申请，<a href="/teacher/apply.php">点击进行申请</a></li>';
    }else{
	if($apply_stat >= Lib_Define::STAT_PSYCHOLOGY_TEST_EDN){
		echo '<li><a href="/teacher/preview.php?username='.$user['name'].'" target="_blank">查看提交的信息</a></li>';
	}
        echo '<li><div>申请编号:' . $apply_data['apply_num']. '</div></li>';
        echo '<li><div>提交时间:'.date('Y-m-d',$apply_data['moditime']).'</div></li>';
        switch($apply_stat){
            case Lib_Define::STAT_APPLYING;//申请中,还未提交申请
                echo '当前状态:申请中,还未提交申请,<a href="/teacher/apply.php">点击</a>完善信息进行申请';
                break;
            case Lib_Define::STAT_APPLYED;//申请完成,等待心理测试
                echo '当前状态:需要进行心理测试,<a href="http://www.cnpsy.net/16pf/index3.asp" id="j_star_test" target="_blank">点击进行</a>';
                break;
            case Lib_Define::STAT_PSYCHOLOGY_TESTING;//心理测试中，等待心理测试结束
                echo '当前状态:等待心理测试完成,若已经完成,请<a href="/teacher/index.php" id="j_finish_test">点击链接</a>进入下一步审核<br/>';
                echo '如果没完成,请点击<a href="http://www.cnpsy.net/16pf/index3.asp" id="j_star_test" target="_blank">心理测试地址</a>进行测试';
                break;
            case Lib_Define::STAT_PSYCHOLOGY_TEST_EDN;//心理测试结束,等待初审
                echo '<li>当前状态:提交完成,初审中,等待初审结果</li>';
                break;
            case Lib_Define::STAT_FIRST_CHECK_SUC;//初审完成,等待复审
                echo '<li>当前状态:初审完成,复审中,等待复审结果</li>';
                break;
            case Lib_Define::STAT_FIRST_CHECK_FAIL://初审失败，请下次再重新申请
                echo '<li>当前状态:审核失败,请下个学期重新申请</li>';
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_SECOND_CHECK_SUC;//复审完成,等待提交教案
                Lib_View::loadWidget('uploadLessonPlan.php');
                break;
            case Lib_Define::STAT_SECOND_CHECK_FAIL;//复审失败,请下次再重新申请
                echo '<li>当前状态:审核失败,请下个学期重新在申请</li>';
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_LESSON_UPLOAD_FINISH;//教案提交完成，等待审核
                echo '<li>当前状态:教案提交完成,等待审核</li>';
                break;
            case Lib_Define::STAT_LESSON_CHECK_NOT_PASS;//教案审核未通过，需要修改
                Lib_View::loadWidget('uploadLessonPlan.php');
                Lib_View::loadWidget('audit_remark.php');
                break;
            case Lib_Define::STAT_LESSON_CHECK_PASS;//教案审核通过,需要提交身份信息
                echo '<li>当前状态:目前所有审核已经完毕,等待培训</li>';
                break;
        }
    }
    }
    ?>
    </ul>
</div>
