<?php
 session_start();
include '../../Model/Env/functions.php';
$ifConnect = ifConnect();
$profilConsultant = profilConsultant();
?>

<head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css"/>
        <title>Saisies des Astreintes - Asac</title>
    </head>


<form method="post" class="form-inline" action="" name="formAstreintes"
onsubmit=" return validate()">

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
    <label for="formAstreintesHeures">Nombres d'heures : </label>
    <input type="text" class="form-control" id="formAstreintesHeures" name="formAstreintesHeures"  placeholder="Ex : 1">
  </div>
  </br>

  <label for="formAstreintesDescriptions">Descriptions : </label> </br>
  <textarea class="form-control" rows="3" col="3" id="formAstreintesDescriptions" name="formAstreintesDescriptions" required></textarea>

    <div id="ifIE">



  <input type="submit" value="Valider" alt="Envoyer la saisie pour validation"/>
  <input tpye="reset" value="RAZ"/>
  </form>

  <script type="text/javascript" >
  function validate()
{
     if (document.formAstreintes.formAstreintesHeures.value != is_int())
     {
         return true;
     }
     else
     {
         alert ("Le nombre d'heure doit être saisies")
         return false;
     }
}
  
  
  
  
  </script>

function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}