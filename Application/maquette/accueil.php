<?php 
$valeurFormulaire = $_POST['valeurFormulaire'] = 0;
echo $valeurFormulaire;
?>
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
      <?php include 'Design/header/header.php';?> 
    </header>

    <div>
        <p>
        Bienvenue sur la page de l'application maquette, pour avoir une vision complete depuis votre status, merci de vous connecter.
        </p>
    </div>

<div id="accueilBody">
  <?php include 'Design/accueil/accueilBody.php';?>
</div>


<div id = "projetBody">
<form method="post">
   <p>
       <label for="Client">Choississez un projet pour la consultation ?</label><br />
       <select name="client" id="client">
           <optgroup label="Auchan">
               <option value="tenueALaCharge">Tenue à la charge</option>
               <option value="convergenceDrive">Convergence Drive</option>
               <option value="optiDecode">Optimisation de la decode</option>
               <option value="neo">Neo Extenda</option>
           </optgroup>
           <optgroup label="Boulanger">
               <option value="javaProjet">Developpement en Java Project</option>
           </optgroup>
           <optgroup label="Altran">
               <option value="asac">Asac</option>
               <option value="sysexp">Systeme decisionnel expert</option>
           </optgroup>
       </select>
       <input type="submit" name="valeurFormulaire" value="Valider"/>
   </p>
</form>
  <table class="table">
    <thead>
    <tr>
    <th scope="col">Projet - Tenue à la charge - Auchan</th>
    </tr>
    </thead>
    <th scope="row">Convergence Drive</th>
      <td>Les details de la descriptions sont à definir avec le client</td>
      <td>

  </table>
  
</div>
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
    #projetBody
    {
        display: none;
    }
    </style>

<script type="text/javascript" src="JS/script.js"></script>

