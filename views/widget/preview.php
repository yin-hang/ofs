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
    <div>������ϢԤ��</div>
    <div class="base_info">
        <div class="base_wrap wrap">
            <div class="til">���˻�������</div>
            <div class="base_tab">
                <ul>
                    <li>
                <span>
                    <label>��ʵ����:</label><span><?echo $forumvalues['name'];?></span>
                </span>
                <span>
                    <label>�Ա�:</label><span>
                        <?
                            if($forumvalues['sex'] == 'man'){
                                echo '��';
                            }else{
                                echo 'Ů';
                            }
                        ?>
                    </span>
                </span>
                <span>
                    <label>�������:</label><span><?echo $formvalues["birth"]?></span>
                </span>
                <span>
                    <label>���֤����:</label><?echo $forumvalues['identity_code']?>
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
                    <label>����:</label><?echo $formvalues["hometown"]?>
                </span>
                <span>
                    <label>����:</label><input type=text size=10 class="wd1" value="<?php echo $formvalues["name"]?>" name="name" />
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
                        <?php echo $formvalues["ability"]?>
                    </td>
                </tr>
                <tr>
                    <td>�з��˲�/������ </td>
                    <?php
                        if($formvalues['ill'] == 'no'){
                            echo '��';
                        }else{
                            echo '��.' . $formvalues['illdetail'];
                        }
                    ?>
                </tr>
                <tr>
                    <td>�з�֧�̾��飺 </td>
                    <td>
                        <?php
                            if($formvalues['exp'] == 'no'){
                                echo '��';
                            }else{
                                echo '��.' . $formvalues['expdetail'];
                            }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        ��Ƭ������������Ϊ�ѣ���
                    </td>
                    <td>
                        <img src="<?php echo $formvalues['photo_path']?>"/>
                    </td>
                </tr>
            </table>
            <div>
                <h4>������������Ϣ</h4>
                <label>������</label><?php echo $formvalues["EmergencyContactName"]?><br/>
                <label>��ϵ��ʽ��</label><?php echo $formvalues["EmergencyContact"]?><br/>
                <label>������λ:</label><?php echo $formvalues["EmergencyContactWork"]?>
            </div>
        </div>
    </div>
    <div class="tech_info">

    </div>
</div>
