<?php
	require("audittop.php");
	$u = $_GET['user'];
	$row = DB::queryFirstRow("select * from $APPLYTABLE where user = '".$u."'");
	if ($row == NULL) {
		print $u." 未申请";
	} else {
		$stat = $row['stat'];
		if ($stat == $STAT_APPLYED) {
			$desc = "初审";
		} else if ($stat == $STAT_RECHECKING 
			|| $stat == $STAT_PLANMODIED
			|| $stat == $STAT_LESSONPLAN
		) {
			$desc = "复审";
		} else {
			$desc = "ERROR";
		} 
		/* switch ($stat) {
		case $STAT_RECHECKING:
		case $STAT_PLANMODIED:
		case $STAT_LESSONPLAN:
			$desc = "复审";
		case $STAT_APPLYED:
		*/
		if ($desc != "ERROR") {
?>
			<form  action="dealaudit.php" method="post" name="auditform1" >
				<input type=hidden name="user" value="<?php echo $u ?>" />
				<input type=hidden name="oldstat" value="<?php echo $stat ?>" />
				<input type=submit value="<?php echo $desc ?>通过" name="succ" />
				<input type=submit value="<?php echo $desc ?>不通过" name="fail" />
			</form>
<?php
		} //else {
			if ($stat == $STAT_PLANMODIED 
				|| $stat == $STAT_RECHECKED_PLANMODIED) {
				$desc = "教案审核";
			?>
				<form enctype="multipart/form-data" action="dealaudit.php" method="post" name="planreviewform">
				<input type=hidden name="user" value= <?php echo $u ?> />
				<input type=hidden name="oldstat" value="<?php echo $stat ?>" />
				<input type=submit value="<?php echo $desc ?>通过" name="planok" />
				<input type=submit value="<?php echo $desc ?>不通过,沟通修改中" name="planbad" />
				</form>
			<?php
			}

		//}
		$username = $u; //供form取用  
		print "<hr>测试版：暂不允许修改信息，可以查看<br>";
		require("showinfo.php");
		//<form action="audit1user.php" method="post" name="reviewform" >
		//审批意见。也可修改
		?>
		<?php
	}
	include("bottom.php");
?>
