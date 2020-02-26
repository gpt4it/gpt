<?php
session_start();
require_once("db.php");
$db = new DB('localhost', 'root', '', 'freedom');
$user = $db->select('users', $_POST);
if($user) {
    $_SESSION['user'] = $user;
    header("Location: ../listnews.php");
}
else {

  header("Location: ../signin.html");
}
?>
