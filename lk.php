<?
  if($_SESSION['user']) {?>)
    <a href="php/delete.php">Удалить аккаунт</a>
    <br>
    <a href="changepassword.html">Сменить пароль</a>
    <br>
    <a href="php/signout.php">Выход</a>
<?}
else {
  ?>
    <a href="signin.html">Вход</a>
  <?
}?>
