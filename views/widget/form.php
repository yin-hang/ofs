<?php
$formvalues = $apply_data['info'];
?>
<div class="read">
    <input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?>> 我已阅读过<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">《申请人须知》</a>，并对其中提到的所有条款均已知悉</p>
</div>
<div class="base_wrap">
    <div class="til2">个人基本资料</div>
    <div class="base_tab region">
        <ul>
            <li>
                <span>
                    <label>真实姓名<span class="red">*</span></label><input type=text size=10 class="wd2" value="<?php echo $formvalues["name"]?>" name="name" />
                </span>
                <span>
                    <label>性别</label><span class="red">*</span>
                    <select name="sex" class="sex">
                        <option value="man" <?php if($formvalues['sex'] == 'man'){echo 'selected';}?>>男</option>
                        <option value="women" <?php if($formvalues['sex'] == 'women'){echo 'selected';}?>>女</option>
                    </select>
                </span>
                <span>
                    <label>出生年份<span class="red">*</span></label><input type=text size=10  class="wd2" value="<?php echo $formvalues["birth"]?>" name="birth" />
                </span>
                <span>
                    <label>身份证号码<span class="red">*</span></label><input type=text size=30 name="identity_code" value="<?php echo $formvalues['identity_code']?>"/>
                </span>
            </li>
            <li>
                <span>
                    <label>婚否<span class="red">*</span></label>
                    <!--<input type=text size=10  class="wd1" value="<?php echo $formvalues["marriage"]?>" name="marriage" />-->
                     <select name="marriage" class="marriage">
                         <option value="0" <?php if($formvalues['marriage'] == 0){echo 'selected';}?>>是</option>
                         <option value="1" <?php if($formvalues['marriage'] == 1){echo 'selected';}?>>否</option>
                     </select>
                </span>
                <span>
                    <label>民族<span class="red">*</span></label><input type=text size=10 class="wd1" value="<?php echo $formvalues["nation"]?>" name="nation" />
                </span>
                <span>
                    <label>籍贯<span class="red">*</span></label><input type=text size=10 class="wd1" value="<?php echo $formvalues["hometown"]?>" name="hometown" />
                </span>
                <span>
                    <label>教育程度<span class="red">*</span></label><input type=text size=30 class="wd2" value="<?php echo $formvalues["edu"]?>" name="edu" />
                </span>
            </li>
            <li>
                <span><label>现居住地<span class="red">*</span></label><input type=text size=30 class="wd6" value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></span>
            </li>
            <li>
                <span><label>手机<span class="red">*</span></label><input type=text size=10 class="wd4" value="<?php echo $formvalues["mobile"]?>" name="mobile" /></span>
                <span><label>固定电话</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["tel"]?>" name="tel" /></span>
                <span><label>email<span class="red">*</span></label><input type=text size=30 value="<?php echo $formvalues["email"]?>" name="email" /></span>
            </li>
            <li>
                <span><label>通讯地址<span class="red">*</span></label><input type=text size=30 class="wd5" value="<?php echo $formvalues["addr"]?>" name="addr" /></span>
                <span><label>邮编<span class="red">*</span></label><input type=text size=10   class="wd2" value="<?php echo $formvalues["postcode"]?>" name="postcode" /></span>
            </li>
        </ul>
    </div>
    <div class="til2">受教育经历</div>
    <div class="region">
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
    </div>
    <div class="til2">工作经历</div>
    <div class="region">
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
    </div>
    <div class="til2">家庭成员</div>
    <div class="region">
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
                print "<td class='bitem'><input type=text size=20 value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" />";
                if($i==1){
                    echo '<span class="red">*</span>';
                }
                echo "</td></tr>";
            }
            ?>
        </table>
    </div>
    <div class="til2">其他信息</div>
    <div class="region">
    <table class="sp_tab">
        <tr>
            <td>个人特别技能及资历<span class="red">*</span>：</td>
            <td>
                <input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
            </td>
        </tr>
        <tr>
            <td>有否伤残/病历<span class="red">*</span>： </td>
            <td>
                <input type="radio" class="radio" name="ill" value="no" <?php if(isset($formvalues["ill"]) &&$formvalues['ill'] == 'no'){ echo 'checked';}?> />无
                <input type="radio" class="radio" name="ill"  value="yes" <?php if(isset($formvalues["ill"]) &&$formvalues['ill'] == 'yes'){ echo 'checked';}?> />有
                <input type="text" size="30"  class="hide" value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
            </td>
        </tr>
        <tr>
            <td>有否支教经验<span class="red">*</span>： </td>
            <td>
                <input type="radio" class="checkbox" name="exp"  value="no" <?php if(isset($formvalues["exp"]) &&$formvalues['exp'] == 'no'){ echo 'checked';}?>  />无
                <input type="radio" class="checkbox" name="exp"  value="yes" <?php if(isset($formvalues["exp"]) &&$formvalues['exp'] == 'yes'){ echo 'checked';}?> />有
                <input type=text size="30" class="hide" value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
            </td>
        </tr>
        <tr>
            <td>
                照片（半身生活照为佳）<span class="red">*</span>：
            </td>
            <td>
                <input type=file name="photo" />
                <?php
                if($formvalues['photo_path']) {
                    echo '<input type="hidden" name="photo_path" value="' .$formvalues['photo_path']. '"/>';
                }
                ?>
            </td>
        </tr>
    </table>
    </div>
<div class="til2">紧急联络人信息</div>
<div class="region">
    姓名<span class="red">*</span>：<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" /><br/>
    关系<span class="red">*</span>：<input type=text size=10  value="<?php echo $formvalues["EmergencyContactRelation"]?>" name="EmergencyContactRelation" /><br/>
    联系方式<span class="red">*</span>：<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" /><br/>
    工作单位<span class="red">*</span>：<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
</div>
<div class="til2">支教准备工作</div>
<div class="teach_wrap region">
    <p>1. 您的身份？<br/>
        <input type=radio value="student" name=work <?php if($formvalues["work"]=="student") echo "checked"; ?> />学生<br/>
        <input type=radio value="free" name=work <?php if($formvalues["work"]=="free") echo "checked"; ?> />赋闲在家<br/>
        <input type=radio value="work" name=work <?php if($formvalues["work"]=="work") echo "checked"; ?> />在职<br/>
            <ul class="hide" id="j_in_work">
                <li> 如果您是在职，若通过申请，您计划：</li>
                <li><input type=radio value="quit" name=onwork <?php if($formvalues["onwork"]=="quit") echo "checked"; ?> />离职去支教</li>
                <li><input type=radio value="leave" name=onwork <?php if($formvalues["onwork"]=="leave") echo "checked"; ?> />向单位请假</li>
                <li>
                    <input type=radio value="other" name=onwork <?php if($formvalues["onwork"]=="other") echo "checked"; ?> />以其他方式保留职位
                    <input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" />再去支教
                </li>
            </ul>
 
    <p>2. 支教活动没有任何经济报酬，一次支教活动根据时间长短和地区差异有所差别，但基本需要自己承担在5000元以上，请确认您对此次支教活动预备的资金。<br>
        <input type="radio" value="grade_1" name="money" <?php if($formvalues['money'] == 'grade_1'){echo 'checked';}?>/><5000元
        <input type="radio" value="grade_2" name="money" <?php if($formvalues['money'] == 'grade_2'){echo 'checked';}?>/>5000-10000元
        <input type="radio" value="grade_3" name="money" <?php if($formvalues['money'] == 'grade_3'){echo 'checked';}?>/>1万
    </p>
    <p>
        3. 您何时开始有支教的想法？请简述您对支教的看法。(<span class="red">*</span>)
        <br>
        <textarea type=text size=80  name="think" ><?php echo $formvalues["think"]?></textarea>
    </p>
    <p>
        4. 您是否清楚支教所存在的风险，应该如何应对这些风险。(<span class="red">*</span>)
        <br><textarea type=text size=80  name="risk" ><?php echo $formvalues["risk"]?></textarea>
    </p>
    <p>
        5. 对于参与支教工作，您对自己有何期望或希望贡献什么？(<span class="red">*</span>)<br>
        <textarea name="hope" ><?php echo $formvalues["hope"]?></textarea>
    </p>
    <p>
        6. 您是否就计划去支教的想法与您周边的亲朋好友进行过沟通？他们对您计划支教的想法所持的态度如何?<br>
        <input type="radio" value="support" name="support" <?php if($formvalues['support'] == 'support'){ echo 'checked';}?>>非常支持
        <input type="radio" value="general" name="support" <?php if($formvalues['support'] == 'general'){ echo 'checked';}?>>一般
        <input type="radio" value="except" name="support" <?php if($formvalues['support'] == 'except'){ echo 'checked';}?>>反对
        <input type="radio" value="not_talk" name="support" <?php if($formvalues['support'] == 'not_talk'){ echo 'checked';}?>>没有沟通过
    </p>
    <p>
        7. 请告知您的直系长辈亲属的联系方式，以便我们与您的家人联系，获取他们对您计划支教的支持程度。
        <br>
        <ul>
            <li>姓名:<input type=text size=20  class="" value="<?php echo $formvalues["lineal_name"]?>" name="lineal_name" /></li>
            <li>关系:<input type=text size=20  class="" value="<?php echo $formvalues["lineal_relation"]?>" name="lineal_relation" /></li>
            <li>联系方式:<input type=text size=30  class="" value="<?php echo $formvalues["lineal_num"]?>" name="lineal_num" /></li>
        </ul>
    </p>
    <p>
        8. 预计支教期限<br>
        <input type="radio" value="term" name="time" <?php if($formvalues['time'] == 'term'){ echo 'checked';}?>>一学期
        <input type="radio" value="year" name="time" <?php if($formvalues['time'] == 'year'){ echo 'checked';}?>>一年
        <input type="radio" value="other" name="time" <?php if($formvalues['time'] == 'other'){ echo 'checked';}?>>其他
        <input type="text" value="<?php echo $formvalues['other_time']?>" name="other_time">
    </p>
    <p>
        9. 愿意开始支教的日期：
        <select name="star_time">
            <option value="14A">2014春季</option>
        </select>
    </p>
    <p>
        10. 从何处得悉本服务的消息<br>
        <input type="radio" value="friend" name="msg_from" <?php if($formvalues['msg_from'] == 'friend'){echo 'checked';}?>>朋友
        <input type="radio" value="website" name="msg_from" <?php if($formvalues['msg_from'] == 'website'){echo 'checked';}?>>OFS网站
        <input type="radio" value="weibo" name="msg_from" <?php if($formvalues['msg_from'] == 'weibo'){echo 'checked';}?>>微博
        <input type="radio" value="weixin" name="msg_from" <?php if($formvalues['msg_from'] == 'weixin'){echo 'checked';}?>>微信
        <input type="radio" value="baidu" name="msg_from" <?php if($formvalues['msg_from'] == 'baidu'){echo 'checked';}?>>百度
        <input type="radio" value="douban" name="msg_from" <?php if($formvalues['msg_from'] == 'douban'){echo 'checked';}?>>豆瓣
        <input type="radio" value="other" name="msg_from" <?php if($formvalues['msg_from'] == 'other'){echo 'checked';}?>>其他<input type="text" value="<?php echo $formvalues['msg_from_other']?>" name="mgs_from_other"/>
    </p>
    <p>
        12. 其他意见：<br>
        <textarea  name="other"><?php echo $formvalues['other'];?></textarea>
    </p>
</div>
</div>
<div class="opt_wrap">
    <input class="btn btn-large" type=submit  value="保存" name="save" />
    <input class="btn btn-large btn-primary" type=submit value="申请" name="apply" />
</div>