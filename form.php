<?php
    error_reporting(E_ALL^E_NOTICE);
	//NEED prepare: $username

	//$formvalues["notice"] = "off";
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
		//$i=4; echo "\$formvalues[eduendtime$i] = '".$formvalues["eduendtime$i"]."'<hr>";
	}
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
                    <!--
                    <input type=text size=10  class="wd1" value="<?php echo $formvalues["sex"]?>" name="sex" />
                    -->
                    <select name="sex" class="sex">
                        <option value="man" <?if($forumvalues['sex'] == 'man'){echo 'selected';}?>>��</option>
                        <option value="women" <?if($forumvalues['sex'] == 'women'){echo 'selected';}?>>Ů</option>
                    </select>
                </span>
                <span>
                    <label>�������</label><input type=text size=10  class="wd2" value="<?php echo $formvalues["birth"]?>" name="birth" />
                </span>
            </li>
            <li>
                <span>
                    <label>���</label>
                    <!--<input type=text size=10  class="wd1" value="<?php echo $formvalues["marriage"]?>" name="marriage" />-->
                     <select name="marriage" class="marriage">
                         <option value="0" <?if($forumvalues['marriage'] == 0){echo 'selected';}?>>��</option>
                         <option value="1" <?if($forumvalues['marriage'] == 1){echo 'selected';}?>>��</option>
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
                <span><label>�����绰</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["tel"]?>" name="tel" /></span>
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
                <input type=text size=10  value="<?php echo $formvalues["edubegintime1"]?>" name="edubegintime1" />
            </td>
            <td class="sitem">
                <input type=text size=10  value="<?php echo $formvalues["eduendtime1"]?>" name="eduendtime1" />
            </td>
            <td class="bitem">
                <input type=text size=20  value="<?php echo $formvalues["edu1"]?>" name="edu1" />(��ѧ)
            </td>
        </tr>
        <tr>
            <td class="sitem">
                <input type=text size=10  value="<?php echo $formvalues["edubegintime2"]?>" name="edubegintime2" />
            </td>
            <td class="sitem">
                <input type=text size=10  value="<?php echo $formvalues["eduendtime2"]?>" name="eduendtime2" />
            </td>
            <td class="bitem">
                <input type=text size=20  value="<?php echo $formvalues["edu2"]?>" name="edu2" />(��ѧ)
            </td>
        </tr>
        <?php for($i=3;$i<=4;$i++) { ?>
            <tr>
                <td class="sitem">
                    <input type=text size=10  value="<?php echo $formvalues["edubegintime$i"] ?>" name="edubegintime<?php echo $i?>" />
                </td>
                <td class="sitem">
                    <input type=text size=10  value="<?php echo $formvalues["eduendtime$i"] ?>" name="eduendtime<?php echo $i?>" />
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
            <tr><td class="sitem"><input type=text size=10  value="<?php echo $formvalues["jobbegintime$i"] ?>" name="jobbegintime<?php echo $i?>" />
                </td>
                <td class="sitem">
                    <input type=text size=10  value="<?php echo $formvalues["jobendtime$i"] ?>" name="jobendtime<?php echo $i?>" />
                </td>
                <td class="bitem">
                    <input type=text size=20  value="<?php echo $formvalues["job$i"] ?>" name="job<?php echo $i?>" />
                </td>
                <td class="sitem">
                    <input type=text size=10  value="<?php echo $formvalues["positon$i"] ?>" name="positon<?php echo $i?>" /></td>
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
        <tr><td>�����ر��ܼ�������</td><td><input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
            </td></tr><tr><td>�з��˲�/������ </td><td><input type=checkbox class="checkbox" name="ill"  <?php if(isset($formvalues["ill"]) && $formvalues["ill"]=="on") echo "checked"; ?> />��<input type=text size=69  value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
            </td></tr><tr><td>�з�֧�̾��飺 </td><td><input type=checkbox class="checkbox" name="exp"  <?php if(isset($formvalues["exp"]) && $formvalues["exp"]=="on") echo "checked"; ?>  />��<input type=text size=69  value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
            </td></tr><tr><td>Ԥ��֧�����ޣ�</td><td>
                <input type=radio name="supporttime" value="1" <?php if($formvalues["supporttime"]=="1") echo "checked"; ?> />����
                <input type=radio name="supporttime" value="2" <?php if($formvalues["supporttime"]=="2") echo "checked"; ?> />һ��
                <input type=radio name="supporttime" value="0" <?php if($formvalues["supporttime"]=="0") echo "checked"; ?> />����<input type=text size=20  value="<?php echo $formvalues["supporttimedetail"]?>" name="supporttimedetail" />
            </td></tr><tr><td>Ը�⿪ʼ֧�̵����ڣ�</td><td><input type=text size=20  value="<?php echo $formvalues["supportstart"]?>" name="supportstart" />
            </td></tr><tr><td>�Ӻδ���Ϥ���������Ϣ��</td><td><input type=text size=20  value="<?php echo $formvalues["infosrc"]?>" name="infosrc" />
            </td></tr><tr><td>
                ��Ƭ������������Ϊ�ѣ���</td><td>
                <?php
                if(is_file($photofilename)) {
                    echo "(�����ɱ����ϴ��ϴ���)"; //" $photofilename";
                    echo "<input type=hidden name=\"lastphotopath\" value=\"$photofilename\" />";
                }
                ?>
                <input type=file name="photo" />
            </td></tr>
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
        <input type="radio" value="grade_1" name="money" <?if($forumvalues['money'] == 'grade_1'){echo 'selected';}?>/><5000Ԫ
        <input type="radio" value="grade_2" name="money" <?if($forumvalues['money'] == 'grade_2'){echo 'selected';}?>/>5000-10000Ԫ
        <input type="radio" value="grade_3" name="money" <?if($forumvalues['money'] == 'grade_3'){echo 'selected';}?>/>1��
    </p>
    <p>
        3. ���ṩ�������µ���챨���Ա����Ƕ����Ľ���״�����м򵥵�������
        <br><input type=checkbox name="healthy" <?php if(isset($formvalues["healthy"]) && $formvalues["healthy"]=="on") echo "checked"; ?> />��
    </p>
    <p>
        4. ����ʱ��ʼ��֧�̵��뷨�����������֧�̵Ŀ�����(300������,����Ϊ��)
        <br>
        <textarea type=text size=80  name="think" ><?php echo $formvalues["think"]?></textarea>
    </p>
    <p>
        5. ���Ƿ����֧�������ڵķ��գ�Ӧ�����Ӧ����Щ���ա�(300�����ڣ�����Ϊ��)
        <br><textarea type=text size=80  name="risk" ><?php echo $formvalues["risk"]?></textarea>
    </p>
    <p>
        6. ���ڲ���֧�̹����������Լ��к�������ϣ������ʲô��(300�����ڣ�����Ϊ��)<br>
        <textarea name="hope" ><?php echo $formvalues["hope"]?></textarea>
    </p>
    <p>
        7. ���Ƿ�ͼƻ�ȥ֧�̵��뷨�����ܱߵ�������ѽ��й���ͨ�����Ƕ����ƻ�֧�̵��뷨���ֵ�̬�����?<br>
        <input type="radio" value="support" name="support" <?if($forumvalues['support'] == 'support'){ echo 'selected';}?>>�ǳ�֧��
        <input type="radio" value="general" name="support" <?if($forumvalues['support'] == 'general'){ echo 'selected';}?>>һ��
        <input type="radio" value="except" name="support" <?if($forumvalues['support'] == 'except'){ echo 'selected';}?>>����
        <input type="radio" value="not_talk" name="support" <?if($forumvalues['support'] == 'not_talk'){ echo 'selected';}?>>û�й�ͨ��
    </p>
    <p>
        8. ���֪����ֱϵ������������ϵ��ʽ���Ա����������ļ�����ϵ����ȡ���Ƕ����ƻ�֧�̵�֧�̶ֳȡ�
        <br><input type=text size=80  value="<?php echo $formvalues["parent_info"]?>" name="parent_info" />
    </p>
    <p>
        9. Ԥ��֧������<br>
        <input type="radio" value="term" name="time" <?if($forumvalues['time'] == 'term'){ echo 'selected';}?>>һѧ��
        <input type="radio" value="year" name="time" <?if($forumvalues['time'] == 'year'){ echo 'selected';}?>>һ��
        <input type="radio" value="other" name="time" <?if($forumvalues['time'] == 'other'){ echo 'selected';}?>>����
        <input type="text" value="<?=$forumvalues['other_time']?>" name="other_time">
    </p>
    <p>
        10. Ը�⿪ʼ֧�̵����ڣ�<input type="text" name="star_time"/>
    </p>
    <p>
        11. �Ӻδ���Ϥ���������Ϣ<br>
        <input type="radio" value="frend" name="msg_from" <?if($forumvalues['msg_from'] == 'frend'){echo 'selected';}?>>����
        <input type="radio" value="website" name="msg_from" <?if($forumvalues['msg_from'] == 'website'){echo 'selected';}?>>OFS��վ
        <input type="radio" value="forum" name="msg_from" <?if($forumvalues['msg_from'] == 'forum'){echo 'selected';}?>>OFS��̳
        <input type="radio" value="other" name="msg_from" <?if($forumvalues['msg_from'] == 'other'){echo 'selected';}?>>����<input type="text" value="<?=$forumvalues['msg_from_other']?>" name="mgs_from_other"/>
    </p>
    <p>
        12. ���������<br>
        <textarea  name="other"><?echo $forumvalues['other'];?></textarea>
    </p>
</div>

