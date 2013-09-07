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
1. 您是否阅读过《<a href = "http://www.ourfreesky.org/ofs/recruit/teacher.html#1">申请人须知</a>》，并对其中提到的所有条款均已知悉？
<br><input type=checkbox name="notice" <?php if(isset($formvalues["notice"]) && $formvalues["notice"]=="on") echo "checked"; ?> />已知悉</p>
<p>2. 您目前的工作或学习是否属在职？
<ul>
    <li><input type=radio value="quitted" name=work <?php if($formvalues["work"]=="quitted") echo "checked"; ?> />已不在职</li>
    <li> 如果您是在职，若通过申请，您计划：</li>
    <li><input type=radio value="quit" name=work <?php if($formvalues["work"]=="quit") echo "checked"; ?> />离职去支教</li>
    <li><input type=radio value="leave" name=work <?php if($formvalues["work"]=="leave") echo "checked"; ?> />向单位请假</li>
    <li>
        <input type=radio value="other" name=work <?php if($formvalues["work"]=="other") echo "checked"; ?> />以其他方式保留职位
        <input type=text size=30  value="<?php echo $formvalues["workdetail"]?>" name="workdetail" />再去支教
    </li>
</ul>
<p>3. 简述您的经济来源与状况，并权衡是否可支付支教过程中的基本生活费、路费的同时还能保留适当的备用金（支教活动没有任何经济报酬）。
    <br><input type=text size=80  value="<?php echo $formvalues["income"]?>" name="income" />
</p>
<p>
    4. 您何时开始有支教的想法？请简述您对支教的看法。
    <br><input type=text size=80  value="<?php echo $formvalues["think"]?>" name="think" />
</p>
<p>
    5. 您是否清楚支教所存在的风险，认为应该如何应对这些风险？
    <br><input type=text size=80  value="<?php echo $formvalues["risk"]?>" name="risk" />
</p>
<p>
    6. 对于参与支教工作，您对自己有何期望或希望贡献什么？
    <br><input type=text size=80  value="<?php echo $formvalues["hope"]?>" name="hope" />
</p>
<p>

    7. 您是否就计划去支教的想法与您周边的亲朋好友进行过沟通？他们对您计划支教的想法所持的态度如何？
    <br><input type=text size=80  value="<?php echo $formvalues["friend"]?>" name="friend" />
</p>
<p>

    8. 请告知您的直系长辈亲属的联系方式，以便我们与您的家人联系，获取他们对您计划支教的支持程度。
    <br><input type=text size=80  value="<?php echo $formvalues["parent"]?>" name="parent" />
</p>
<p>

    9. 您是否愿意提供近三个月内的体检报告以便我们对您的健康状况进行简单的评估。
    <br><input type=checkbox name="healthy" <?php if(isset($formvalues["healthy"]) && $formvalues["healthy"]=="on") echo "checked"; ?> />是
</p>
<div class="til2">个人基本资料</div>
<div class="base_tab">
    <dl class="item">
        <dt class="text">真实姓名<span class="red">*</span></dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["name"]?>" name="name" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">性别<span class="red">*</span></dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["sex"]?>" name="sex" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">出生年份<span class="red">*</span></dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["birth"]?>" name="birth" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">教育程度</dt>
        <dd class="ip"><input type=text size=30  value="<?php echo $formvalues["edu"]?>" name="edu" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">婚否</dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["marriage"]?>" name="marriage" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">民族</dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["hometown"]?>" name="hometown" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">籍贯</dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["name"]?>" name="name" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">现居住地</dt>
        <dd class="ip"><input type=text size=30  value="<?php echo $formvalues["liveplace"]?>" name="liveplace" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">手机</dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["mobile"]?>" name="mobile" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">其他电话</dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["tel"]?>" name="tel" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">email</dt>
        <dd class="ip"><input type=text size=10  value="<?php echo $formvalues["email"]?>" name="email" /></dd>
        <dd class="tip"></dd>
    </dl>
    <dl class="item">
        <dt class="text">通行地址</dt>
        <dd class="ip"><input type=text size=30  value="<?php echo $formvalues["addr"]?>" name="addr" /></dd>
        <dd class="tip"></dd>
    </dl>
</div>
<div class="til2">受教育经历</div>
<table class="edu_tab">
    <tr><td>开始时间</td><td>结束时间</td><td>学校名称</td></tr>
    <tr><td><input type=text size=10  value="<?php echo $formvalues["edubegintime1"]?>" name="edubegintime1" /></td><td>
            <input type=text size=10  value="<?php echo $formvalues["eduendtime1"]?>" name="eduendtime1" /></td><td>
            <input type=text size=20  value="<?php echo $formvalues["edu1"]?>" name="edu1" />(中学)</td>
    </tr>
    <tr><td><input type=text size=10  value="<?php echo $formvalues["edubegintime2"]?>" name="edubegintime2" /></td><td>
            <input type=text size=10  value="<?php echo $formvalues["eduendtime2"]?>" name="eduendtime2" /></td><td>
            <input type=text size=20  value="<?php echo $formvalues["edu2"]?>" name="edu2" />(大学)</td>
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
<div class="til2">工作经历</div>
<table class="work_tab">
    <tr><td>开始时间</td><td>结束时间</td><td>单位名称</td><td>职务</td></tr>
    <?php for($i=1;$i<=4;$i++) { ?>
        <tr><td><input type=text size=10  value="<?php echo $formvalues["jobbegintime$i"] ?>" name="jobbegintime<?php echo $i?>" /></td><td>
                <input type=text size=10  value="<?php echo $formvalues["jobendtime$i"] ?>" name="jobendtime<?php echo $i?>" /></td><td>
                <input type=text size=20  value="<?php echo $formvalues["job$i"] ?>" name="job<?php echo $i?>" /></td><td>
                <input type=text size=10  value="<?php echo $formvalues["positon$i"] ?>" name="positon<?php echo $i?>" /></td>
        </tr>
    <?php } ?>
</table>
<div class="til2">其他资料</div>
<div>
    <h4>紧急联络人信息</h4>
    姓名：<input type=text size=10  value="<?php echo $formvalues["EmergencyContactName"]?>" name="EmergencyContactName" /><br/>
    联系方式：<input type=text size=20  value="<?php echo $formvalues["EmergencyContact"]?>" name="EmergencyContact" /><br/>
    工作单位：<input type=text size=25  value="<?php echo $formvalues["EmergencyContactWork"]?>" name="EmergencyContactWork" />
</div>
<h4>家庭成员信息</h4>
<table class="family_tab">
    <tr><td>家庭成员</td><td>工作单位</td></tr>
    <?php
    for($i=1; $i<=4; $i++) {
        $inputname = "folk";
        print "<tr><td><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td>";
        $inputname = "folkjob";
        print "<td><input type=text size=20  value=\"".$formvalues["$inputname$i"]."\" name=\"$inputname$i\" /></td></tr>";
    }
    ?>
</table>
<h4>其他信息</h4>
<table>
    <tr><td>个人特别技能及资历：</td><td><input type=text size=73  value="<?php echo $formvalues["ability"]?>" name="ability" />
        </td></tr><tr><td>有否伤残/病历： </td><td><input type=checkbox class="checkbox" name="ill"  <?php if(isset($formvalues["ill"]) && $formvalues["ill"]=="on") echo "checked"; ?> />有<input type=text size=69  value="<?php echo $formvalues["illdetail"]?>" name="illdetail" />
        </td></tr><tr><td>有否支教经验： </td><td><input type=checkbox class="checkbox" name="exp"  <?php if(isset($formvalues["exp"]) && $formvalues["exp"]=="on") echo "checked"; ?>  />有<input type=text size=69  value="<?php echo $formvalues["expdetail"]?>" name="expdetail" />
        </td></tr><tr><td>预计支教期限：</td><td>
            <input type=radio name="supporttime" value="1" <?php if($formvalues["supporttime"]=="1") echo "checked"; ?> />半年
            <input type=radio name="supporttime" value="2" <?php if($formvalues["supporttime"]=="2") echo "checked"; ?> />一年
            <input type=radio name="supporttime" value="0" <?php if($formvalues["supporttime"]=="0") echo "checked"; ?> />其它<input type=text size=20  value="<?php echo $formvalues["supporttimedetail"]?>" name="supporttimedetail" />
        </td></tr><tr><td>愿意开始支教的日期：</td><td><input type=text size=20  value="<?php echo $formvalues["supportstart"]?>" name="supportstart" />
        </td></tr><tr><td>从何处得悉本服务的消息：</td><td><input type=text size=20  value="<?php echo $formvalues["infosrc"]?>" name="infosrc" />
        </td></tr><tr><td>
            照片（半身生活照为佳）：</td><td>
            <?php
            if(is_file($photofilename)) {
                echo "(不动可保留上次上传的)"; //" $photofilename";
                echo "<input type=hidden name=\"lastphotopath\" value=\"$photofilename\" />";
            }
            ?>
            <input type=file name="photo" />
        </td></tr>
</table>
<hr>
其他意见：<br>
<textarea  name="other"></textarea>
<hr>

