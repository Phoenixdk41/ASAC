<?php
try
{
$asac = new PDO ('mysql:host=127.0.0.1;dbname=applicationasac','root','ASAC');
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>