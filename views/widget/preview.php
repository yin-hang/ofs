<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-28
 * Time: 2013-10-28
 * Desc: 
 */
    $forumvalues = $apply_data['info'];
?>
<div>
    <div>个人信息预览</div>
    <div class="base_info">
        <div class="base_wrap wrap">
            <div class="til">个人基本资料</div>
            <div class="base_tab">
                <ul>
                    <li>
                <span>
                    <label>真实姓名:</label><span><?echo $forumvalues['name'];?></span>
                </span>
                <span>
                    <label>性别:</label><span>
                        <?
                            if($forumvalues['sex'] == 'man'){
                                echo '男';
                            }else{
                                echo '女';
                            }
                        ?>
                    </span>
                </span>
                <span>
                    <label>出生年份:</label><span><?echo $formvalues["birth"]?></span>
                </span>
                <span>
                    <label>身份证号码:</label><?echo $forumvalues['identity_code']?>
                </span>
                    </li>
                    <li>
                <span>
                    <label>婚否</label>
                    <!--<input type=text size=10  class="wd1" value="<?php echo $formvalues["marriage"]?>" name="marriage" />-->
                     <select name="marriage" class="marriage">
                         <option value="0" <?php if($forumvalues['marriage'] == 0){echo 'selected';}?>>是</option>
                         <option value="1" <?php if($forumvalues['marriage'] == 1){echo 'selected';}?>>否</option>
                     </select>
                </span>
                <span>
                    <label>民族:</label><?echo $formvalues["hometown"]?>
                </span>
                <span>
                    <label>籍贯:</label><input type=text size=10 class="wd1" value="<?php echo $formvalues["name"]?>" name="name" />
                </span>
                <span>
                    <label>教育程度</label><input type=text size=30 class="wd2" value="<?php echo $formvalues["edu"]?>" name="edu" />
                </span>
                    </li>
                    <li>
                        <span><label>现居住地</label><input type=text size=30 class="wd6" value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></span>
                    </li>
                    <li>
                        <span><label>手机</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["mobile"]?>" name="mobile" /></span>
                        <span><label>固定电话</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["tel"]?>" name="tel" /></span>
                        <span><label>email</label><input type=text size=10  class="wd4" value="<?php echo $formvalues["email"]?>" name="email" /></span>
                    </li>
                    <li>
                        <span><label>通讯地址</label><input type=text size=30 class="wd5" value="<?php echo $formvalues["addr"]?>" name="addr" /></span>
                        <span><label>邮编</label><input type=text size=10   class="wd2" value="<?php echo $formvalues["postcode"]?>" name="postcode" /></span>
                    </li>
                </ul>
            </div>
            <div class="til2">受教育经历</div>
            <table class="edu_tab">
                <tr><td>开始时间</td><td>结束时间</td><td>学校名称</td></tr>
                <tr>
                    <td class="sitem">
                        <input type=text size=10 class="time" value="<?php echo $formvalues["edubegintime1"]?>" name="edubegintime1" />
                    </td>
                    <td class="sitem">
                        <input type=text size=10 class="time" value="<?php echo $formvalues["eduendtime1"]?>" name="eduendtime1" />
                    </td>
                    <td class="bitem">
                        <input type=text size=20  value="<?php echo $formvalues["edu1"]?>" name="edu1" />(中学)<span class="red">*</span>
                    </td>
                </tr>
                <tr>
                    <td class="sitem">
                        <input type=text size=10 class="time" value="<?php echo $formvalues["edubegintime2"]?>" name="edubegintime2" />
                    </td>
                    <td class="sitem">
                        <input type=text size=10 class="time" value="<?php echo $formvalues["eduendtime2"]?>" name="eduendtime2" />
                    </td>
                    <td class="bitem">
                        <input type=text size=20  value="<?php echo $formvalues["edu2"]?>" name="edu2" />(大学)<span class="red">*</span>
                    </td>
                </tr>
                <?php for($i=3;$i<=4;$i++) { ?>
                    <tr>
                        <td class="sitem">
                            <input type=text size=10 class="time" value="<?php echo $formvalues["edubegintime$i"] ?>" name="edubegintime<?php echo $i?>" />
                        </td>
                        <td class="sitem">
                            <input type=text size=10 class="time" value="<?php echo $formvalues["eduendtime$i"] ?>" name="eduendtime<?php echo $i?>" />
                        </td>
                        <td class="bitem">
                            <input type=text size=20  value="<?php echo $formvalues["edu$i"] ?>" name="edu<?php echo $i?>" />
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="til2">工作经历</div>
            <table class="work_tab">
                <tr><td>开始时间</td><td>结束时间</td><td>单位名称</td><td>担任岗位</td></tr>
                <?php for($i=1;$i<=4;$i++) { ?>
                    <tr><td class="sitem"><input type=text size=10  class="time" value="<?php echo $formvalues["jobbegintime$i"] ?>" name="jobbegintime<?php echo $i?>" />
                        </td>
                        <td class="sitem">
                            <input type=text size=10 class="time" value="<?php echo $formvalues["jobendtime$i"] ?>" name="jobendtime<?php echo $i?>" />
                        </td>
                        <td class="bitem">
                            <input type=text size=20  value="<?php echo $formvalues["job$i"] ?>" name="job<?php echo $i?>" />
                        </td>
                        <td class="sitem">
                            <input type=text size=10  value="<?php echo $formvalues["positon$i"] ?>" name="positon<?php echo $i?>" />
                            <?php
                            if($i==1){
                                echo '<span class="red">*</span>';
                            }
                            ?>
                        </td>

                    </tr>
                <?php } ?>
            </table>
            <h4>家庭成员</h4>
            <table class="family_tab">
                <tr>
                    <td>家庭成员</td>
                    <td>姓名</td>
                    <td>工作单位</td>
                </tr>
                <?php
                for($i=1; $i<=4; $i++) {
                    $inputname = 'folkname';
                    echo "<tr><td class='sitem'><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td>";
                    $inputname = "folk";
                    print "<td class='sitem'><input type='text' size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td>";
                    $inputname = "folkjob";
                    print "<td class='bitem'><input type=text size=20 value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td></tr>";
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
                    <td>有否伤残/病历： </td>
                    <?php
                        if($formvalues['ill'] == 'no'){
                            echo '无';
                        }else{
                            echo '有.' . $formvalues['illdetail'];
                        }
                    ?>
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
    <div class="tech_info">

    </div>
</div>
