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

���Ƿ��Ķ�����<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">��������֪</a>�������������ᵽ�������������֪Ϥ��
<br>&nbsp;&nbsp;<input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?> />��֪Ϥ</p>
<div class="base_wrap wrap">
    <div class="til">���˻�������</div>
    <div class="base_tab">
        <ul>
            <li>
                <span>
                    <label>��ʵ����</label><input type=text size=10 class="wd2" value="<?php echo $formvalues["name"]?>" name="name" />
                </span>
                <span>
                    <label>�Ա�</label>
                    <select name="sex" class="sex">
                        <option value="man" <?php if($forumvalues['sex'] == 'man'){echo 'selected';}?>>��</option>
                        <option value="women" <?php if($forumvalues['sex'] == 'women'){echo 'selected';}?>>Ů</option>
                    </select>
                </span>
                <span>
                    <label>�������</label><input type=text size=10  class="wd2" value="<?php echo $formvalues["birth"]?>" name="birth" />
                </span>
                <span>
                    <label>���֤����</label><input type=text size=30 name="identity_code" value="<?php echo $forumvalues['identity_code']?>"/>
                </span>
            </li>
            <li>
                <span>
                    <label>���</label>
                    <!--<input type=text size=10  class="wd1" value="<?php echo $formvalues["marriage"]?>" name="marriage" />-->
                     <select name="marriage" class="marriage">
                         <option value="0" <?php if($forumvalues['marriage'] == 0){echo 'selected';}?>>��</option>
                         <option value="1" <?php if($forumvalues['marriage'] == 1){echo 'selected';}?>>��</option>
                     </select>
                </span>
                <span>
                    <label>����</label><input type=text size=10 class="wd1" value="<?php echo $formvalues["hometown"]?>" name="hometown" />
                </span>
                <span>
                    <label>����</label><input type=text size=10 class="wd1" value="<?php echo $formvalues["name"]?>" name="name" />
                </span>
                <span>
                    <label>�����̶�</label><input type=text size=30 class="wd2" value="<?php echo $formvalues["edu"]?>" name="edu" />
                </span>
            </li>
            <li>
                <span><label>�־�ס��</label><input type=text size=30 class="wd6" value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></span>
            </li>
            <li>
                <span><label>�ֻ�</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["mobile"]?>" name="mobile" /></span>
                <span><label>�̶��绰</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["tel"]?>" name="tel" /></span>
                <span><label>email</label><input type=text size=10  class="wd4" value="<?php echo $formvalues["email"]?>" name="email" /></span>
            </li>
            <li>
                <span><label>ͨѶ��ַ</label><input type=text size=30 class="wd5" value="<?php echo $formvalues["addr"]?>" name="addr" /></span>
                <span><label>�ʱ�</label><input type=text size=10   class="wd2" value="<?php echo $formvalues["postcode"]?>" name="postcode" /></span>
            </li>
        </ul>
    </div>
    <div class="til2">�ܽ�������</div>
    <table class="edu_tab">
        <tr><td>��ʼʱ��</td><td>����ʱ��</td><td>ѧУ����</td></tr>
        <tr>
            <td class="sitem">
                <input type=text size=10 class="time" value="<?php echo $formvalues["edubegintime1"]?>" name="edubegintime1" />
            </td>
            <td class="sitem">
                <input type=text size=10 class="time" value="<?php echo $formvalues["eduendtime1"]?>" name="eduendtime1" />
            </td>
            <td class="bitem">
                <input type=text size=20  value="<?php echo $formvalues["edu1"]?>" name="edu1" />(��ѧ)<span class="red">*</span>
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
                <input type=text size=20  value="<?php echo $formvalues["edu2"]?>" name="edu2" />(��ѧ)<span class="red">*</span>
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
    <div class="til2">��������</div>
    <table class="work_tab">
        <tr><td>��ʼʱ��</td><td>����ʱ��</td><td>��λ����</td><td>���θ�λ</td></tr>
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
    <h4>��ͥ��Ա</h4>
    <table class="family_tab">
        <tr>
            <td>��ͥ��Ա</td>
            <td>����</td>
            <td>������λ</td>
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
            <td>�����ر��ܼ�������</td>
            <td>
                <input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
            </td>
        </tr>
        <tr>
            <td>�з��˲�/������ </td>
            <td>
                <input type="radio" class="radio" name="ill" value="yes" <?php if(isset($formvalues["ill"]) &&$forumvalues['ill'] == 'yes'){ echo 'selected';}?> />��
                <input type="radio" class="radio" name="ill"  value="no" <?php if(isset($formvalues["ill"]) &&$forumvalues['ill'] == 'no'){ echo 'selected';}?> />��
                <input type="text" size="30"  value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
            </td>
        </tr>
        <tr>
            <td>�з�֧�̾��飺 </td>
            <td>
                <input type="radio" class="checkbox" name="exp"  value="yes" <?php if(isset($formvalues["exp"]) &&$forumvalues['exp'] == 'yes'){ echo 'selected';}?>  />��
                <input type="radio" class="checkbox" name="exp"  value="no" <?php if(isset($formvalues["exp"]) &&$forumvalues['exp'] == 'no'){ echo 'selected';}?> />��
                <input type=text size="30"  value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
            </td>
        </tr>
        <tr>
            <td>
                ��Ƭ������������Ϊ�ѣ���
            </td>
            <td>
                <?php
                if(is_file($photofilename)) {
                    echo "(�����ɱ����ϴ��ϴ���)"; //" $photofilename";
                    echo "<input type=hidden name=\"lastphotopath\" value=\"$photofilename\" />";
                }
                ?>
                <input type=file name="photo" />
            </td>
        </tr>
    </table>
    <div>
        <h4>������������Ϣ</h4>
        ������<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" /><br/>
        ��ϵ��ʽ��<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" /><br/>
        ������λ��<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
    </div>
</div>
<div class="teach_wrap wrap">
    <div class="til">֧��׼������</div>
    <p>1. ������ݣ�
    <ul>
        <li><input type=radio value="student" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />ѧ��</li>
        <li><input type=radio value="work" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />��ְ</li>
        <li><input type=radio value="free" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />�����ڼ�</li>
        <li> ���������ְ����ͨ�����룬���ƻ���</li>
        <li><input type=radio value="quit" name=onwork <?php if($formvalues["onwork"]=="quit") echo "checked"; ?> />��ְȥ֧��</li>
        <li><input type=radio value="leave" name=onwork <?php if($formvalues["onwork"]=="leave") echo "checked"; ?> />��λ���</li>
        <li>
            <input type=radio value="other" name=onwork <?php if($formvalues["onwork"]=="other") echo "checked"; ?> />��������ʽ����ְλ
            <input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" />��ȥ֧��
        </li>
    </ul>
    <p>2. ֧�̻û���κξ��ñ��꣬һ��֧�̻����ʱ�䳤�̺͵�������������𣬵�������Ҫ�Լ��е���5000Ԫ���ϣ���ȷ�����Դ˴�֧�̻Ԥ�����ʽ�<br>
        <input type="radio" value="grade_1" name="money" <?php if($forumvalues['money'] == 'grade_1'){echo 'selected';}?>/><5000Ԫ
        <input type="radio" value="grade_2" name="money" <?php if($forumvalues['money'] == 'grade_2'){echo 'selected';}?>/>5000-10000Ԫ
        <input type="radio" value="grade_3" name="money" <?php if($forumvalues['money'] == 'grade_3'){echo 'selected';}?>/>1��
    </p>
    <p>
        3. ����ʱ��ʼ��֧�̵��뷨�����������֧�̵Ŀ�����(<span class="red">*</span>)
        <br>
        <textarea type=text size=80  name="think" ><?php echo $formvalues["think"]?></textarea>
    </p>
    <p>
        4. ���Ƿ����֧�������ڵķ��գ�Ӧ�����Ӧ����Щ���ա�(<span class="red">*</span>)
        <br><textarea type=text size=80  name="risk" ><?php echo $formvalues["risk"]?></textarea>
    </p>
    <p>
        5. ���ڲ���֧�̹����������Լ��к�������ϣ������ʲô��(<span class="red">*</span>)<br>
        <textarea name="hope" ><?php echo $formvalues["hope"]?></textarea>
    </p>
    <p>
        6. ���Ƿ�ͼƻ�ȥ֧�̵��뷨�����ܱߵ�������ѽ��й���ͨ�����Ƕ����ƻ�֧�̵��뷨���ֵ�̬�����?<br>
        <input type="radio" value="support" name="support" <?php if($forumvalues['support'] == 'support'){ echo 'selected';}?>>�ǳ�֧��
        <input type="radio" value="general" name="support" <?php if($forumvalues['support'] == 'general'){ echo 'selected';}?>>һ��
        <input type="radio" value="except" name="support" <?php if($forumvalues['support'] == 'except'){ echo 'selected';}?>>����
        <input type="radio" value="not_talk" name="support" <?php if($forumvalues['support'] == 'not_talk'){ echo 'selected';}?>>û�й�ͨ��
    </p>
    <p>
        7. ���֪����ֱϵ������������ϵ��ʽ���Ա����������ļ�����ϵ����ȡ���Ƕ����ƻ�֧�̵�֧�̶ֳȡ�
        <br>
        <ul>
            <li>����:<input type=text size=20  class="" value="<?php echo $formvalues["lineal_name"]?>" name="lineal_name" /></li>
            <li>��ϵ:<input type=text size=20  class="" value="<?php echo $formvalues["lineal_relation"]?>" name="lineal_relation" /></li>
            <li>��ϵ��ʽ:<input type=text size=30  class="" value="<?php echo $formvalues["lineal_num"]?>" name="lineal_num" /></li>
        </ul>
    </p>
    <p>
        8. Ԥ��֧������<br>
        <input type="radio" value="term" name="time" <?php if($forumvalues['time'] == 'term'){ echo 'selected';}?>>һѧ��
        <input type="radio" value="year" name="time" <?php if($forumvalues['time'] == 'year'){ echo 'selected';}?>>һ��
        <input type="radio" value="other" name="time" <?php if($forumvalues['time'] == 'other'){ echo 'selected';}?>>����
        <input type="text" value="<?php echo $forumvalues['other_time']?>" name="other_time">
    </p>
    <p>
        9. Ը�⿪ʼ֧�̵����ڣ�
        <select name="star_time">
            <option value="13A">2013���＾</option>
        </select>
    </p>
    <p>
        10. �Ӻδ���Ϥ���������Ϣ<br>
        <input type="radio" value="frend" name="msg_from" <?php if($forumvalues['msg_from'] == 'frend'){echo 'selected';}?>>����
        <input type="radio" value="website" name="msg_from" <?php if($forumvalues['msg_from'] == 'website'){echo 'selected';}?>>OFS��վ
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'weibo'){echo 'selected';}?>>΢��
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'weixin'){echo 'selected';}?>>΢��
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'baidu'){echo 'selected';}?>>�ٶ�
        <input type="radio" value="forum" name="msg_from" <?php if($forumvalues['msg_from'] == 'douban'){echo 'selected';}?>>����
        <input type="radio" value="other" name="msg_from" <?php if($forumvalues['msg_from'] == 'other'){echo 'selected';}?>>����<input type="text" value="<?php echo $forumvalues['msg_from_other']?>" name="mgs_from_other"/>
    </p>
    <p>
        12. ���������<br>
        <textarea  name="other"><?php echo $forumvalues['other'];?></textarea>
    </p>
</div>
<div class="opt_wrap">
    <input class="btn btn-large" type=submit  value="����" name="save" />
    <input class="btn btn-large btn-primary" type=submit value="����" name="apply" />
</div>