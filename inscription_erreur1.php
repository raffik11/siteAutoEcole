
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>formulaire d'inscription</title>
<link href="Styles/css_inscription.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete.php"); ?>

<div class="font_blanc1">
<?php include ("menu.php");?>

<div id="corps">
   <div class="titre"> <img style="vertical-align: middle;" src=''/> Formulaire d'inscription:</div>
   <div class="form_parametre_insc">

   
   
   <img src='image/erreur1.png'  /> <span class="erreur">champs obligatoires non remplie !!!!!!!!! rempliessez les S.V.P</span><br><br> <!--message d'erreur-->
          <strong class="text_insc"> les champs indiqu?s par une ?toile sont obligatoires </strong><br><br>
    <form id="myForm" method="post" action="confirmation_inscription.php">

      <label class="form_col">Sexe :</label>
      <label><input name="sex" type="radio" value="Mr" />Homme</label>
      <label><input name="sex" type="radio" value="Mme" />Femme</label> (*) <br>
      <span class="tooltip" > <img style="vertical-align: middle;" src='image/erreur.png'  /> Vous devez s?lectionnez votre sexe</span><br><br>
      


      
      <label class="form_col" for="lastName">Nom :</label>
      <input name="lastName" id="lastName" type="text" /> (*)<br>
      <span class="tooltip"> <img style="vertical-align: middle;" src='image/erreur.png'  />  Un nom ne peut pas faire moins de 4 caract?res</span><br><br>
      


      
      <label class="form_col" for="firstName">Pr?nom :</label>
      <input name="firstName" id="firstName" type="text" /> (*)<br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Un pr?nom ne peut pas faire moins de 3 caract?res</span><br><br>
      


      
      <label class="form_col" for="jour">Date de naissance :</label>
      <input name="jour" id="jour" type="text" size=4/> / <input name="mois" id="mois" type="text" size=4/> / <input name="annee" id="annee" type="text" size=7 /> (*)<br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> La date de naissance doit ?tre au format jj/mm/aaaa</span><br><br>
      
      
      
      <label class="form_col">Cat?gorie Permis :</label>
      <label><input name="cat" type="radio" value="leg" />L?ger</label>
      <label><input name="cat" type="radio" value="lou" />Lourds</label> (*) <br>
      <span class="tooltip" > <img style="vertical-align: middle;" src='image/erreur.png'  /> Vous devez s?lectionnez votre sexe</span><br><br>
      


      
      <label class="form_col" for="login">Pseudo :</label>
      <input name="login" id="login" type="text" /> (*)<br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Le pseudo ne peut pas faire moins de 4 caract?res</span><br><br>
      


      
      <label class="form_col" for="pwd1">Mot de passe : </label>
      <input name="pwd1" id="pwd1" type="password" /> (*)<br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Le mot de passe ne doit pas faire moins de 6 caract?res</span><br>
      


      
      <label class="form_col" for="pwd2">Mot de passe (confirmation):</label>
      <input name="pwd2" id="pwd2" type="password" /> (*)<br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Le mot de passe de confirmation doit ?tre identique ? celui d'origine</span><br>
	  
	  <p class="text_insc2"><img src="image/information.png" /> Phrase secr?te: en cas ou vous oublier le mot de passe,cette phrase est indispensable pour le r?cuperer</p>  
	  <label  class="form_col" for="phrase">Phrase secr?te :</label>
      <textarea style="vertical-align: middle;" name="phrase" id="phrase" type="text" rows="4" cols="35" ></textarea> (*)<br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Une phrase ne peut pas faire moins de 8 caract?res</span><br><br>
	  
      


       
      <span class="form_col"></span>
      <input type="submit" value="M'inscrire" /> <input type="reset" value="R?initialiser le formulaire" /><br><br>
    
    </form>
    <script type="text/javascript" src="js_inscription.js"></script>
  </div>
</div>
</div>


