<?php
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
				//echo $formvalues["$info1index"]." CHANGE ";
				$formvalues["$info1index"] = substr($info1[1], 0, -2);
				//echo $formvalues[$info1index]." BECAUSE ";
				//print_r($info1); //echo "$key => $value<hr>";
				//echo "<hr>";
			}
		}
		//$i=4; echo "\$formvalues[eduendtime$i] = '".$formvalues["eduendtime$i"]."'<hr>";
	}
?>
1. ���Ƿ��Ķ�����<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">��������֪</a>�������������ᵽ�������������֪Ϥ��
<br><input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?> />��֪Ϥ</p>                                        
<p>2. ��Ŀǰ�Ĺ�����ѧϰ�Ƿ�����ְ��
<br>                                          
<input type=radio value="quitted" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> >�Ѳ���ְ</input><br>
���������ְ����ͨ�����룬���ƻ���<br>
<input type=radio value="quit" name=work <?php if($formvalues["work"]=="quit") echo "checked"; ?> >��ְȥ֧��</input><br>
<input type=radio value="leave" name=work <?php if($formvalues["work"]=="leave") echo "checked"; ?> >��λ���</input><br>
<input type=radio value="other" name=work <?php if($formvalues["work"]=="other") echo "checked"; ?> >��������ʽ����ְλ</input>
<input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" /><br>
��ȥ֧��</p>
                                          
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
<hr>
<h3>���˻������ϣ�</h3>
<table>
<tr>
<td>��ʵ����</td><td><input type=text size=10  value="<?php echo $formvalues["name"]?>" name="name" /></td>
<td>�Ա�</td><td><input type=text size=10  value="<?php echo $formvalues["sex"]?>" name="sex" /></td>
<td>�������</td><td><input type=text size=10  value="<?php echo $formvalues["birth"]?>" name="birth" /></td>
<td>�����̶�</td><td><input type=text size=30  value="<?php echo $formvalues["edu"]?>" name="edu" /></td>
</tr><tr>
<td>���</td><td><input type=text size=10  value="<?php echo $formvalues["marriage"]?>" name="marriage" /></td>
<td>����</td><td><input type=text size=10  value="<?php echo $formvalues["nation"]?>" name="nation" /></td>
<td>����</td><td><input type=text size=10  value="<?php echo $formvalues["hometown"]?>" name="hometown" /></td>
<td>�־�ס��</td><td><input type=text size=30  value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></td>
</tr><tr>
<td>�ֻ�</td><td><input type=text size=10  value="<?php echo $formvalues["mobile"]?>" name="mobile" /></td>
<td>�����绰</td><td><input type=text size=10  value="<?php echo $formvalues["tel"]?>" name="tel" /></td>
<td>Email</td><td><input type=text size=10  value="<?php echo $formvalues["email"]?>" name="email" /></td>
<td>ͨ�ŵ�ַ</td><td><input type=text size=30  value="<?php echo $formvalues["addr"]?>" name="addr" /></td>
</tr>
</table>
<br>�ܽ���������
<table>
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
<tr><td><input type=text size=10  value="<?php echo $formvalues["edubegintime$i"] ?>" name="edubegintime<?php echo $i?>" /></td><td>
<input type=text size=10  value="<?php echo $formvalues["eduendtime$i"] ?>" name="eduendtime<?php echo $i?>" /></td><td>
<input type=text size=20  value="<?php echo $formvalues["edu$i"] ?>" name="edu<?php echo $i?>" /></td>
</tr>
<?php } ?>
</table>
<br>����������
<table>
<tr><td>��ʼʱ��</td><td>����ʱ��</td><td>��λ����</td><td>ְ��</td></tr>
<?php for($i=1;$i<=4;$i++) { ?>
<tr><td><input type=text size=10  value="<?php echo $formvalues["jobbegintime$i"] ?>" name="jobbegintime<?php echo $i?>" /></td><td>
<input type=text size=10  value="<?php echo $formvalues["jobendtime$i"] ?>" name="jobendtime<?php echo $i?>" /></td><td>
<input type=text size=20  value="<?php echo $formvalues["job$i"] ?>" name="job<?php echo $i?>" /></td><td>
<input type=text size=10  value="<?php echo $formvalues["positon$i"] ?>" name="positon<?php echo $i?>" /></td>
</tr>
<?php } ?>
</table>
<hr>
<h3>�������ϣ�</h3>
<table>
<tr><td>��ͥ��Ա</td><td>������λ</td></tr>
<?php
	for($i=1; $i<=4; $i++) {
		$inputname = "folk";
		print "<tr><td><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td>";
		$inputname = "folkjob";
		print "<td><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td></tr>";
	}
?>
<br>���������ˣ�
������<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" />
��ϵ��ʽ��<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" />
������λ��<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
<table>
<tr><td>�����ر��ܼ�������</td><td><input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
</td></tr><tr><td>�з��˲�/������ </td><td><input type=checkbox name="ill"  <?php if(isset($formvalues["ill"]) && $formvalues["ill"]=="on") echo "checked"; ?> />��<input type=text size=69  value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
</td></tr><tr><td>�з�֧�̾��飺 </td><td><input type=checkbox name="exp"  <?php if(isset($formvalues["exp"]) && $formvalues["exp"]=="on") echo "checked"; ?>  />��<input type=text size=69  value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
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
<textarea cols=80 rows=10 name="other">
</textarea>

