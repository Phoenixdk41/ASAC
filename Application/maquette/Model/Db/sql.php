<?php
include 'connection.php'; //$asac pour acces base


//Nombre de projets en base
$count = $asac->query('select count(*) from project;'); 

while ($countProject = $count->fetch())
{
    $nombreDeProjets = $countProject[0];
}

$count->closeCursor();

//nom du projet en base
$name = $asac->query('select Project_Name from project;');
while ($nameProject = $name->fetch())
{
    $nomDuProjet = $nameProject[0];
}
$name->closeCursor();



?>