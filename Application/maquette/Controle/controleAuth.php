<?php 
session_start();
require '../Class/Person.php';
include '../DAO/connectionAsac.php';

$user = $_SESSION['user'];
$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);


$donneesBdd = $asac->prepare('select * from application_user where Login = ?');
$donneesBdd->execute(array($login));

while ($base = $donneesBdd->fetch(PDO::FETCH_ASSOC))
{
      if ($login == $base['Login'] && $password == $base['Password'])
      {
          echo("connection base ok " . $base['Login']);
          $_SESSION['connecter'] = 1;
          
          header('location: ../accueil.php');
      }

      elseif ($login != $base['Login'])
      {
          echo("Nom d'utilisateur ou mot de passe invalide ! /n M");
          $_SESSION['connecter'] = 0;
          header('location: ../accueil.php');
      }

      else
      {
         echo("erreur dans la condition");
         $_SESSION['connecter'] = 0;
         header('location: ../accueil.php');
      }
  };

$donneesBdd->closeCursor();
?>