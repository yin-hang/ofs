<?php
$formvalues = $apply_data['info'];
?>

���Ƿ��Ķ�����<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">��������֪</a>�������������ᵽ�������������֪Ϥ��
<br>&nbsp;&nbsp;<input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?> />��֪Ϥ</p>
<div class="base_wrap wrap">
    <div class="til">���˻�������</div>
    <div class="base_tab">
        <ul>
            <li>
                <span>
                    <label>��ʵ����<span class="red">*</span></label><input type=text size=10 class="wd2" value="<?php echo $formvalues["name"]?>" name="name" />
                </span>
                <span>
                    <label>�Ա�</label><span class="red">*</span>
                    <select name="sex" class="sex">
                        <option value="man" <?php if($formvalues['sex'] == 'man'){echo 'selected';}?>>��</option>
                        <option value="women" <?php if($formvalues['sex'] == 'women'){echo 'selected';}?>>Ů</option>
                    </select>
                </span>
                <span>
                    <label>�������<span class="red">*</span></label><input type=text size=10  class="wd2" value="<?php echo $formvalues["birth"]?>" name="birth" />
                </span>
                <span>
                    <label>���֤����<span class="red">*</span></label><input type=text size=30 name="identity_code" value="<?php echo $formvalues['identity_code']?>"/>
                </span>
            </li>
            <li>
                <span>
                    <label>���<span class="red">*</span></label>
                    <!--<input type=text size=10  class="wd1" value="<?php echo $formvalues["marriage"]?>" name="marriage" />-->
                     <select name="marriage" class="marriage">
                         <option value="0" <?php if($formvalues['marriage'] == 0){echo 'selected';}?>>��</option>
                         <option value="1" <?php if($formvalues['marriage'] == 1){echo 'selected';}?>>��</option>
                     </select>
                </span>
                <span>
                    <label>����<span class="red">*</span></label><input type=text size=10 class="wd1" value="<?php echo $formvalues["nation"]?>" name="nation" />
                </span>
                <span>
                    <label>����<span class="red">*</span></label><input type=text size=10 class="wd1" value="<?php echo $formvalues["hometown"]?>" name="hometown" />
                </span>
                <span>
                    <label>�����̶�<span class="red">*</span></label><input type=text size=30 class="wd2" value="<?php echo $formvalues["edu"]?>" name="edu" />
                </span>
            </li>
            <li>
                <span><label>�־�ס��<span class="red">*</span></label><input type=text size=30 class="wd6" value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></span>
            </li>
            <li>
                <span><label>�ֻ�<span class="red">*</span></label><input type=text size=10 class="wd4" value="<?php echo $formvalues["mobile"]?>" name="mobile" /></span>
                <span><label>�̶��绰</label><input type=text size=10 class="wd4" value="<?php echo $formvalues["tel"]?>" name="tel" /></span>
                <span><label>email<span class="red">*</span></label><input type=text size=10  class="wd4" value="<?php echo $formvalues["email"]?>" name="email" /></span>
            </li>
            <li>
                <span><label>ͨѶ��ַ<span class="red">*</span></label><input type=text size=30 class="wd5" value="<?php echo $formvalues["addr"]?>" name="addr" /></span>
                <span><label>�ʱ�<span class="red">*</span></label><input type=text size=10   class="wd2" value="<?php echo $formvalues["postcode"]?>" name="postcode" /></span>
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
    <div class="til2">��ͥ��Ա</div>
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
            <td>�����ر��ܼ�����<span class="red">*</span>��</td>
            <td>
                <input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
            </td>
        </tr>
        <tr>
            <td>�з��˲�/����<span class="red">*</span>�� </td>
            <td>
                <input type="radio" class="radio" name="ill" value="no" <?php if(isset($formvalues["ill"]) &&$formvalues['ill'] == 'no'){ echo 'checked';}?> />��
                <input type="radio" class="radio" name="ill"  value="yes" <?php if(isset($formvalues["ill"]) &&$formvalues['ill'] == 'yes'){ echo 'checked';}?> />��
                <input type="text" size="30"  class="hide" value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
            </td>
        </tr>
        <tr>
            <td>�з�֧�̾���<span class="red">*</span>�� </td>
            <td>
                <input type="radio" class="checkbox" name="exp"  value="no" <?php if(isset($formvalues["exp"]) &&$formvalues['exp'] == 'no'){ echo 'checked';}?>  />��
                <input type="radio" class="checkbox" name="exp"  value="yes" <?php if(isset($formvalues["exp"]) &&$formvalues['exp'] == 'yes'){ echo 'checked';}?> />��
                <input type=text size="30" class="hide" value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
            </td>
        </tr>
        <tr>
            <td>
                ��Ƭ������������Ϊ�ѣ�<span class="red">*</span>��
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
    <div>
        <h4>������������Ϣ</h4>
        ����<span class="red">*</span>��<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" /><br/>
        ��ϵ<span class="red">*</span>��<input type=text size=10  value="<?php echo $formvalues["EmergencyContactRelation"]?>" name="EmergencyContactRelation" /><br/>
        ��ϵ��ʽ<span class="red">*</span>��<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" /><br/>
        ������λ<span class="red">*</span>��<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
    </div>
</div>
<div class="teach_wrap wrap">
    <div class="til">֧��׼������</div>
    <p>1. ������ݣ�
    <ul>
        <li><input type=radio value="student" name=work <?php if($formvalues["work"]=="student") echo "checked"; ?> />ѧ��</li>
        <li><input type=radio value="free" name=work <?php if($formvalues["work"]=="free") echo "checked"; ?> />�����ڼ�</li>
        <li><input type=radio value="work" name=work <?php if($formvalues["work"]=="work") echo "checked"; ?> />��ְ</li>
        <li>
            <ul class="hide" id="j_in_work">
                <li> ���������ְ����ͨ�����룬���ƻ���</li>
                <li><input type=radio value="quit" name=onwork <?php if($formvalues["onwork"]=="quit") echo "checked"; ?> />��ְȥ֧��</li>
                <li><input type=radio value="leave" name=onwork <?php if($formvalues["onwork"]=="leave") echo "checked"; ?> />��λ���</li>
                <li>
                    <input type=radio value="other" name=onwork <?php if($formvalues["onwork"]=="other") echo "checked"; ?> />��������ʽ����ְλ
                    <input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" />��ȥ֧��
                </li>
            </ul>
        </li>
    </ul>
    <p>2. ֧�̻û���κξ��ñ��꣬һ��֧�̻����ʱ�䳤�̺͵�������������𣬵�������Ҫ�Լ��е���5000Ԫ���ϣ���ȷ�����Դ˴�֧�̻Ԥ�����ʽ�<br>
        <input type="radio" value="grade_1" name="money" <?php if($formvalues['money'] == 'grade_1'){echo 'checked';}?>/><5000Ԫ
        <input type="radio" value="grade_2" name="money" <?php if($formvalues['money'] == 'grade_2'){echo 'checked';}?>/>5000-10000Ԫ
        <input type="radio" value="grade_3" name="money" <?php if($formvalues['money'] == 'grade_3'){echo 'checked';}?>/>1��
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
        <input type="radio" value="support" name="support" <?php if($formvalues['support'] == 'support'){ echo 'checked';}?>>�ǳ�֧��
        <input type="radio" value="general" name="support" <?php if($formvalues['support'] == 'general'){ echo 'checked';}?>>һ��
        <input type="radio" value="except" name="support" <?php if($formvalues['support'] == 'except'){ echo 'checked';}?>>����
        <input type="radio" value="not_talk" name="support" <?php if($formvalues['support'] == 'not_talk'){ echo 'checked';}?>>û�й�ͨ��
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
        <input type="radio" value="term" name="time" <?php if($formvalues['time'] == 'term'){ echo 'checked';}?>>һѧ��
        <input type="radio" value="year" name="time" <?php if($formvalues['time'] == 'year'){ echo 'checked';}?>>һ��
        <input type="radio" value="other" name="time" <?php if($formvalues['time'] == 'other'){ echo 'checked';}?>>����
        <input type="text" value="<?php echo $formvalues['other_time']?>" name="other_time">
    </p>
    <p>
        9. Ը�⿪ʼ֧�̵����ڣ�
        <select name="star_time">
            <option value="13A">2013���＾</option>
        </select>
    </p>
    <p>
        10. �Ӻδ���Ϥ���������Ϣ<br>
        <input type="radio" value="friend" name="msg_from" <?php if($formvalues['msg_from'] == 'friend'){echo 'checked';}?>>����
        <input type="radio" value="website" name="msg_from" <?php if($formvalues['msg_from'] == 'website'){echo 'checked';}?>>OFS��վ
        <input type="radio" value="weibo" name="msg_from" <?php if($formvalues['msg_from'] == 'weibo'){echo 'checked';}?>>΢��
        <input type="radio" value="weixin" name="msg_from" <?php if($formvalues['msg_from'] == 'weixin'){echo 'checked';}?>>΢��
        <input type="radio" value="baidu" name="msg_from" <?php if($formvalues['msg_from'] == 'baidu'){echo 'checked';}?>>�ٶ�
        <input type="radio" value="douban" name="msg_from" <?php if($formvalues['msg_from'] == 'douban'){echo 'checked';}?>>����
        <input type="radio" value="other" name="msg_from" <?php if($formvalues['msg_from'] == 'other'){echo 'checked';}?>>����<input type="text" value="<?php echo $formvalues['msg_from_other']?>" name="mgs_from_other"/>
    </p>
    <p>
        12. ���������<br>
        <textarea  name="other"><?php echo $formvalues['other'];?></textarea>
    </p>
</div>
<div class="opt_wrap">
    <input class="btn btn-large" type=submit  value="����" name="save" />
    <input class="btn btn-large btn-primary" type=submit value="����" name="apply" />
</div>