<?php
    require("user.php");
	if(isset($_user['is_login']) && $_user['is_login']){
		require_once ("db.php");
		$stat = 0;
		$row = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$_user['name']."'");
        $stat = $row['stat'];
		if ($stat == $STAT_APPLYING) {
			require("applyframe.php");
		} else if ($stat >= $STAT_SUCC) {
			$emph = $EMPH_SUCC;
			print "<br>您已申请成功，感谢您的爱心！可到<a href=\"/bbs/\">论坛</a>进一步讨论当地情况和支教经验<br>";
			//TODO: 可给些参考链接 
		} else if ($stat <= $STAT_FAIL) {
			print "很遗憾，此次您未能申请成功，感谢您的爱心，期待与您再次合作！<br>";
		} else {
			$emph = $stat2emph[$stat];
		//	require("flow.php");
			require_once('top.php');
			if ($stat == $STAT_LESSONPLAN) {
				?>
				<form enctype="multipart/form-data" action="deallessonplan.php" method="post" name="form2" >
					请制作一节课的教案上传： 
					<input type=file name="lessonplan" /> <br>
					<input type=submit value="提交" name="apply" />
					<br><br>
				</form>
				<?php
					//<input type=submit value="保存" name="save" />
			}
			print "<br>请耐心等待，感谢您的爱心！可到<a href=\"/bbs/\">论坛</a>进一步讨论目的地情况和支教经验<br><hr>以下是您的申请信息(已提交审核，不能自行修改)：<br>";
			$username = $_user['name'];
?>
			<div>
			    <div class="main">
				<?include("form.php");?>
				</div>
			</div>
<?
		}
	} else {
		$emph = 0; 
		header('Location:http://www.ourfreesky.org/bbs/login.php');
	    include("bottom.php");
    }
?>