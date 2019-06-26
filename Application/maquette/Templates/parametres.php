<?php  
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/Model/Env/functions.php';
include $_SERVER['DOCUMENT_ROOT'].'/Model/Db/sql.php';
$pathToDel = $_SERVER['DOCUMENT_ROOT'].'/Model/Db/delConsultant';
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
<p>
<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Ajouter un consultant</button></br></br>
    <form method="post" action="../Model/Db/addConsultant.php">
        <label>Nom du consultant </label> : <input type="text" name="nameConsultantAdd"/>
        <label>Prénom </label> : <input type="text" name="firstNameConsultant"/></br></br>
        <label>Mot de passe (temporaire) </label> : <input type="text" name="passwordConsultantAdd"/>
        <label>Login </label> : <input type="text" name="loginConsultantAdd"/>
        <label>Email </label> : <input type="text" name="mailConsultantAdd"/>
        <button id = "toValidateAdd" type="submit" class="btn btn-lg">Ajouter</button>
    </form>

    
</p>

    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-minus"></span> Supprimer un consultant</button></br></br>
    <form method="post" action="../Model/Db/delConsultant.php">
        <label>Nom du consultant </label> : <input type="text" name="nameConsultantDel"/></br></br>
        <button id = "toValidateDel" type="submit" class="btn btn-lg">Supprimer</button></br></br>
    </form>
    <p> Liste des consultants dans en base </p>   
<?php

$countlistView = $asac->query('select * from application_user;');
while ($listView = $countlistView->fetch())
{
?>
 
<ul class="list-group">
  <li class="list-group-item"> <?php echo ($listView['Last_Name'] . " " . $listView['First_Name']); ?> </li>
</ul>

<?php 
}
$countlistView->closeCursor();
?>