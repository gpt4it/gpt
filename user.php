<?php
require_once("header.php");
$users = $db->select("users");
?>

<? foreach ($users as $val) { ?>
    <p><?=$val['login'] ?>  <?=$val['ID']?></p>
<? } ?>

<? require_once('footer.php'); ?>