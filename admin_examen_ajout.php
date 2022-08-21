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
    if(document.form.pseudo.value=='pseudo_des'){examen=examen+"\n-Veuillez saisir la Destination";}
 	if(document.form.objet.value==''){examen=examen+"\n-Veuillez saisir l'examen";}
	if(document.form.sujet.value=='' ){examen=examen+"\n-Veuillez saisir la date";}
	
	if(document.form.msg.value==''){examen=examen+"\n-Veuillez saisir le message";}
	
	if(examen!='')
     {alert("Veuillez completer les champs :\n"+examen);
       return false;
	   }else
	        {
			alert("Votre message est envoyer avec succés");
            return true;
			}
  }
 
</script>
<script type="text/javascript" src="Scripts/js_inscription.js"></script>

<link href="Styles/css_inscription.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Ajouter un examen</div>
 <div class="form_parametre">
 
    
      
	   
	   <div class="div_messagerie3">
	    <form name="form" method="post" action="admin_examen_ajout_traitement.php" onSubmit="return verification()">
		   <table width="100%" id="table_messagerie2">
		     
			 <tr>
		           <td width=35% class="td"><label for="pseudo">Candidat Concern&eacute;:</label></td>
		            <td width=50%>
					    <select name="pseudo" id="pseudo" >
						 <option value="pseudo_des" >Candidat Concerné</option>
						 <!--afficher tous les candidat-->
						 <?php
						 
                            mysql_connect("localhost","root","");
                            mysql_select_db("auto_ecole");
							
							$reponse = mysql_query("SELECT * FROM candidat ORDER BY idc DESC");
                            while ($rep = mysql_fetch_array ($reponse))
                            {
							echo '<option value="'.$rep['pseudo'].'" >'.$rep['sexe'].'  '.$rep['nom'].'  '.$rep['prenom'].'</option>';
					   
							}
						 
						 ?>
                         
                        </select>
					</td>
					<td></td>
		     </tr>
			 
		     <tr>
		           <td width=35% class="td"><label for="examen">Examen :</label></td>
		            <td width=50%>
					<input type="text" name="examen" id="examen"size=50/>
					</td>
					<td></td>
		     </tr>
             
			 <tr>
		           <td width=35% class="td"><label for="date">Date :</label></td>
		            <td width=50%>
					<input type="text" name="date" id="date"size=50/>
                  
					</td>
					<td></td>
		     </tr>
             <tr>
		           <td width=35% class="td"><label for="heure">Heure :</label></td>
		            <td width=50%>
					<input type="text" name="heure" id="heure" size=50/>
					</td>
					<td></td>
		     </tr>
			 
			 
		         </table><br>
          <center><input type="submit" value="Soumettre" /> </center>
         </form>	
         		
	  </div>
		


</div>
</div>
</div>

<?php include ("pied_admin.php");?>	
<?php } ?>