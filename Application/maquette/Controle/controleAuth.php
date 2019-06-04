<?php 
session_start();

$login = htmlspecialchars($_POST['login']);
$password = htmlspecialchars($_POST['password']);


if ($login == "rarnaud" || $password == "test"){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    $_SESSION['profilConsultant'] = 0;

    header('Location:../accueil.php');
    exit();
}
else {
    echo("Identifiant ou mot de passe invalide");
}

?>