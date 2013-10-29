<?php

	//NEED prepare: $username

	//$formvalues["notice"] = "off";
/*
	$formvalues["supporttime"] = "";
	$formvalues["work"] = "";

	$formvalues["workdetail"] = "";
	$formvalues["income"] = "";
	$formvalues["think"] = "";
	$formvalues["risk"] = "";
	$formvalues["hope"] = "";
	$formvalues["friend"] = "";
	$formvalues["parent"] = "";
	$formvalues["name"] = "";
	$formvalues["sex"] = "";
	$formvalues["birth"] = "";
	$formvalues["edu"] = "";
	$formvalues["marriage"] = "";
	$formvalues["nation"] = "";
	$formvalues["hometown"] = "";
	$formvalues["liveplace"] = "";
	$formvalues["mobile"] = "";
	$formvalues["tel"] = "";
	$formvalues["email"] = "";
	$formvalues["addr"] = "";
	$formvalues["edubegintime1"] = "";
	$formvalues["eduendtime1"] = "";
	$formvalues["edu1"] = "";
	$formvalues["edubegintime2"] = "";
	$formvalues["eduendtime2"] = "";
	$formvalues["edu2"] = "";
	for ($i=1; $i<6; $i++) {
		$formvalues["edubegintime$i"] = "";
		$formvalues["eduendtime$i"] = "";
		$formvalues["edu$i"] = "";
		$formvalues["jobbegintime$i"] = "";
		$formvalues["jobendtime$i"] = "";
		$formvalues["job$i"] = "";
		$formvalues["positon$i"] = "";
		$formvalues["folk$i"] = "";
		$formvalues["folkjob$i"] = "";
	}
	$formvalues["EmergencyContactName"] = "";
	$formvalues["EmergencyContact"] = "";
	$formvalues["EmergencyContactWork"] = "";
	$formvalues["ability"] = "";
	$formvalues["illdetail"] = "";
	$formvalues["expdetail"] = "";
	$formvalues["supporttimedetail"] = "";
	$formvalues["supportstart"] = "";
	$formvalues["infosrc"] = "";
    $formvalues['postcode'] = "";

	$res = DB::queryFirstRow("select * from $APPLYTABLE where user = '".$username."'");
	if ($res == NULL) {
		$photofilename = "";
		$docfilename = "NULL";
	} else {
		$photofilename = $res['file'];
		$docfilename = $res['doc'];
		$row = explode(",", $res['info']);
		foreach ($row as $key=>$value) {
			$info1 = explode("\" : \"", $value);
			if (isset($info1[1])) {
				$info1index = trim($info1[0], "\" \t\n\r\0\x0B");
				$formvalues["$info1index"] = substr($info1[1], 0, -2);
			}
		}
	}
*/
?>

您是否阅读过《<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">申请人须知</a>》，并对其中提到的所有条款均已知悉？
<br>&nbsp;&nbsp;<input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?> />已知悉</p>
<div class="base_wrap wrap">
    <div class="til">个人基本资料</div>
    <div class="base_tab">
        <ul>
            <li>
                <span>
                    <label>真实姓名</label><input type=text size=10 class="wd2" value="<?php echo $formvalues["name"]?>" name="name" />
                </span>
                <span>
                    <label>性别</label>
                    <select name="sex" class="sex">
                        <option value="man" <?php if($forumvalues['sex'] == 'man'){echo 'selected';}?>>男</option>
                        <option value="women" <?php if($forumvalues['sex'] == 'women'){echo 'selected';}?>>女</option>
                    </select>
                </span>
                <span>
                    <label>出生年份</label><input type=text size=10  class="wd2" value="<?php echo $formvalues["birth"]?>" name="birth" />
                </span>
                <span>
                    <label>身份证号码</label><input type=text size=30 name="identity_code" value="<?php echo $forumvalues['identity_code']?>"/>
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
                    <label>民族</label><input type=text size=10 class="wd1" value="<?php echo $formvalues["nation"]?>" name="nation" />
                </span>
                <span>
                    <label>籍贯</label><input type=text size=10 class="wd1" value="<?php echo $formvalues["hometown"]?>" name="hometown" />
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
            print "<td class='bitem'><input type=text size=20 value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" />";
            if($i==1){
                echo '<span class="red">*</span>';
            }
            echo "</td></tr>";
        }
        ?>
    </table>
    <table class="sp_tab">
        <tr>
            <td>个人特别技能及资历：</td>
            <td>
                <input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
            </td>
        </tr>
        <tr>
            <td>有否伤残/病历： </td>
            <td>
                <input type="radio" class="radio" name="ill" value="no" <?php if(isset($formvalues["ill"]) &&$forumvalues['ill'] == 'no'){ echo 'selected';}?> />无
                <input type="radio" class="radio" name="ill"  value="yes" <?php if(isset($formvalues["ill"]) &&$forumvalues['ill'] == 'yes'){ echo 'selected';}?> />有
                <input type="text" size="30"  class="hide" value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
            </td>
        </tr>
        <tr>
            <td>有否支教经验： </td>
            <td>
                <input type="radio" class="checkbox" name="exp"  value="no" <?php if(isset($formvalues["exp"]) &&$forumvalues['exp'] == 'no'){ echo 'selected';}?>  />无
                <input type="radio" class="checkbox" name="exp"  value="yes" <?php if(isset($formvalues["exp"]) &&$forumvalues['exp'] == 'yes'){ echo 'selected';}?> />有
                <input type=text size="30" class="hide" value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
            </td>
        </tr>
        <tr>
            <td>
                照片（半身生活照为佳）：
            </td>
            <td>
                <?php
                if(is_file($photofilename)) {
                    echo "(不动可保留上次上传的)"; //" $photofilename";
                    echo "<input type=hidden name=\"lastphotopath\" value=\"$photofilename\" />";
                }
                ?>
                <input type=file name="photo" />
            </td>
        </tr>
    </table>
    <div>
        <h4>紧急联络人信息</h4>
        姓名：<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" /><br/>
        联系方式：<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" /><br/>
        工作单位：<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
    </div>
</div>
<div class="teach_wrap wrap">
    <div class="til">支教准备工作</div>
    <p>1. 您的身份？
    <ul>
        <li><input type=radio value="student" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />学生</li>
        <li><input type=radio value="free" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />赋闲在家</li>
        <li><input type=radio value="work" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />在职</li>
        <li>
            <ul class="hide" id="j_in_work">
                <li> 如果您是在职，若通过申请，您计划：</li>
                <li><input type=radio value="quit" name=onwork <?php if($formvalues["onwork"]=="quit") echo "checked"; ?> />离职去支教</li>
                <li><input type=radio value="leave" name=onwork <?php if($formvalues["onwork"]=="leave") echo "checked"; ?> />向单位请假</li>
                <li>
                    <input type=radio value="other" name=onwork <?php if($formvalues["onwork"]=="other") echo "checked"; ?> />以其他方式保留职位
                    <input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" />再去支教
                </li>
            </ul>
        </li>
    </ul>
    <p>2. 支教活动没有任何经济报酬，一次支教活动根据时间长短和地区差异有所差别，但基本需要自己承担在5000元以上，请确认您对此次支教活动预备的资金。<br>
        <input type="radio" value="grade_1" name="money" <?php if($forumvalues['money'] == 'grade_1'){echo 'selected';}?>/><5000元
        <input type="radio" value="grade_2" name="money" <?php if($forumvalues['money'] == 'grade_2'){echo 'selected';}?>/>5000-10000元
        <input type="radio" value="grade_3" name="money" <?php if($forumvalues['money'] == 'grade_3'){echo 'selected';}?>/>1万
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
        <input type="radio" value="support" name="support" <?php if($forumvalues['support'] == 'support'){ echo 'selected';}?>>非常支持
        <input type="radio" value="general" name="support" <?php if($forumvalues['support'] == 'general'){ echo 'selected';}?>>一般
        <input type="radio" value="except" name="support" <?php if($forumvalues['support'] == 'except'){ echo 'selected';}?>>反对
        <input type="radio" value="not_talk" name="support" <?php if($forumvalues['support'] == 'not_talk'){ echo 'selected';}?>>没有沟通过
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
        <input type="radio" value="term" name="time" <?php if($forumvalues['time'] == 'term'){ echo 'selected';}?>>一学期
        <input type="radio" value="year" name="time" <?php if($forumvalues['time'] == 'year'){ echo 'selected';}?>>一年
        <input type="radio" value="other" name="time" <?php if($forumvalues['time'] == 'other'){ echo 'selected';}?>>其他
        <input type="text" value="<?php echo $forumvalues['other_time']?>" name="other_time">
    </p>
    <p>
        9. 愿意开始支教的日期：
        <select name="star_time">
            <option value="13A">2013年秋季</option>
        </select>
    </p>
    <p>
        10. 从何处得悉本服务的消息<br>
        <input type="radio" value="frend" name="msg_from" <?php if($forumvalues['msg_from'] == 'frend'){echo 'selected';}?>>朋友
        <input type="radio" value="website" name="msg_from" <?php if($forumvalues['msg_from'] == 'website'){echo 'selected';}?>>OFS网站
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'weibo'){echo 'selected';}?>>微博
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'weixin'){echo 'selected';}?>>微信
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'baidu'){echo 'selected';}?>>百度
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'douban'){echo 'selected';}?>>豆瓣
        <input type="radio" value="other" name="msg_from" <?php if($forumvalues['msg_from'] == 'other'){echo 'selected';}?>>其他<input type="text" value="<?php echo $forumvalues['msg_from_other']?>" name="mgs_from_other"/>
    </p>
    <p>
        12. 其他意见：<br>
        <textarea  name="other"><?php echo $forumvalues['other'];?></textarea>
    </p>
</div>
<div class="opt_wrap">
    <input class="btn btn-large" type=submit  value="保存" name="save" />
    <input class="btn btn-large btn-primary" type=submit value="申请" name="apply" />
</div>