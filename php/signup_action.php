<?php
//header("Location: index.php");
require_once("db.php");
$db = new DB('localhost', 'root', '', 'freedom');
if ($_POST['login'] && $_POST["password"]) {
    //$db->query("INSERT INTO `Users`(login`,`password`) VALUE ($_POST[login], $_POST[password])");
    $db->insert('users', $_POST);
    header('Location: ../signin.html');
}

?>
