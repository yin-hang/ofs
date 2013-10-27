<?php
require('views/widget/top.php');
$apply_stat = false;
if($_user['is_login']){
    $apply_stat = Lib_Data::getApplyStatByUsername($_user['name']);
}
?>
    <?php if(!$_user['is_login']){?>
        你需要先<a href="http://www.ourfreesky.org/bbs/login.php">登录</a>之后才能进行申请操作
    <?php }else{
        if($apply_stat === false){
            echo '你尚未进行支教申请，<a href="/teacher/apply.php">点击进行申请</a>';
        }else{
            switch($apply_stat){
                case Lib_Define::STAT_APPLYING;//申请中,还未提交申请
                    break;
                case Lib_Define::STAT_APPLYED;//申请完成,等待心理测试
                    break;
                case Lib_Define::STAT_PSYCHOLOGY_TESTING;//心理测试中，等待心理测试结束
                    break;
                case Lib_Define::STAT_PSYCHOLOGY_TEST_EDN;//心理测试结束,等待初审
                    break;
                case Lib_Define::STAT_FIRST_CHECK_SUC;//初审完成,等待复审
                    break;
                case Lib_Define::STAT_FIST_CHECK_FAIL;//初审失败，请下次再重新申请
                    break;
                case Lib_Define::STAT_SECOND_CHECK_SUC;//复审完成,等待提交教案
                    break;
                case Lib_Define::STAT_SECOND_CHECK_FAIL;//复审失败,请下次再重新申请
                    break;
                case Lib_Define::STAT_LESSON_PLAY;//教案提交完成，等待审核
                    break;
                case Lib_Define::STAT_LESSON_CHECK_NOT_PASS;//教案审核未通过，需要修改
                    break;
                case Lib_Define::STAT_LESSON_CHECK_PASS;//教案审核通过,需要提交身份信息
                    break;
                case Lib_Define::STAT_SUBMIT_IDENTITY_END;//身份信息提交完成,等待审核
                    break;
                case Lib_Define::STAT_IDENTITY_CHECK_SUC;//身份信息提交成功,等待培训
                    break;
                case Lib_Define::STAT_IDENTITY_CHECK_FAIL;//身份信息提交失败,需要重新上传身份信息
                    break;
            }
        }
        ?>

    <div class="tech_pro"></div>
    <div>申请状态</div>
    <a href="/teacher/apply.php">申请支教</a>
    <div>
        <ul>
            <li>申请编号</li>
            <li>提交时间</li>
            <li>最后修改时间</li>
            <li>当前状态
            </li>
        </ul>
    </div>
    <a href="">你当前的状态</a>
    <?php
    }
        include('views/widget/bottom.php')
    ?>
