
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Recuperation du mot de passe</title>
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc1">
<?php include ("menu.php");?>

  <div id="corps">
    <div class="titre">Recuperation mot de passe</div>
    <div class="form_parametre">
	 
	 <center><p class="text_mdp_ob"> <img src="image/information.png" /> Vous avez oublié votre mot de passe ???<br>
                Récuperer le, rien qu'en remplissant le simple forumlaire qui suit : </p>
     
	 <table class="table_mdp1" width=70% >
     <tr>
          <form id="myform" method="post" action="candidat_mdp_recuperation.php">
	 
           <td><label for="login">Pseudo :</label></td>
           <td class="td_mdp_align"><input name="login" id="login" type="text" /></td>
	  
	 </tr>
	 
	 <tr>
	        <td><label for="phrase_saisie">phrase secrète :</label></td>
            <td class="td_mdp_align"><textarea style="vertical-align: middle;" name="phrase_saisie" id="phrase_saisie" type="text" rows="4" cols="32" ></textarea></td>
	       
	 </tr> 

	  <tr >
	  
	        <td colspan=2><center><input type="submit" value="Valider" />  <input type="reset" value="Réinitialiser" /></center></td>
      </tr>
	  
	  </form>
	  
	  </table></center>
    </div>
	
	
   </div>
   
</div>

