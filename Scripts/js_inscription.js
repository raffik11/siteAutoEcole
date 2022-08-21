// Fonction de désactivation de l'affichage des "tooltips"

function deactivateTooltips() {

  var spans = document.getElementsByTagName('span'),
      spansLength = spans.length;

  for (var i = 0 ; i < spansLength ; i++) {
    if (spans[i].className == 'tooltip') {
      spans[i].style.display = 'none';
    }
  }

}


// La fonction ci-dessous permet de récupérer la "tooltip" qui correspond à notre input

function getTooltip(el) {

  while (el = el.nextSibling) {
    if (el.className == 'tooltip') {
      return el;
    }
  }

  return false;

}


// Fonctions de vérification du formulaire, elles renvoient "true" si tout est ok

var check = []; // On met toutes nos fonctions dans un tableau associatif


check['sex'] = function() {

  var sex = document.getElementsByName('sex'),
      tooltipStyle = getTooltip(sex[1].parentNode).style;

  if (sex[0].checked || sex[1].checked) {
    tooltipStyle.display = 'none';
    return true;
  } else {
    tooltipStyle.display = 'inline-block';
    return false;
  }

};

check['lastName'] = function(id) {

  var name = document.getElementById(id),
      tooltipStyle = getTooltip(name).style;

  if (name.value.length >= 4) {
    name.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    name.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};

 check['firstName'] = function(id) {

  var lname = document.getElementById(id),
      tooltipStyle = getTooltip(lname).style;

  if (lname.value.length >= 3) {
    lname.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    lname.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};
 check['login'] = check['lastName'];// La fonction pour le pseudo est la même que celle du nom

check['jour'] = function() {

  var jour = document.getElementById('jour'),
      tooltipStyle = getTooltip(jour).style,
      jourValue = parseInt(jour.value);

  if (!isNaN(jourValue) && jourValue >= 01 && jourValue <= 31) {
    jour.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    jour.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};

check['mois'] = function() {

  var mois = document.getElementById('mois'),
      tooltipStyle = getTooltip(mois).style,
      moisValue = parseInt(mois.value);

  if (!isNaN(moisValue) && moisValue >= 01 && moisValue <= 12) {
    mois.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    mois.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};

check['annee'] = function() {

  var annee = document.getElementById('annee'),
      tooltipStyle = getTooltip(annee).style,
      anneeValue = parseInt(annee.value);

  if (!isNaN(anneeValue) && anneeValue >= 1945 && anneeValue <= 2012) {
    annee.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    annee.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};


check['pwd1'] = function() {

  var pwd1 = document.getElementById('pwd1'),
      tooltipStyle = getTooltip(pwd1).style;

  if (pwd1.value.length >= 6) {
    pwd1.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    pwd1.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};

check['pwd2'] = function() {

  var pwd1 = document.getElementById('pwd1'),
      pwd2 = document.getElementById('pwd2'),
      tooltipStyle = getTooltip(pwd2).style;

  if (pwd1.value == pwd2.value && pwd2.value != '') {
    pwd2.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    pwd2.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};

check['phrase'] = function(id) {

  var phrase = document.getElementById(id),
      tooltipStyle = getTooltip(phrase).style;

  if (phrase.value.length >= 8) {
    phrase.className = 'correct';
    tooltipStyle.display = 'none';
    return true;
  } else {
    phrase.className = 'incorrect';
    tooltipStyle.display = 'inline-block';
    return false;
  }

};


// Mise en place des événements

(function() { // Utilisation d'une fonction anonyme pour éviter les variables globales.

  var myform = document.getElementById('myForm'),
        inputs = document.getElementsByTagName('input'),
        inputsLength = inputs.length;

  for (var i = 0 ; i < inputsLength ; i++) {
    if (inputs[i].type == 'text' || inputs[i].type == 'password') {

      inputs[i].onkeyup = function() {
        check[this.id](this.id); // "this" représente l'input actuellement modifié
      };

    }
  }

 myform.onsubmit = function() {
	  
    var result = true;

    for (var i in check) {
      result = check[i](i) && result;
    }

    if (!result) {
      alert('Erreur !!!! Le formulaire n\'est pas bien rempli \n Car vous n\'avez pas respecté les condition.');

    return false;
	
	}else
	{
	return true;
	}
	
  };

  myform.onreset = function() {
	  
    var inputs = myForm.getElementsByTagName('input'),
      inputsLength = inputs.length;
     
	 
	 
    for (var i = 0 ; i < inputsLength ; i++) {
      if(inputs[i].type == 'text' || inputs[i].type == 'password') {
      inputs[i].className = '';
      }
	  
    }

    deactivateTooltips();
	
  };

} )();


// Maintenant que tout est initialisé, on peut désactiver les "tooltips"

deactivateTooltips();









