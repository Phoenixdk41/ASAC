<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Design\auth\css.css"/>
        <title>Page d'authentification - ASAC</title>
    </head>
    <script src="JS\VueJS\vue.js"></script>
    <body>
            <div id="auth">
                <img id="logo" src="Design/img/altranLogo.png"/>
                <p id="asac">ASAC</p>
                <p id="asacText">Application de Saisie des Astreintes et des Consommés</p></br></br>

                <form id="formulaire" method="post" action="Controle/controleAuth.php" >
                    <label>Identifiants</label> : <input type="text" name="identifiants"/></br></br>
                    <label>Mot de passe</label> : <input type="password" name="password"/></br></br>
                    <button id = "connection">{{ boutonConnection }}</button>
                    <button id = "inscription" @click = inscriptonPage>{{ inscription }}</button>
                </form>


            </div>

        
    </body>


<!--Séparation du code, a fractionner plus tard-->

<script>
    new Vue({

        el: '#auth',
        data: {
            boutonConnection : 'Se connecter',
            inscription : 'Inscription'
        },
        methods: {
            inscriptionPage: function(){
            }
        }
    })
</script>

</html>