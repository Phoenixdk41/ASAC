<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="..\Design\identification\css.css"/>
        <link rel="stylesheet" href="..\Design\bootstrap\css\bootstrap.css"/>
        <title>Page d'inscription - ASAC</title>
    </head>
    <body>
    <header>
    <img id="logo" src="../Design/img/altranLogo.png"/>
    <p id ="asac">ASAC</p>
</header>
    <div id = "formulaireInscription">
        <form method="post" action="Controle/controleInscription.php">
        <label>Votre nom</label> : <input type="text" name="nomInscription" required/></br></br>
        <label>Votre prenom</label> : <input type="text" name="prenomInscription" required/></br></br>
        <label>Votre adresse email</label> : <input type="text" name="emailInscription" required/></br></br>
        <label>Votre entreprise de référence</label> : <input type="text" name="entrepriseInscription" required/></br></br>
        <button id = "submit" type="submit" class="btn btn-lg" 
        onclick=confirmation()>Envoyer la demande</button>

</div>
    </body>

</html>

<script>

function confirmation()
{
var message = "Votre demande d'inscription va être controlée, merci de ne pas faire de demandes inutiles";
confirm(message);
}


</script>