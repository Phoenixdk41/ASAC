<ul class="nav nav-tabs" id="menu" role="tablist">
  <li class="nav-item">
    <img id ="altranLogo" src="//maquette/Templates/img/altranLogo.png"/>

  <li class="nav-item">
    <a class="nav-link active" id="mainPage" data-toggle="tab" href="http://maquette/accueil.php" role="tab" aria-controls="home" aria-selected="true">Accueil</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="projectPage" data-toggle="tab" href="http://maquette/projets.php" role="tab" aria-controls="profile" aria-selected="false">Projets</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="dailyPage" data-toggle="tab" href="http://maquette/astreintes.php" role="tab" aria-controls="contact" aria-selected="false">Astreintes</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="dailyPage" data-toggle="tab" href="http://maquette/Templates/Settings/parametres.php" 
    role="tab" aria-controls="contact" aria-selected="false">Paramétrage</a>
  </li>

  <li class="nav-item">
    <a class="nav-link" id="connection" data-toggle="tab" href="http://maquette/auth.php" 
    role="tab" aria-controls="contact" aria-selected="false"><span class="glyphicon glyphicon-off" 
    aria-hidden="true"><?php echo($ifConnect)?></span></a>
  </li>

  <li>
  <span class="label label-primary"> Profil : <?php echo ($profilConsultant)?></span>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
<style type="text/css">

    #altranLogo
    {
        width: 160px;
        float: left;
        padding-right: 10px;
        padding-left: 10px;
        padding-top: 1px;
        border: 2px solid #007EAF;
        border-radius: 10px;
        margin-right: 5px;
    }
    </style>