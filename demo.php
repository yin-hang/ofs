<html>
<head>
    <title>Welcome to OFS</title>
    <meta charset="GBK">
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/libs/css/bootstrap-responsive.css"/>
    <link rel="stylesheet" type="text/css" href="/teacher/static/css/teacher.css"/>
</head>
<body>
<div class="header">
    <div class="left"><a href="/"><img src="/teacher/static/img/ofs_logo.gif" width="240" height="100"/></a></div>
</div>
<div class="container">
    <div class="main">
        <h1>OFS֧��־Ը�������</h1>
        <form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
            <div class="til2">����ǰ�������ؿ����������⣺</div>
            1. ���Ƿ��Ķ�����<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">��������֪</a>�������������ᵽ�������������֪Ϥ��
            <br><input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?> />��֪Ϥ</p>
            <p>2. ��Ŀǰ�Ĺ�����ѧϰ�Ƿ�����ְ��
                <ul>
                    <li><input type=radio value="quitted" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />�Ѳ���ְ</li>
                    <li> ���������ְ����ͨ�����룬���ƻ���</li>
                    <li><input type=radio value="quit" name=work <?php if($formvalues["work"]=="quit") echo "checked"; ?> />��ְȥ֧��</li>
                    <li><input type=radio value="leave" name=work <?php if($formvalues["work"]=="leave") echo "checked"; ?> />��λ���</li>
                    <li>
                        <input type=radio value="other" name=work <?php if($formvalues["work"]=="other") echo "checked"; ?> />��������ʽ����ְλ
                        <input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" />��ȥ֧��
                    </li>
                </ul>
            <p>3. �������ľ�����Դ��״������Ȩ���Ƿ��֧��֧�̹����еĻ�������ѡ�·�ѵ�ͬʱ���ܱ����ʵ��ı��ý�֧�̻û���κξ��ñ��꣩��
                <br><input type=text size=80  value="<?php echo $formvalues["income"]?>" name="income" />
            </p>
            <p>
                4. ����ʱ��ʼ��֧�̵��뷨�����������֧�̵Ŀ�����
                <br><input type=text size=80  value="<?php echo $formvalues["think"]?>" name="think" />
            </p>
            <p>
                5. ���Ƿ����֧�������ڵķ��գ���ΪӦ�����Ӧ����Щ���գ�
                <br><input type=text size=80  value="<?php echo $formvalues["risk"]?>" name="risk" />
            </p>
            <p>
                6. ���ڲ���֧�̹����������Լ��к�������ϣ������ʲô��
                <br><input type=text size=80  value="<?php echo $formvalues["hope"]?>" name="hope" />
            </p>
            <p>

                7. ���Ƿ�ͼƻ�ȥ֧�̵��뷨�����ܱߵ�������ѽ��й���ͨ�����Ƕ����ƻ�֧�̵��뷨���ֵ�̬����Σ�
                <br><input type=text size=80  value="<?php echo $formvalues["friend"]?>" name="friend" />
            </p>
            <p>

                8. ���֪����ֱϵ������������ϵ��ʽ���Ա����������ļ�����ϵ����ȡ���Ƕ����ƻ�֧�̵�֧�̶ֳȡ�
                <br><input type=text size=80  value="<?php echo $formvalues["parent"]?>" name="parent" />
            </p>
            <p>

                9. ���Ƿ�Ը���ṩ���������ڵ���챨���Ա����Ƕ����Ľ���״�����м򵥵�������
                <br><input type=checkbox name="healthy" <?php if(isset($formvalues["healthy"]) && $formvalues["healthy"]=="on") echo "checked"; ?> />��
            </p>
            <div class="til2">���˻�������</div>
            <div class="base_tab">
                <dl class="item">
                    <dt class="text">��ʵ����<span class="red">*</span></dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["name"]?>" name="name" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">�Ա�<span class="red">*</span></dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["sex"]?>" name="sex" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">�������<span class="red">*</span></dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["birth"]?>" name="birth" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">�����̶�</dt>
                    <dd class="ip"><input type=text size=30  value="<?php echo $formvalues["edu"]?>" name="edu" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">���</dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["marriage"]?>" name="marriage" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">����</dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["hometown"]?>" name="hometown" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">����</dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["name"]?>" name="name" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">�־�ס��</dt>
                    <dd class="ip"><input type=text size=30  value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">�ֻ�</dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["mobile"]?>" name="mobile" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">�����绰</dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["tel"]?>" name="tel" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">email</dt>
                    <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["email"]?>" name="email" /></dd>
                    <dd class="tip"></dd>
                </dl>
                <dl class="item">
                    <dt class="text">ͨ�е�ַ</dt>
                    <dd class="ip"><input type=text size=30  value="<?php echo $formvalues["addr"]?>" name="addr" /></dd>
                    <dd class="tip"></dd>
                </dl>
            </div>
            <div class="til2">�ܽ�������</div>
            <table class="edu_tab">
                <tr><td>��ʼʱ��</td><td>����ʱ��</td><td>ѧУ����</td></tr>
                <tr><td><input type=text size=10  value="<?php echo $formvalues["edubegintime1"]?>" name="edubegintime1" /></td><td>
                        <input type=text size=10  value="<?php echo $formvalues["eduendtime1"]?>" name="eduendtime1" /></td><td>
                        <input type=text size=20  value="<?php echo $formvalues["edu1"]?>" name="edu1" />(��ѧ)</td>
                </tr>
                <tr><td><input type=text size=10  value="<?php echo $formvalues["edubegintime2"]?>" name="edubegintime2" /></td><td>
                        <input type=text size=10  value="<?php echo $formvalues["eduendtime2"]?>" name="eduendtime2" /></td><td>
                        <input type=text size=20  value="<?php echo $formvalues["edu2"]?>" name="edu2" />(��ѧ)</td>
                </tr>
                <?php for($i=3;$i<=4;$i++) { ?>
                    <tr>
                        <td>
                            <input type=text size=10  value="<?php echo $formvalues["edubegintime$i"] ?>" name="edubegintime<?php echo $i?>" />
                        </td>
                        <td>
                            <input type=text size=10  value="<?php echo $formvalues["eduendtime$i"] ?>" name="eduendtime<?php echo $i?>" />
                        </td>
                        <td>
                            <input type=text size=20  value="<?php echo $formvalues["edu$i"] ?>" name="edu<?php echo $i?>" />
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <div class="til2">��������</div>
            <table class="work_tab">
                <tr><td>��ʼʱ��</td><td>����ʱ��</td><td>��λ����</td><td>ְ��</td></tr>
                <?php for($i=1;$i<=4;$i++) { ?>
                    <tr><td><input type=text size=10  value="<?php echo $formvalues["jobbegintime$i"] ?>" name="jobbegintime<?php echo $i?>" /></td><td>
                            <input type=text size=10  value="<?php echo $formvalues["jobendtime$i"] ?>" name="jobendtime<?php echo $i?>" /></td><td>
                            <input type=text size=20  value="<?php echo $formvalues["job$i"] ?>" name="job<?php echo $i?>" /></td><td>
                            <input type=text size=10  value="<?php echo $formvalues["positon$i"] ?>" name="positon<?php echo $i?>" /></td>
                    </tr>
                <?php } ?>
            </table>
            <div class="til2">��������</div>
            <div>
                <h4>������������Ϣ</h4>
                ������<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" /><br/>
                ��ϵ��ʽ��<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" /><br/>
                ������λ��<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
            </div>
            <h4>��ͥ��Ա��Ϣ</h4>
            <table class="family_tab">
                <tr><td>��ͥ��Ա</td><td>������λ</td></tr>
                <?php
                for($i=1; $i<=4; $i++) {
                    $inputname = "folk";
                    print "<tr><td><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td>";
                    $inputname = "folkjob";
                    print "<td><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td></tr>";
                }
                ?>
            </table>
            <h4>������Ϣ</h4>
            <table>
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
            <hr>
            ���������<br>
            <textarea  name="other"></textarea>
            <hr>
            <input class="btn btn-large" type=submit class="" value="����" name="save" />
            <input class="btn btn-large btn-primary" type=submit class="" value="����" name="apply" />
        </form>
    </div>
</div>
<div class="footer">
    <span>@2013&nbsp;
        <a href="/">���ǵ�������� ������ѧ��Ŀ�飨OFS�������죩</a>
        <a href="http://www.miibeian.gov.cn" target="_blank">��ICP��13003254��</a>
    </span>
</div>
<script src="/teacher/static/libs/js/jquery-2.0.3.js"></script>
<script src="/teacher/static/libs/js/bootstrap.min.js"></script>
<script src="/teacher/static/js/teacher.js"></script>
<script src="/teacher/static/js/apply_submit.js"></script>
</body>
</html>
