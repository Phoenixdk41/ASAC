<?php
include_once("Class/Person.php");
session_start();
include('DAO/connectionAsac.php');
$_SESSION['connecter'] = 0;

$user = new Person();
$_SESSION['user'];

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Design\accueil\accueil.css"/>
        <link rel="stylesheet" href="Design\bootstrap\css\bootstrap.css"/>
        <title>Accueil- ASAC</title>
    </head>
    <body>

    <!-- // inclusion de l'header nav -->
<?php
if ($_SESSION['connecter'] == 1)
{
    $connectionButton = "Deconnexion";
}
else
{
    $connectionButton = "Connexion";
} 
?>
    <header>
        <nav class="navbar navbar-light bg-light">
            <img id ="altranLogo" src="//asac/Design/img/altranLogo.png"/>
            <a href="//asac/accueil.php" type="button" class="btn btn-info">Accueil</a>
            <a href="" type="button" class="btn btn-info">Projets</a>
            <a href="" type="button" class="btn btn-info">Astreintes</a>
            <a href="" type="button" class="btn btn-info">Consultants</a>
            <a href="" type="button" class="btn btn-info">Clients</a>
            <a href="" type="button" class="btn btn-info">Facturation</a>
            <a href="" type="button" class="btn btn-info">Aide</a>
            <a href="//asac/auth.php" type="button" class="btn btn-info"><?php echo $connectionButton;?></a>
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

    <div>
        <p>
        Bienvenue sur la page de l'application ASAC, pour avoir une vision, merci de vous connecter.
        </p>
    </div>
           
    </body>
</html>