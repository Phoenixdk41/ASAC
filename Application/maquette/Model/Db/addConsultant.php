<?php
include 'connection.php';
$nom = $_POST['nameConsultantAdd'];
$prenom = $_POST['firstNameConsultant'];
$password = $_POST['passwordConsultantAdd'];
$login = $_POST['loginConsultantAdd'];
$email = $_POST['mailConsultantAdd'];
$activate = 1;


$bdd = $asac->query('insert into application_user (Last_Name, 
First_Name,
login,
Password,
Mail,
Active) values (
"'.$nom.'",
"'.$prenom.'",
"'.$password.'",
"'.$login.'",
"'.$email.'",
"'.$activate.'"');



/*
insert into application_user (Last_Name, 
First_Name, login, Password, Mail, Active) values('FONTAINE','VALENTIN',
'VFO','azerty','valentin.fontaine@altran.com',1);
*/

?>