<?php
session_start();
if (!isset($_SESSION['pseudo']) and !isset($_SESSION['mdp']) )
{
header('location: accueil.php');
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ajout d'une question</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>
<!--pour verifier le formulaire-->
<script language="JavaScript" type="text/javascript">
function verification() 
{message="";
 	if(document.form.msg.value=='commentaire'){message=message+"\n-Veuillez saisir le commentaire";}

	
	if(message!='')
     {alert("Veuillez completer les champs :\n"+message);
       return false;
	   }else{
			alert("Votre commentaire est post� avec succ�s");
            return true;
			}
  }
 
</script>


<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">
<div class="titre"> <img style="vertical-align: middle;" src='image/comments.png'/> Forum</div>
 <div class="form_parametre">

<div class="titre_forum">veuillez remplir le champs suivants </div>

 <div class="div_messagerie3">
	    <form name="form" method="post" action="candidat_ajout_com_traitement.php" onSubmit="return verification()">
		   <table width="100%" id="table_messagerie2">
		   
		    <tr><tr>
         <td colspan=2>
            <center><img style="vertical-align: middle;" src='image/erreur.png'  /> <span class="erreur">Veuillez saisir un commentaire!!</span></center>
        </td>
   </tr></tr>
			 <tr>
		           <td width=20% class="td"><label for="msg">Commentaire :</label></td>
		            <td>
	     
                     <textarea name="msg" id="msg" rows="10" cols="57">commentaire</textarea>
     
					</td>
					
		     </tr>
			 <tr><td></td><td></td></tr>
		         </table><br>
			<center><input type="submit" value="Envoyer" /> <input type="reset" value="R�initialiser" /></center>
         </form>			
		</div>


</div>
</div>
</div>
	
<?php } ?>