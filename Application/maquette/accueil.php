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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Templates\accueil\accueil.css"/>
        <link rel="stylesheet" href="Templates\bootstrap\css\bootstrap.css"/>
        <title>Accueil- Asac</title>
    </head>
    
  <body>
    <header>
      <?php include 'Templates/header/header.php';?> 
    </header>

    <div>
        <p>
        Bienvenue sur la page de l'application maquette, pour avoir une vision complete depuis votre status, merci de vous connecter.
        </p>
    </div>

<div id="accueilBody">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Projets</th>
      <th scope="col">Details</th>
      <th scope="col">Progression</th>
      <th scope="col">Alert(s) <span class="glyphicon glyphicon-bell" aria-hidden="true"></span></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tenue à la charge</th>
      <td>Les details de la descriptions sont à definir avec le client</td>
      <td>
      <div class="progress">
<div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
<span>60% effectué </span>
</div>
</div>
    </td>
      <td><span class="badge">4</span></td>
    </tr>
    <tr>
      <th scope="row">Convergence Drive</th>
      <td>Les details de la descriptions sont à definir avec le client</td>
      <td>
      <div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
0%
</div>
</div> 
      
      </td>
      <td>A demarrer</td>
    </tr>
    <tr>
      <th scope="row">Optimisation Décode</th>
      <td>Les details de la descriptions sont à definir avec le client</td>
      <td>
      <div class="progress">
<div class="progress-bar progress-bar-success progress-bar-striped.active role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
<span>100% - terminé (success)</span>
</div>
</div>
      </td>
      <td>-</td>
    </tr>
  </tbody>
</table>
</div>

<div id = "projetBody">
    <?php include 'Templates/accueil/projetBody.php';?>  
</div>

    </body>
</html>

<!-- Partie CSS à inclure dans un fichier à part -->

<style type="text/css">
    #altranLogo
    {
        width: 160px;
        float: left;
        padding-right: 10px;
        padding-left: 10px;
        padding-top: 1px;
        border: 2px solid #007EAF;
        border-radius: 10px;
        margin-right: 5px;
    }
    #projetBody
    {
        display: none;
    }
    </style>

<script type="text/javascript" src="JS/script.js"></script>
