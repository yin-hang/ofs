<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-28
 * Time: 2013-10-28
 * Desc: 
 */
    $formvalues = $apply_data['info'];
?>
<div class="preview">
    <div>个人信息预览</div>
    <div class="base_info">
        <div class="base_wrap wrap">
            <div class="til">个人基本资料</div>
            <div class="base_tab">
                <ul>
                    <li>
                <span>
                    <label>真实姓名:</label><span><?echo $formvalues['name'];?></span>
                </span><br/>
                <span>
                    <label>性别:</label><span>
                        <?
                            if($formvalues['sex'] == 'man'){
                                echo '男';
                            }else{
                                echo '女';
                            }
                        ?>
                    </span>
                </span><br/>
                <span>
                    <label>出生年份:</label><span><?echo $formvalues["birth"]?></span>
                </span><br/>
                <span>
                    <label>身份证号码:</label><?echo $formvalues['identity_code']?>
                </span>
                        <br/>
                    </li>
                    <li>
                <span>
                    <label>婚否:</label>
                    <?
                        if($formvalues['marriage'] == 1){
                            echo '是';
                        }else{
                            echo '否';
                        }
                    ?>
                </span><br/>
                <span>
                    <label>民族:</label><?echo $formvalues["nation"]?>
                </span><br/>
                <span>
                    <label>籍贯:</label><?echo $formvalues['hometown'];?>
                </span><br/>
                <span>
                    <label>教育程度:</label><?echo $formvalues['edi'];?>
                </span>
                    </li>
                    <li>
                        <span><label>现居住地:</label><?echo $formvalues['liveplace'];?>
                    </li>
                    <li>
                        <span><label>手机:</label><?echo $formvalues['mobile']?><br/>
                        <span><label>固定电话:</label><?echo $formvalues['tel'];?><br/>
                        <span><label>email:</label><?echo $formvalues['email'];?><br/>
                    </li>
                    <li>
                        <span><label>通讯地址:</label><?php echo $formvalues["addr"]?><br/>
                        <span><label>邮编:</label><?php echo $formvalues["postcode"]?>
                    </li>
                </ul>
            </div>
            <div class="til2">受教育经历</div>
            <table class="edu_tab table table-bordered">
                <tr><td>开始时间</td><td>结束时间</td><td>学校名称</td></tr>
                <tr>
                    <td class="sitem">
                        <?php echo $formvalues["edubegintime1"]?>
                    </td>
                    <td class="sitem">
                        <?php echo $formvalues["eduendtime1"]?>
                    </td>
                    <td class="bitem">
                        <?php echo $formvalues["edu1"]?>(中学)<span class="red">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="sitem">
                        <?php echo $formvalues["edubegintime2"]?>
                    </td>
                    <td class="sitem">
                        <?php echo $formvalues["eduendtime2"]?>
                    </td>
                    <td class="bitem">
                        <?php echo $formvalues["edu2"]?>(大学)<span class="red">*</span>
                    </td>
                </tr>
                <?php for($i=3;$i<=4;$i++) {
                        if(!$formvalues["edubegintime$i"]){
                            break;
                        }
                 ?>
                    <tr>
                        <td class="sitem">
                            <?php echo $formvalues["edubegintime$i"] ?>
                        </td>
                        <td class="sitem">
                            <?php echo $formvalues["eduendtime$i"] ?>
                        </td>
                        <td class="bitem">
                            <?php echo $formvalues["edu$i"] ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="til2">工作经历</div>
            <table class="work_tab table table-bordered">
                <tr><td>开始时间</td><td>结束时间</td><td>单位名称</td><td>担任岗位</td></tr>
                <?php
                    $start = 1;
                    if($formvalues['jobbegintime2']){
                        $start = 2;
                    }
                    if($formvalues['jobbegintime3']){
                        $start = 3;
                    }
                    if($formvalues['jobbegintime4']){
                        $start = 4;
                    }
                for($i=1;$i<=$start;$i++) { ?>
                    <tr><td class="sitem">
                            <?php echo $formvalues["jobbegintime$i"] ?>
                        </td>
                        <td class="sitem">
                            <?php echo $formvalues["jobendtime$i"] ?>
                        </td>
                        <td class="bitem">
                            <?php echo $formvalues["job$i"] ?>
                        </td>
                        <td class="sitem">
                            <?php echo $formvalues["positon$i"] ?>
                            <?php
                            if($i==1){
                                echo '<span class="red">*</span>';
                            }
                            ?>
                        </td>

                    </tr>
                <?php } ?>
            </table>
            <div class="til2">家庭成员</div>
            <table class="family_tab table table-bordered">
                <tr>
                    <td>家庭成员</td>
                    <td>姓名</td>
                    <td>工作单位</td>
                </tr>
                <?php
                $start = 1;
                if($formvalues['folkname2']){
                    $start = 2;
                }
                if($formvalues['folkname3']){
                    $start = 3;
                }
                if($formvalues['flokname4']){
                    $start = 4;
                }
                for($i=1; $i<=$start; $i++) {
                    $inputname = 'folkname';
                    echo "<tr><td class='sitem'>".$formvalues["$inputname$i"]."</td>";
                    $inputname = "folk";
                    print "<td class='sitem'>".$formvalues["$inputname$i"]."</td>";
                    $inputname = "folkjob";
                    print "<td class='bitem'>".$formvalues["$inputname$i"]."</td></tr>";
                }
                ?>
            </table>
            <table class="sp_tab">
                <tr>
                    <td>个人特别技能及资历：</td>
                    <td>
                        <?php echo $formvalues["ability"]?>
                    </td>
                </tr>
                <tr>
                    <td>有否伤残/病历：
                        <?php
                        if($formvalues['ill'] == 'no'){
                            echo '无';
                        }else{
                            echo '有.' . $formvalues['illdetail'];
                        }
                        ?>
                    </td>

                </tr>
                <tr>
                    <td>有否支教经验： </td>
                    <td>
                        <?php
                            if($formvalues['exp'] == 'no'){
                                echo '无';
                            }else{
                                echo '有.' . $formvalues['expdetail'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        照片（半身生活照为佳）：
                    </td>
                    <td>
                        <img src="<?php echo $formvalues['photo_path']?>"/>
                    </td>
                </tr>
            </table>
            <div>
                <h4>紧急联络人信息</h4>
                <label>姓名：</label><?php echo $formvalues["EmergencyContactName"]?><br/>
                <label>联系方式：</label><?php echo $formvalues["EmergencyContact"]?><br/>
                <label>工作单位:</label><?php echo $formvalues["EmergencyContactWork"]?>
            </div>
        </div>
    </div>
    <div class="teach_wrap wrap">
        <div class="til">支教准备工作</div>
        <p>1. 您的身份:
        <?
            switch($formvalues['work']){
                case 'student':
                    echo '学生';
                    break;
                case 'free':
                    echo '赋闲在家';
                    break;
                case 'work':
                    echo '在职.打算';
                    switch($formvalues['onwork']){
                        case 'quit':
                            echo '离职去支教';
                            break;
                        case 'leave':
                            echo '向单位请假';
                            break;
                        case 'other':
                            echo '以其他方式保留职位' . $formvalues['workdetail'] . '再去支教';
                            break;
                    }
                    break;
            }
        ?>
        <p>2. 支教活动没有任何经济报酬，一次支教活动根据时间长短和地区差异有所差别，但基本需要自己承担在5000元以上，请确认您对此次支教活动预备的资金。<br>
            <?
                switch($formvalues['money']){
                    case 'grade_1':
                        echo '小于5000';
                        break;
                    case 'grade_2':
                        echo '5000~10000';
                        break;
                    case 'grade_3':
                        echo '大于1万';
                        break;
                }

            ?>
        </p>
        <p>
            3. 您何时开始有支教的想法？请简述您对支教的看法。(<span class="red">*</span>)
            <br>
            <?php echo $formvalues["think"]?>
        </p>
        <p>
            4. 您是否清楚支教所存在的风险，应该如何应对这些风险。(<span class="red">*</span>)
            <br><?php echo $formvalues["risk"]?>
        </p>
        <p>
            5. 对于参与支教工作，您对自己有何期望或希望贡献什么？(<span class="red">*</span>)<br>
            <?php echo $formvalues["hope"]?>
        </p>
        <p>
            6. 您是否就计划去支教的想法与您周边的亲朋好友进行过沟通？他们对您计划支教的想法所持的态度如何?<br>
            <?
                switch($formvalues['support']){
                    case 'support':
                        echo '非常支持';
                        break;
                    case 'general':
                        echo '一般';
                        break;
                    case 'except':
                        echo '反对';
                        break;
                    case 'not_talk':
                        echo '没有沟通';
                        break;
                }
            ?>
        </p>
        <p>
            7. 请告知您的直系长辈亲属的联系方式，以便我们与您的家人联系，获取他们对您计划支教的支持程度。
            <br>
        <ul>
            <li>姓名:<?php echo $formvalues["lineal_name"]?></li>
            <li>关系:<?php echo $formvalues["lineal_relation"]?></li>
            <li>联系方式:<?php echo $formvalues["lineal_num"]?></li>
        </ul>
        </p>
        <p>
            8. 预计支教期限:
            <?
                switch($formvalues['time']){
                    case 'term':
                        echo '一学期';
                        break;
                    case 'year':
                        echo '一年';
                        break;
                    case 'other':
                        echo $formvalues['other_time'];
                        break;
                }
            ?>
        </p>
        <p>
            9. 愿意开始支教的日期：2013年秋季
        </p>
        <p>
            10. 从何处得悉本服务的消息:
            <?
                switch($formvalues['msg_from']){
                    case 'friend':
                        echo '朋友';
                        break;
                    case 'website':
                        echo 'OFS网站';
                        break;
                    case 'weibo':
                        echo '微博';
                        break;
                    case 'weixin':
                        echo '微信';
                        break;
                    case 'baidu':
                        echo '百度';
                        break;
                    case 'douban':
                        echo '豆瓣';
                        break;
                    case 'other':
                        echo '其他.'.$formvalues['msg_from_other'];
                        break;
                }
            ?>
        </p>
        <p>
            12. 其他意见：<br>
            <?php echo $formvalues['other'];?>
        </p>
    </div>
</div>
