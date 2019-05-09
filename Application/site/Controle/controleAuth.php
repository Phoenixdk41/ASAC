<?php 
include 'C:\wamp64\www\ASAC\Application\site\DAO\connectionAsac.php';

$nom = htmlspecialchars($_POST['identifiants']);

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