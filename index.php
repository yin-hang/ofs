<?php
require("user.php");
?>

<html>
<head>
</head>
<body>
    <?php if(!$_user['is_login']){?>
        ����Ҫ��<a href="http://www.ourfreesky.org/bbs/login.php">��¼</a>֮����ܽ����������
    <?php }else{?>
    <div class="tech_pro"></div>
    <div>����״̬</div>
    <a href="/teacher/apply.php">����֧��</a>
    <div>
        <ul>
            <li>������</li>
            <li>�ύʱ��</li>
            <li>����޸�ʱ��</li>
            <li>��ǰ״̬
            </li>
        </ul>
    </div>
    <a href="">�㵱ǰ��״̬</a>
    <?php }?>
</body>
</html>