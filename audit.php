<?php
	require("audittop.php");
?>	
	<form action="audit1user.php" method="get" name="auditqueryform" >
		ֱ�Ӳ�ѯ����״̬ �� <input type=text size=20 name="user" /> <input type=submit value="��ѯ" name="query" />
		<br>
	</form>
<?php
	//���ݲ���������������   
	if (isset($_GET['type'])) {
		$reqstat = $_GET['type'];
		echo "<table> <tr><td>OFS�ʺ�</td><td>�ϴ��޸�ʱ��</td></tr>";
		if ($reqstat == $STAT_RECHECKED_PLANMODIED) {
			//��״̬������
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
		print "�����������<br><a href=\"$addr?type=$STAT_RECHECKING\">������</a><br>";
		print "<a href=\"$addr?type=$STAT_RECHECKED_PLANMODIED\">����˽̰�</a><br>";
		print "<a href=\"$addr?type=$STAT_APPLYED\">������</a><br>";

		print "<hr><a href=\"$addr?type=$STAT_APPLYING\">��������</a><br>";
		print "<a href=\"$addr?type=$STAT_RECHECKED_NOPLAN\">�������,�����޸Ľ̰�</a><br>";
	}

	include("views/widget/bottom.php");
?>
