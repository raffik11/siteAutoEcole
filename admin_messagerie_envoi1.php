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
<title>Messagerie Envoi</title>

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
	   }else
	        {
			alert("Votre message est envoyer avec succés");
            return true;
			}
  }
 
</script>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Repondre au message </div>
 <div class="form_parametre">
 
    
      
	   
	   <div class="div_messagerie3">
	    <form name="form" method="post" action="admin_messagerie_envoi_traitement.php" onSubmit="return verification()">
		   <table width="100%" id="table_messagerie2">
		     
			 <tr>
		           <td width=35% class="td"><label for="pseudo">Destinataire:</label></td>
		            <td width=50%>
					    <select name="pseudo" id="pseudo" >
						 <!--afficher tous les abonnee-->
						 <?php
						    $ps=$_GET['ps'];
                            mysql_connect("localhost","root","");
                            mysql_select_db("auto_ecole");
							
							$reponse = mysql_query("SELECT * FROM candidat where pseudo='".$ps."'");
                            while ($rep = mysql_fetch_array ($reponse))
                            {
							echo '<option value="'.$rep['pseudo'].'" >'.$rep['sexe'].'  '.$rep['pseudo'].'</option>';
					   
							}
						 
						 ?>
                         
                        </select>
					</td>
					<td></td>
		     </tr>
			 
		     <tr>
		           <td width=35% class="td"><label for="objet">objet :</label></td>
		            <td width=50%>
					<input type="text" name="objet" id="objet"size=50/>
					</td>
					<td></td>
		     </tr>
			 <tr>
		           <td width=35% class="td"><label for="sujet">Sujet :</label></td>
		            <td width=50%>
					<input type="text" name="sujet" id="sujet" size=50/>
					</td>
					<td></td>
		     </tr>
			 <tr>
		           <td width=50% class="td"><label for="msg">Message :</label></td>
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