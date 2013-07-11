<small>流程：
<?php 
  $flows = array("bbs注册/登录","阅读《申请人须知》","提交申请表格","初审","做一份教案","复审 且 教案审核通过","后台身份验证","行前准备","到京培训","到达支教地点");
	$flowscnt = count($flows);
	if(!isset($emph)) {
		$emph = -1;
	}
	for($i=0; $i<$flowscnt; $i++) {
		if ($emph == $i) {
			echo "<strong>";
			echo "—".$flows[$i];
			echo "</strong>";
		} else {
			echo "—".$flows[$i];
		}
	}
?>
</small>
<br>
