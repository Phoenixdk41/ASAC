<?php
session_start();

$isset = isset($_SESSION['login']);

if ($isset) 
{
    $ifConnect = "Deconnexion";
}
else {
    $ifConnect = "Connexion";
} 

?>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Templates\accueil\accueil.css"/>
        <link rel="stylesheet" href="Templates\bootstrap\css\bootstrap.css"/>
        <title>Projets- Asac</title>
    </head>
    <?php include 'Templates/header/header.php';?>
<fieldset>
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
       <button><span class="glyphicon glyphicon-plus"></span> Ajouter un projet</button>
   </p>
</form>
</fieldset>
  <table class="table">
    <thead>
    <tr>
    <th scope="col">Projet - Tenue à la charge - Auchan
    Periode du <input type="date"/> au <input type="date"/></th>
    </tr>
    </thead>
    <th scope="col">Début</th>
    <th scope="col">Fin</th>
    <th scope="col">Maco</th>
    <th scope="col">PTF</th>
    <th scope="col">BDC</th>
    <th scope="col">Montant</th>
    <th scope="col">Montant prévu</th>
    <th scope="col">Avancement</th>
    <th scope="col">Contact Client</th>

    </thead>
    <tr>
    <td>27/09/2018</td>
    <td>En cours</td>
    <td>901221865</td>
    <td>180032_6</td>
    <td>EP883062</td>
    <td>3185.00 €</td>
    <td>11091,21 €</td>
    <td> 
        <div class="progress">
            <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span>60%</span>
    </td>
    <td id="contactClientTable"><button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon glyphicon-user"></span> User 
        </button>
        </td>
    </tr>


  </table>
  <button>Telecharger en pdf</button>
  <button>Envoyer au client</button>
  <button onclick = "envoyerMailAdv()">Envoyer à l'ADV</button>