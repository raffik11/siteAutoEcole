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
<title>Messagerie Envoi</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>
<!--pour verifier le formulaire-->
<script language="JavaScript" type="text/javascript">
function verification() 
{message="";
 	if(document.form.objet.value==''){message=message+"\n-Veuillez saisir l'objet";}
	if(document.form.sujet.value=='' ){message=message+"\n-Veuillez saisir le sujet";}
	
	if(document.form.msg.value==''){message=message+"\n-Veuillez saisir le message";}
	
	if(message!='')
     {alert("Veuillez completer les champs :\n"+message);
       return false;
	   }
  }
 
</script>

<?php include ("en_tete _candidat1.php"); ?>
<link href="Styles/style_accueil.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Envoyer un message </div>
 <div class="form_parametre">
 
    
      
	   
	   <div class="div_messagerie3">
	   <center><img style="vertical-align: middle;" src='image/erreur.png'  /> <span class="erreur"> Erreur: veuillez saisir les champs ci-dessous.</span></center><br>
	    <form name="form" method="post" action="abonnee_messagerie_envoi_traitement.php" onSubmit="return verification()">
		   <table width="100%" id="table_messagerie2">
		   
		     <tr>
		           <td width=20% class="td"><label for="objet">objet :</label></td>
		            <td width=55%>
					<input type="text" name="objet" id="objet"size=50/>
					</td>
					<td></td>
		     </tr>
			 <tr>
		           <td width=20% class="td"><label for="sujet">Sujet :</label></td>
		            <td width=55%>
					<input type="text" name="sujet" id="sujet" size=50/>
					</td>
					<td></td>
		     </tr>
			 <tr>
		           <td width=20% class="td"><label for="msg">Message :</label></td>
		            <td colspan=2>
					<div class="td_message_consult">
					<textarea name="msg" id="msg" rows="17" cols="63" ></textarea>
					</div>
					</td>
					
		     </tr>
			 
		         </table><br>
			<center><input type="submit" value="Envoyer" /> <input type="reset" value="Réinitialiser" /></center>
         </form>			
		</div>
		


</div>
</div>
</div>


<?php } ?>