<?php
require 'Class/connection.php';

$resultat = $asac->query('SELECT Last_Name FROM application_user WHERE Id_User = 1;');
while ($resultatTraité = $resultat->fetch(PDO::FETCH_ASSOC))
{
    echo $resultatTraité['Last_Name'];
}

$resultat->closeCursor();

?>