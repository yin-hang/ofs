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
			print "<br>��������ɹ�����л���İ��ģ��ɵ�<a href=\"/bbs/\">��̳</a>��һ�����۵��������֧�̾���<br>";
			//TODO: �ɸ�Щ�ο����� 
		} else if ($stat <= $STAT_FAIL) {
			print "���ź����˴���δ������ɹ�����л���İ��ģ��ڴ������ٴκ�����<br>";
		} else {
			$emph = $stat2emph[$stat];
		//	require("flow.php");
			require_once('top.php');
			if ($stat == $STAT_LESSONPLAN) {
				?>
				<form enctype="multipart/form-data" action="deallessonplan.php" method="post" name="form2" >
					������һ�ڿεĽ̰��ϴ��� 
					<input type=file name="lessonplan" /> <br>
					<input type=submit value="�ύ" name="apply" />
					<br><br>
				</form>
				<?php
					//<input type=submit value="����" name="save" />
			}
			print "<br>�����ĵȴ�����л���İ��ģ��ɵ�<a href=\"/bbs/\">��̳</a>��һ������Ŀ�ĵ������֧�̾���<br><hr>����������������Ϣ(���ύ��ˣ����������޸�)��<br>";
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