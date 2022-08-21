<?php
session_start();
if (!isset($_SESSION['pseudo_admin']) and !isset($_SESSION['mdp_admin']) )
{
header('location: identification_admin.php');
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css_inscription.css" media="all" rel="stylesheet" type="text/css" >
<title>admin ajout abonnée</title>
<?php include ("en_tete2.php"); ?>

<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">
   <div class="titre">Ajouter un Candidat:</div> 
   <div class="form_parametre_insc">

   
    <img src='image/erreur1.png'  /> <span class="erreur"> Pseudo ou Mot de passe invalide !!!!(existe) </span><br><br> <!--message d'erreur-->     
    <form id="myForm" method="post" action="confirmation_inscription_admin.php">

      <label class="form_col">Sexe :</label>
      <label><input name="sex" type="radio" value="Mr" />Homme</label>
      <label><input name="sex" type="radio" value="Mme" />Femme</label>  <br>
      <span class="tooltip" > <img style="vertical-align: middle;" src='image/erreur.png'  /> Vous devez sélectionnez votre sexe</span><br><br>
      


      
      <label class="form_col" for="lastName">Nom :</label>
      <input name="lastName" id="lastName" type="text" /> <br>
      <span class="tooltip"> <img style="vertical-align: middle;" src='image/erreur.png'  />  Un nom ne peut pas faire moins de 4 caractères</span><br><br>
      


      
      <label class="form_col" for="firstName">Prénom :</label>
      <input name="firstName" id="firstName" type="text" /> <br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Un prénom ne peut pas faire moins de 3 caractères</span><br><br>
      


      
      <label class="form_col" for="jour">Date de naissance :</label>
      <input name="jour" id="jour" type="text" size=4/> / <input name="mois" id="mois" type="text" size=4/> / <input name="annee" id="annee" type="text" size=7 /> <br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> La date de naissance doit étre au format jj/mm/aaaa</span><br><br>
      
      
      
      <label class="form_col">Catégorie Permis :</label>
      <label><input name="cat" type="radio" value="leg" />Léger</label>
      <label><input name="cat" type="radio" value="lou" />Lourds</label> (*) <br>
      <span class="tooltip" > <img style="vertical-align: middle;" src='image/erreur.png'  /> Vous devez sélectionnez votre sexe</span><br><br>
      


      
      <label class="form_col" for="login">Pseudo :</label>
      <input name="login" id="login" type="text" /> <br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Le pseudo ne peut pas faire moins de 4 caractères</span><br><br>
      


      
      <label class="form_col" for="pwd1">Mot de passe : </label>
      <input name="pwd1" id="pwd1" type="password" /> <br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Le mot de passe ne doit pas faire moins de 6 caractères</span><br>
      


      
      <label class="form_col" for="pwd2">Mot de passe (confirmation):</label>
      <input name="pwd2" id="pwd2" type="password" /> <br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Le mot de passe de confirmation doit être identique à celui d'origine</span><br><br>
	  
	   
	  <label  class="form_col" for="phrase">Phrase secrète :</label>
      <textarea style="vertical-align: middle;" name="phrase" id="phrase" type="text" rows="4" cols="35" ></textarea> <br>
      <span class="tooltip">  <img style="vertical-align: middle;" src='image/erreur.png'  /> Une phrase ne peut pas faire moins de 8 caractères</span><br><br>
	  
      


       
      <span class="form_col"></span>
      <input type="submit" value="M'inscrire" /> <input type="reset" value="Réinitialiser le formulaire" /><br><br>
    
    </form>
    <script type="text/javascript" src="js_inscription.js"></script>
  </div>
</div>
</div>


<?php } ?>