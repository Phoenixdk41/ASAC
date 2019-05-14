<?php
if ($_SESSION['active'] == true)
{
    $connectionButton = "Deconnexion";
}
else ($_SESSION['active'] == false)
{
    $connectionButton = "Connexion"
} 
?>

<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css"/>
    </head>
    <header>
        <nav class="navbar navbar-light bg-light">
            <img id ="altranLogo" src="//asac/Design/img/altranLogo.png"/>
            <a href="//asac/accueil.php" type="button" class="btn btn-info">Accueil</a>
            <a href="" type="button" class="btn btn-info">Projets</a>
            <a href="" type="button" class="btn btn-info">Consultants</a>
            <a href="" type="button" class="btn btn-info">Clients</a>
            <a href="" type="button" class="btn btn-info">Facturation</a>
            <a href="" type="button" class="btn btn-info">Aide</a>
            <a href="" type="button" class="btn btn-info"><?php echo $connectionButton; ?></a>
    </header>

    <!--Séparation du code, à fractionner plus tard-->

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
    </style>