<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Templates\auth\css.css"/>
        <link rel="stylesheet" href="Templates\bootstrap\css\bootstrap.css"/>
        <title>Page d'authentification - ASAC</title>
    </head>
    <body> 
            <div id="auth">
                <img id="logo" src="Templates/img/altranLogo.png"/>
                <p id="asac">ASAC</p>
                <p id="asacText">Application de Saisie des Astreintes et des Consommés</p></br></br>

                <form id="formulaire" method="post" action="Controle/controleAuth.php" >
                    <label>Identifiants</label> : <input type="text" name="login"/></br></br>
                    <label>Mot de passe</label> : <input type="password" name="password"/></br></br>
                    <button id = "connection" type="submit" class="btn btn-lg">Se connecter</button></br></br>
                </form>
            </div>

            <a href="accueil.php" ><center>Retour</center></a>
            <?php
            session_destroy();
            ?>
            
            <style>
            #retourAccueil
            {
                text-align: center;
            }

            </style>
    </body>

</html>