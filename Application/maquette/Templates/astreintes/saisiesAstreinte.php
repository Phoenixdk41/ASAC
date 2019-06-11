<?php
 session_start();
include $_SERVER['DOCUMENT_ROOT'].'/Model/Env/functions.php';
$ifConnect = ifConnect();
$profilConsultant = profilConsultant();
?>

<head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css"/>
        <title>Saisies des Astreintes - Asac</title>
    </head>
<header>
<?php buildHeader($ifConnect,$profilConsultant);?> 
</header>

<form method="post" class="form-inline" action="" name="formAstreintes">

<label for="formAstreintesTypes">Types d'astreintes : </label>
<select class="form-control" id="formAstreintesTypes" name="formAstreintesTypes">
    <option selected="selected"> - </option>
  <option>Astreinte téléphonique</option>
  <option>Intervention exceptionnelle</option>
</select></br>

<label for="formAstreintesProjets">Projets : </label>
<select class="form-control" id="formAstreintesProjets" name="formAstreintesProjets">
    <option selected="selected"> - </option>
    <option>CDC-POP KS</option>
    <option>CDC - Migration METI EE 2018</option>
    <option>NEO France 2018</option>
</select></br>

<label for="formAstreintesDetails"> Sous projets : </label>
<select class="form-control" id="formAstreintesDetails" name="formAstreintesDetails">
    <option selected="selected"> - </option>
    <option>Marche en double</option>
    <option>Efficiency av2</option>
    <option>Englos Av3</option>
</select></br>

<label for="formAstreintesMois"> Mois de l'astreinte : </label>
<select class="form-control" id="formAstreintesMois" name="formAstreintesMois">
    <option selected="selected"> - </option>
    <option>Janvier</option>
    <option>Fevrier</option>
    <option>Mars</option>
    <option>Avril</option>
    <option>Mai</option>
    <option>Juin</option>
    <option>Juillet</option>
    <option>Aout</option>
    <option>Septembre</option>
    <option>Octobre</option>
    <option>Novembre</option>
    <option>Decembre</option>
</select></br>

<label for="formAstreintesPeriodes"> Période de l'astreinte : </label>
<select class="form-control" id="formAstreintesPeriodes" name="formAstreintesPeriodes">
    <option selected="selected"> - </option>
    <option>Du lundi 20h00 au mardi 8h00</option>
    <option>Du mardi 20h00 au mercredi 8h00</option>
    <option>Du mercredi 20h00 au jeudi 8h00</option>
    <option>Du jeudi 20h00 au vendredi 8h00</option>
    <option>Le samedi de 8h00 à 20h00</option>
    <option>Le dimanche de 8h00 à 20h00</option>
    <option>Un jour férié de 8h00 à 20h00</option>
    <option>Du vendredi 20h00 au samedi 8h00</option>
    <option>Du samedi 20h00 au dimanche 8h00</option>
    <option>Du dimanche 20h00 au lundi 8h00</option>
    <option>De 20h00 à 8h00 la veille d’un jour férié</option>
    <option>Du vendredi 20h00 au lundi 8h00</option>
    <option>Du lundi 20h00 au lundi suivant 8h00</option>
</select></br>

  <div class="form-group">
  <label for="ifIE">Etes-vous intervenu durant votre astreintes ? </label></br>
    <label class="radio-inline"><input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked" onclick="ifIE()"> Non</label>
    <label class="radio-inline"><input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" onclick ="ifIE()"> Oui</label>
  </div>
  </br>

  <div class="form-group "id="ifIE">
    <label for="formAstreintesIEHeures">Nombres d'heures : </label>
    <input type="text" class="form-control"  placeholder="Ex : 0, 1..." onkeyup="verif_nombre(this);">
  </div></br>

  


  <label for="formAstreintesDescriptions">Descriptions : </label> </br>
  <textarea class="form-control" rows="3" col="3" id="formAstreintesDescriptions" name="formAstreintesDescriptions" required></textarea></br>


  <input type="submit" value="Valider" alt="Envoyer la saisie pour validation"/>
  <input type="reset" value="RAZ"/>
  </form>

  <script type="text/javascript" >


function verif_nombre(champ)
  {
	var chiffres = new RegExp("[0-9]");
	var verif;
	var points = 0;
 
	for(x = 0; x < champ.value.length; x++)
	{
            verif = chiffres.test(champ.value.charAt(x));
	    if(champ.value.charAt(x) == "."){points++;}
            if(points > 1){verif = false; points = 1;}
  	    if(verif == false){champ.value = champ.value.substr(0,x) + champ.value.substr(x+1,champ.value.length-x+1); x--;}
	}
  }

  function ifIE()
  {
     var visible = document.getElementById("ifIE");

    if (document.getElementById('inlineRadio2').checked)
    {
    visible.style.display = "block";
  }
   else 
  {
    visible.style.display = "none";
  }
  }

  function raz()
  {

  }

  window.onload = ifIE();
  </script>
