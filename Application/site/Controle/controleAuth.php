<?php 
session_start();
require '../Class/Person.php';
include '../DAO/connectionAsac.php';

$user = unserialize($_SESSION['user']);
$login = htmlspecialchars($_POST['login']);
$_SESSION['login'] = $login;
$user->setLogin($login);
$password = htmlspecialchars($_POST['password']);
$_SESSION['password'] = $password;
$user->setPassword($password);
echo "OK fin env";

$nomBaseSql = $asac->query('select * from application_user where Login ="'.$login.';"');
while ($nomBase = $nomBaseSql->fetch())
 {

     if  ($login == $nomBase['Login'])
     {
         echo("connection base ok    " . $nomBase['nom']);
         $active = true;
         $user->setActive($active);
     }

     elseif ($login != $nomBase['nom'])
     {
         echo('User Invalid');
     }

     else
     {
     echo("erreur dans la condition");
     }
 };
 $nomBaseSql->closeCursor();
 echo ($user->getLogin());
?>