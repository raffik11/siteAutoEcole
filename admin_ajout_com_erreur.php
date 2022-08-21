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
<title>ajout d'une question</title>


<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">
<div class="titre"> <img style="vertical-align: middle;" src='image/comments.png'/> Forum</div>
 <div class="form_parametre">

<div class="titre_forum">veuillez remplir les champs suivants </div>

<table class="forum_table" cellspacing=20 size=100%>
 <form action="admin_ajout_com_traitement.php" method="POST">
   <tr>
         <td>
            <center><img style="vertical-align: middle;" src='image/erreur.png'  /> <span class="erreur">Veuillez saisir un commentaire!!</span></center>
        </td>
   </tr>
   <tr>
         <td>
            <textarea name="msg" rows="10" cols="70">commentaire</textarea>
        </td>
   </tr>
      <tr>
        <td>
        <center><input type="submit" value="Envoyer" /> <input type="reset" value="Effacer"/></center>
        </td>
   </tr>
  </form> 
</table>
</div>
</div>
</div>
	
<?php } ?>