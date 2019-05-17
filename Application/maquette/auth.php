<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Design\auth\css.css"/>
        <link rel="stylesheet" href="Design\bootstrap\css\bootstrap.css"/>
        <title>Page d'authentification - ASAC</title>
    </head>
    <body> 
            <div id="auth">
                <img id="logo" src="Design/img/altranLogo.png"/>
                <p id="asac">ASAC</p>
                <p id="asacText">Application de Saisie des Astreintes et des Consommés</p></br></br>

                <form id="formulaire" method="post" action="Controle/controleAuth.php" >
                    <label>Identifiants</label> : <input type="text" name="login"/></br></br>
                    <label>Mot de passe</label> : <input type="password" name="password"/></br></br>
                    <button id = "connection" type="submit" class="btn btn-lg">Se connecter</button></br></br>
                </form>
            </div>

            <button id = "retourAccueil" type="text" class="btn btn-lg">Retour</button>
            
            <style>
            #retourAccueil
            {
                text-align: center;
            }

            </style>
    </body>

</html>