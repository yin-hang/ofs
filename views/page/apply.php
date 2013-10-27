<?php
/**
 * Author: jiangzhibin
 * Date: 13-10-27
 * Time: 2013-10-27
 * Desc: 
 */
Lib_View::loadWidget('top.php');
?>
<div class="container">
    <div class="main">
        <h1>OFS支教志愿者申请表</h1>
        <form enctype="multipart/form-data" action="applyt.php" method="post" name="form1" >
            <?php Lib_View::loadWidget('form.php')?>
        </form>
</div>
</div>
<?php
    Lib_View::loadWidget('bottom.php');
?>