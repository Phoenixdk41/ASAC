<?php 
include 'C:\wamp64\www\ASAC\Application\site\DAO\connectionAsac.php'; //inclusion connexion bdd

$nom = htmlspecialchars($_POST['nomInscription']);
$prenom = htmlspecialchars($_POST['prenomInscription']);
$mail = htmlspecialchars($_POST['emailInscription']);
$entreprise = = htmlspecialchars($_POST['entrepriseInscription']);


$nomBaseSql = $asac->query('select * from testasac where nom = \'root\';');
while ($nomBase = $nomBaseSql->fetch())
{

    if  ($nom == $nomBase['nom'])
    {
        echo("connection base ok    " . $nomBase['nom']);
    }

    elseif ($nom != $nomBase['nom'])
    {
        echo('User Invalid');
    }

    else
    {
    echo("erreur dans la condition");
    }
};
$nomBaseSql->closeCursor();
?>