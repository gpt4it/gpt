<?
require_once("php/db.php");
$db = new DB('localhost', 'root', '', 'freedom');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    <a href="signup.html"> Registration</a><br>
    <a href="user.php">List of users </a>
    <?if($_SESSION['user']) {
      echo "Hello".$_SESSION['user']['login'];
    }?>
</header>
