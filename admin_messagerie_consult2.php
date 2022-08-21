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
<title> Consultation Message envoyer</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Consultation Msg envoyer</div>
 <div class="form_parametre">
 
 <?PHP 
 //le id du commentaire a qui en repond
  $id_messag=$_GET['id_m'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
 
$reponse = mysql_query("SELECT * FROM messagerie_condidat where idmsgc='$id_messag' and supprimer_admin='false'");
while ($rep = mysql_fetch_array ($reponse))
{

?>
       
      
	   
	   <div class="div_messagerie2">
		   <table width="100%" id="table_messagerie">
		   
		   <tr>
		           <td width="17%">Destinataire : </td>
		           <td><?php echo $rep['pseudo_destinataire']; ?> </td>
				   <td>Envoyer le <?php echo $rep['date'];?> </td>
		   </tr>
		     <tr>
		           <td width="17%">objet :</td>
		            <td width="45%">
					<?php echo $rep['objet'];?>
					</td>
					<td class="td_vide"></td>
		     </tr>
			 <tr>
		           <td width="17%">Sujet :</td>
		            <td width="45%">
					<?php echo $rep['sujet'];?>
					</td>
					<td class="td_vide"></td>
		     </tr>
			 <tr>
		           <td width="17%">Message :</td>
		            <td colspan=2 width="83%">
					<div class="td_message_consult">
					<?php echo $rep['message'];?>
					</div>
					</td>
					
		     </tr>
			 
		         </table>
		</div>
		<center><a style="text-decoration: none;" href="admin_messagerie_list_envoyer.php"><input type="submit" value="Fermer" /></a> </center>
<?php
}
?>




	



</div>
</div>
</div>
	
<?php } ?>