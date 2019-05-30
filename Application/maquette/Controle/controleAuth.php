<?php 
session_start();

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);


if ($login == "rarnaud" || $password == "test"){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header('Location:../accueil.php');
    exit();
}
else {
    echo("Erreur");
}