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
    <div>������ϢԤ��</div>
    <div class="base_info">
        <div class="base_wrap wrap">
            <div class="til">���˻�������</div>
            <div class="base_tab">
                <ul>
                    <li>
                <span>
                    <label>��ʵ����:</label><span><?echo $formvalues['name'];?></span>
                </span><br/>
                <span>
                    <label>�Ա�:</label><span>
                        <?
                            if($formvalues['sex'] == 'man'){
                                echo '��';
                            }else{
                                echo 'Ů';
                            }
                        ?>
                    </span>
                </span><br/>
                <span>
                    <label>�������:</label><span><?echo $formvalues["birth"]?></span>
                </span><br/>
                <span>
                    <label>���֤����:</label><?echo $formvalues['identity_code']?>
                </span>
                        <br/>
                    </li>
                    <li>
                <span>
                    <label>���:</label>
                    <?
                        if($formvalues['marriage'] == 1){
                            echo '��';
                        }else{
                            echo '��';
                        }
                    ?>
                </span><br/>
                <span>
                    <label>����:</label><?echo $formvalues["nation"]?>
                </span><br/>
                <span>
                    <label>����:</label><?echo $formvalues['hometown'];?>
                </span><br/>
                <span>
                    <label>�����̶�:</label><?echo $formvalues['edi'];?>
                </span>
                    </li>
                    <li>
                        <span><label>�־�ס��:</label><?echo $formvalues['liveplace'];?>
                    </li>
                    <li>
                        <span><label>�ֻ�:</label><?echo $formvalues['mobile']?><br/>
                        <span><label>�̶��绰:</label><?echo $formvalues['tel'];?><br/>
                        <span><label>email:</label><?echo $formvalues['email'];?><br/>
                    </li>
                    <li>
                        <span><label>ͨѶ��ַ:</label><?php echo $formvalues["addr"]?><br/>
                        <span><label>�ʱ�:</label><?php echo $formvalues["postcode"]?>
                    </li>
                </ul>
            </div>
            <div class="til2">�ܽ�������</div>
            <table class="edu_tab">
                <tr><td>��ʼʱ��</td><td>����ʱ��</td><td>ѧУ����</td></tr>
                <tr>
                    <td class="sitem">
                        <?php echo $formvalues["edubegintime1"]?>
                    </td>
                    <td class="sitem">
                        <?php echo $formvalues["eduendtime1"]?>
                    </td>
                    <td class="bitem">
                        <?php echo $formvalues["edu1"]?>(��ѧ)<span class="red">*</span>
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
                        <?php echo $formvalues["edu2"]?>(��ѧ)<span class="red">*</span>
                    </td>
                </tr>
                <?php for($i=3;$i<=4;$i++) { ?>
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
            <div class="til2">��������</div>
            <table class="work_tab">
                <tr><td>��ʼʱ��</td><td>����ʱ��</td><td>��λ����</td><td>���θ�λ</td></tr>
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
            <h4>��ͥ��Ա</h4>
            <table class="family_tab">
                <tr>
                    <td>��ͥ��Ա</td>
                    <td>����</td>
                    <td>������λ</td>
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
        <div class="til">֧��׼������</div>
        <p>1. �������:
        <?
            switch($formvalues['work']){
                case 'student':
                    echo 'ѧ��';
                    break;
                case 'free':
                    echo '�����ڼ�';
                    break;
                case 'work':
                    echo '��ְ.����';
                    switch($formvalues['onwork']){
                        case 'quit':
                            echo '��ְȥ֧��';
                            break;
                        case 'leave':
                            echo '��λ���';
                            break;
                        case 'other':
                            echo '��������ʽ����ְλ' . $formvalues['workdetail'] . '��ȥ֧��';
                            break;
                    }
                    break;
            }
        ?>
        <p>2. ֧�̻û���κξ��ñ��꣬һ��֧�̻����ʱ�䳤�̺͵�������������𣬵�������Ҫ�Լ��е���5000Ԫ���ϣ���ȷ�����Դ˴�֧�̻Ԥ�����ʽ�<br>
            <?
                switch($formvalues['money']){
                    case 'grade_1':
                        echo 'С��5000';
                        break;
                    case 'grade_2':
                        echo '5000~10000';
                        break;
                    case 'grade_3':
                        echo '����1��';
                        break;
                }

            ?>
        </p>
        <p>
            3. ����ʱ��ʼ��֧�̵��뷨�����������֧�̵Ŀ�����(<span class="red">*</span>)
            <br>
            <?php echo $formvalues["think"]?>
        </p>
        <p>
            4. ���Ƿ����֧�������ڵķ��գ�Ӧ�����Ӧ����Щ���ա�(<span class="red">*</span>)
            <br><?php echo $formvalues["risk"]?>
        </p>
        <p>
            5. ���ڲ���֧�̹����������Լ��к�������ϣ������ʲô��(<span class="red">*</span>)<br>
            <?php echo $formvalues["hope"]?>
        </p>
        <p>
            6. ���Ƿ�ͼƻ�ȥ֧�̵��뷨�����ܱߵ�������ѽ��й���ͨ�����Ƕ����ƻ�֧�̵��뷨���ֵ�̬�����?<br>
            <?
                switch($formvalues['support']){
                    case 'support':
                        echo '�ǳ�֧��';
                        break;
                    case 'general':
                        echo 'һ��';
                        break;
                    case 'except':
                        echo '����';
                        break;
                    case 'not_talk':
                        echo 'û�й�ͨ';
                        break;
                }
            ?>
        </p>
        <p>
            7. ���֪����ֱϵ������������ϵ��ʽ���Ա����������ļ�����ϵ����ȡ���Ƕ����ƻ�֧�̵�֧�̶ֳȡ�
            <br>
        <ul>
            <li>����:<?php echo $formvalues["lineal_name"]?></li>
            <li>��ϵ:<?php echo $formvalues["lineal_relation"]?></li>
            <li>��ϵ��ʽ:<?php echo $formvalues["lineal_num"]?></li>
        </ul>
        </p>
        <p>
            8. Ԥ��֧������:
            <?
                switch($formvalues['time']){
                    case 'term':
                        echo 'һѧ��';
                        break;
                    case 'year':
                        echo 'һ��';
                        break;
                    case 'other':
                        echo $formvalues['other_time'];
                        break;
                }
            ?>
        </p>
        <p>
            9. Ը�⿪ʼ֧�̵����ڣ�2013���＾
        </p>
        <p>
            10. �Ӻδ���Ϥ���������Ϣ:
            <?
                switch($formvalues['msg_from']){
                    case 'friend':
                        echo '����';
                        break;
                    case 'website':
                        echo 'OFS��վ';
                        break;
                    case 'weibo':
                        echo '΢��';
                        break;
                    case 'weixin':
                        echo '΢��';
                        break;
                    case 'baidu':
                        echo '�ٶ�';
                        break;
                    case 'douban':
                        echo '����';
                        break;
                    case 'other':
                        echo '����.'.$formvalues['msg_from_other'];
                        break;
                }
            ?>
        </p>
        <p>
            12. ���������<br>
            <?php echo $formvalues['other'];?>
        </p>
    </div>
</div>
