<?php 

//Check if user's session if connects and change display connexion button for header 
function ifConnect()
{
    
$isset = isset($_SESSION['login']);

    if ($isset) 
    {
        $ifConnect = "Deconnexion";
    }
    else {
        $ifConnect = "Connexion";
    }
    return $ifConnect;
}

// Define the level of authentification and renseign the type on header
function profilConsultant()
{
    $isset = isset($_SESSION['profilConsultant']);

    if ($isset) 
    {

        switch($_SESSION['profilConsultant'])
        {
        case 0:
            $profilConsultant = "Administrateur";
            break;

        case 1:
            $profilConsultant = "Chef de Projet";
            break;

        case 2:
            $profilConsultant = "ADV";
            break;
        
        case 3:
            $profilConsultant = "Consultant";
            break;

        case 4:
            $profilConsultant = "Client";
            break;
        }
    
    }
    else 
    {
        $profilConsultant ="non connecté";
    }
    return $profilConsultant;
}

//Build the header according to the profile 
function buildHeader($ifConnect,$profilConsultant)
{
    if ($ifConnect != "Connexion")
    {
        if ($profilConsultant == "Administrateur")
        {
          include $_SERVER['DOCUMENT_ROOT'].'/Templates/header/headerAdmin.php';
        }

        elseif ($profilConsultant == "Chef de Projet")
        {
          include $_SERVER['DOCUMENT_ROOT'].'/Templates/header/headerProjectManager.php';
        }

        elseif ($profilConsultant == "ADV")
        {
          include $_SERVER['DOCUMENT_ROOT'].'/Templates/header/headerADV.php';
        }

        elseif ($profilConsultant == "Consultant")
        {
          include $_SERVER['DOCUMENT_ROOT'].'/Templates/header/headerConsultant.php';
        }

        elseif ($profilConsultant == "Client") 
        {
          include $_SERVER['DOCUMENT_ROOT'].'/Templates/header/headerConsultant.php';
        }
  }
  else 
  {
    include $_SERVER['DOCUMENT_ROOT'].'/Templates/header/headerOffline.php';
  }
}
?>