<?php
include 'connection.php';
$toDel = $_POST['nameConsultantDel'];


$bdd = $asac->query('delete from application_user where Last_Name = "'.$toDel .'"');

echo("Le consultant  " . $toDel . " a bien été supprimé");


?>