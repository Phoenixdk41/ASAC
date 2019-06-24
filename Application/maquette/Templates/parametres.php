<?php  
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/Model/Env/functions.php';
include $_SERVER['DOCUMENT_ROOT'].'/Model/Db/sql.php';
$ifConnect = ifConnect();
$profilConsultant = profilConsultant();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="..\Templates\accueil\accueil.css"/>
        <link rel="stylesheet" href="..\Templates\bootstrap\css\bootstrap.css"/>
        <title>Parametres- Asac</title>
    </head>
    
  <body>

<header>
    <?php buildHeader($ifConnect,$profilConsultant);?> 
</header>

<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter un consultant</button></br></br>
    <form method="post" action="../Db/addConsultant.php">
        <label>Nom du consultant </label> : <input type="text" name="nameConsultantAdd"/></br></br>
        <label>Mot de passe (temporaire) </label> : <input type="text" name="passwordConsultantAdd"/>
    </form></br></br>

    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span> Supprimer un consultant</button></br></br>
    <form method="post" action="../Db/delConsultant.php">
        <label>Nom du consultant </label> : <input type="text" name="nameConsultantDel"/></br></br>
    </form>
