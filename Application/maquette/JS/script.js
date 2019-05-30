//Variable d'Env
var ifConnect = new Boolean(false);



function afficherAccueil() {
    document.getElementById("accueilBody").style.display = "block";
    document.getElementById("projetBody").style.display = "none";
    document.getElementById("astreintesBody").style.display = "none";
    
    }
    
function afficherProjet(){
      document.getElementById("accueilBody").style.display = "none";
      document.getElementById("projetBody").style.display = "block";
      document.getElementById("astreintesBody").style.display = "none";
    }
    
function afficherAstreintes(){
  document.getElementById("accueilBody").style.display = "none";
  document.getElementById("projetBody").style.display = "none";
  document.getElementById("astreintesBody").style.display = "block";
} 

// non fonctionnelle
function envoyerMailAdv(){
  window.open('mailto:test@example.com');
}