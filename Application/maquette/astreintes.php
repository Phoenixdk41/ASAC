<?php
session_start();
include 'Model/Env/functions.php';
$ifConnect = ifConnect();
$profilConsultant = profilConsultant();

?>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="Templates\accueil\accueil.css"/>
        <link rel="stylesheet" href="Templates\bootstrap\css\bootstrap.css"/>
        <title>Astreintes- Asac</title>
    </head>

<body>
<header>
    <?php buildHeader($ifConnect,$profilConsultant);?> 
</header>


<a href="Templates/astreintes/saisiesAstreinte.php"><button>Saisir une Astreintes ou IE</button></a></button>

<table class="table">

<thead>
    <th scope="col">Type</th>
    <th scope="col">Catégorie</th>
    <th scope="col">Consultants</th>
    <th scope="col">Dates</th>
    <th scope="col">Montant</th>
    <th scope="col">Projet</th>
    <th scope="col">IE</th>
    </thead>

    <tr  class="active">
    <td>Astreintes téléphoniques</td>
    <td>Du lundi 20h00 au mardi 8h00</td>
    <td>Mohamed Taleb</td>
    <td>30/12/2018</td>
    <td>250,00 €</td>
    <td>Neo France</td>
    <td>Non</td>
    </tr>
    <tr>
    <td>Astreintes téléphoniques</td>
    <td>Le samedi de 8h00 à 20h00</td>
    <td>Jeremy Morgado</td>
    <td>05/02/2019</td>
    <td>300,00 €</td>
    <td>Pop-caisse Corporate</td>
    <td>Non</td>
    </tr>
    <tr  class="active">
    <td>Interventions</td>
    <td>Du lundi 20h00 au mardi 8h00</td>
    <td>Jeremy Morgado</td>
    <td>05/03/2019</td>
    <td>380,00 €</td>
    <td>Decode Englos</td>
    <td>Oui</td>
    </tr>   
  </table>

  </body>


<script type="javascript/text">


</script>