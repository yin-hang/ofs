<?php
  require("user.php");
	if(isset($_user['is_login']) && $_user['is_login']){
		require_once ("db.php");
		$stat = 0;
		$row = DB::queryFirstRow("select stat from $APPLYTABLE where user = '".$_user['name']."'");
		//foreach ($results as $row) {
			$stat = $row['stat'];
		//}
		if ($stat == $STAT_APPLYING) {
			require("applyform.php");
		} else {
			print "stat = $stat";
		}
	} else {
		$emph = 0; require("flow.php");
		require("login.php");
		include($_httprootdir."/bbs/login.php");
	}
?>
