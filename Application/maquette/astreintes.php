<?php
session_start();

$isset = isset($_SESSION['login']);

if ($isset) 
{
    $ifConnect = "Deconnexion";
}
else {
    $ifConnect = "Connexion";
} 

?>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Templates\accueil\accueil.css"/>
        <link rel="stylesheet" href="Templates\bootstrap\css\bootstrap.css"/>
        <title>Astreintes- Asac</title>
    </head>
    <?php include 'Templates/header/header.php';?>

    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Liste des Projets
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>