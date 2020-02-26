<?
require_once("db.php");
$db = new DB('localhost', 'root', '', 'freedom');

$user = $db->select("users",$_POST);
if(md5($_POST['password']) == $user['password']) {
  $db->delete('user',$_POST);
  session_destroy();
  header("Location: ../listnews.php");

}
else {

  header("Location: ../listnews.php");
}
?>
