<?php
session_start();
$_SESSION['login'] = "id";
$_SESSION['password'] = "password";
$_SESSION['active'] = false;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Design\accueil\accueil.css"/>
        <link rel="stylesheet" href="Design\bootstrap\css\bootstrap.css"/>
        <title>Accueil- ASAC</title>
    </head>
    <script src="JS\VueJS\vue.js"></script>

    <body>
    <?php 
    // inclusion de l'header nav
    include 'Design/header/header.php';

    ?> 
    <div>
        <p>
        Bienvenue sur la page de l'application ASAC, pour avoir une vision, merci de vous connecter.
        </p>
    </div>
           
    </body>


<!--Séparation du code, à fractionner plus tard-->

<script>
    new Vue({

        el: '#auth',
        data: {
            boutonConnection : 'Se connecter',
            inscription : 'Inscription'
        },
        methods: {
            inscriptionPage: function(){
                document.location.href="test.html";
            }
        }
    })
</script>

</html>