<small>���̣�
<?php 
	$flows = array("bbsע��/��¼","�Ķ�����������֪��","�ύ������","����","��һ�ݽ̰�","���� �� �̰����ͨ��","��̨�����֤","��ǰ׼��","������ѵ","����֧�̵ص�");
	$flowscnt = count($flows);
	if(!isset($emph)) {
		$emph = -1;
	}
	for($i=0; $i<$flowscnt; $i++) {
		if ($emph == $i) {
			echo "<strong>";
			echo "��".$flows[$i];
			echo "</strong>";
		} else {
			echo "��".$flows[$i];
		}

	}
?>
</small><br>
�����ڵ�״̬�ǣ�
<?php
	if(isset($stat)) {
		echo "[$stat]";
	}
	if(isset($flows[$emph])){
		echo $flows[$emph];
	}
?>
<br>
