<?php
	require("audittop.php");
?>	
	<form action="audit1user.php" method="get" name="auditqueryform" >
		直接查询此人状态 ： <input type=text size=20 name="user" /> <input type=submit value="查询" name="query" />
		<br>
	</form>
<?php
	//根据参数决定查哪类人   
	if (isset($_GET['type'])) {
		$reqstat = $_GET['type'];
		echo "<table> <tr><td>OFS帐号</td><td>上次修改时间</td></tr>";
		if ($reqstat == $STAT_RECHECKED_PLANMODIED) {
			//该状态有两个
			$reqstat = "$STAT_RECHECKED_PLANMODIED ' or stat = '$STAT_PLANMODIED";
		}
		$results = DB::query("select user,moditime from $APPLYTABLE where stat = '$reqstat'");
		foreach ($results as $row) {
			$u = $row['user'];
			print "<tr><td><a href=\"audit1user.php?user=$u\">".$u."</a></td><td>".$row['moditime']."</td></tr>";
		}
		print "</table>";
	} else {
		$addr = $_SERVER['PHP_SELF'];
		print "待审核名单：<br><a href=\"$addr?type=$STAT_RECHECKING\">待复审</a><br>";
		print "<a href=\"$addr?type=$STAT_RECHECKED_PLANMODIED\">待审核教案</a><br>";
		print "<a href=\"$addr?type=$STAT_APPLYED\">待初审</a><br>";

		print "<hr><a href=\"$addr?type=$STAT_APPLYING\">正在申请</a><br>";
		print "<a href=\"$addr?type=$STAT_RECHECKED_NOPLAN\">复审完成,仍在修改教案</a><br>";
	}

	include("bottom.php");
?>
