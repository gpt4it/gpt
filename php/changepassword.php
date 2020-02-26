<?
session_start();
require_once("db.php");
$db = new DB('localhost', 'root', '', 'freedom');
if($_SESSION['user']['password'] == $_POST['password']){
  if($_POST["newpassword"] == $_POST['newpassword2']) {
    $_POST['ID'] = $_SESSION['user']['ID'];
    $db->update('users',$_POST);
    header('Location: ../listnews.php');
  }
  else {
    header("Location: ../changepassword.html");
  }
}
else {
    header("Location: ../changepassword.html");
}
?>
