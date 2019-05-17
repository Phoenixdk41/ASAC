<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Design\accueil\accueil.css"/>
        <link rel="stylesheet" href="Design\bootstrap\css\bootstrap.css"/>
        <title>Accueil- Asac</title>
    </head>
    
    <body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <img id ="altranLogo" src="//maquette/Design/img/altranLogo.png"/>

            <a href="//maquette/accueil.php" type="button" class="btn btn-info">Accueil</a>
            <a href="" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
            Projets  <span class="badge">4</span></a>
            
            <a href="" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-time" aria-hidden="true"></span> 
            Astreintes</a>

            <a href="" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
            Consultants</a>

            <a href="" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            
            Clients</a>
            <a href="" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span>
            Facturation</a>

            <a href="" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
            Aide</a>

            <a href="//maquette/auth.php" type="button" class="btn btn-info">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            Connexion</a>
            

    </header>

    <!--Séparation du code, à fractionner plus tard-->



    <div>
        <p>
        Bienvenue sur la page de l'application maquette, pour avoir une vision, merci de vous connecter.
        </p>
    </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Projets</th>
      <th scope="col">Avancement global</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Tenue à la charge</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">Convergence Drive</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Optimisation Décode</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


           
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
    </style>