<?php
	require("audittop.php");
	$u = $_GET['user'];
	$row = DB::queryFirstRow("select * from $APPLYTABLE where user = '".$u."'");
	if ($row == NULL) {
		print $u." δ����";
	} else {
		$stat = $row['stat'];
		if ($stat == $STAT_APPLYED) {
			$desc = "����";
		} else if ($stat == $STAT_RECHECKING 
			|| $stat == $STAT_PLANMODIED
			|| $stat == $STAT_LESSONPLAN
		) {
			$desc = "����";
		} else {
			$desc = "ERROR";
		} 
		/* switch ($stat) {
		case $STAT_RECHECKING:
		case $STAT_PLANMODIED:
		case $STAT_LESSONPLAN:
			$desc = "����";
		case $STAT_APPLYED:
		*/
		if ($desc != "ERROR") {
?>
			<form  action="dealaudit.php" method="post" name="auditform1" >
				<input type=hidden name="user" value="<?php echo $u ?>" />
				<input type=hidden name="oldstat" value="<?php echo $stat ?>" />
				<input type=submit value="<?php echo $desc ?>ͨ��" name="succ" />
				<input type=submit value="<?php echo $desc ?>��ͨ��" name="fail" />
			</form>
<?php
		} //else {
			if ($stat == $STAT_PLANMODIED 
				|| $stat == $STAT_RECHECKED_PLANMODIED) {
				$desc = "�̰����";
			?>
				<form enctype="multipart/form-data" action="dealaudit.php" method="post" name="planreviewform">
				<input type=hidden name="user" value= <?php echo $u ?> />
				<input type=hidden name="oldstat" value="<?php echo $stat ?>" />
				<input type=submit value="<?php echo $desc ?>ͨ��" name="planok" />
				<input type=submit value="<?php echo $desc ?>��ͨ��,��ͨ�޸���" name="planbad" />
				</form>
			<?php
			}

		//}
		$username = $u; //��formȡ��  
		print "<hr>���԰棺�ݲ������޸���Ϣ�����Բ鿴<br>";
		require("showinfo.php");
		//<form action="audit1user.php" method="post" name="reviewform" >
		//���������Ҳ���޸�
		?>
		<?php
	}
	include("bottom.php");
?>
