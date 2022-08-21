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
<title>Liste des messages envoyer</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>


<?php include ("en_tete _candidat1.php"); ?>
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_accueil.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Boîte d'envoi</div>
 <div class="form_parametre">
 

 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>
<div class="div_messagerie">

<table width="100%" cellspacing=2 id="table_messagerie">
<tr><td class="td_vide"></td> <td  class="td" style="border-radius:5px 0px 0px 0px;"><b>Destinataire </b>  </td> <td class="td"><b> Sujet</b></td> <td class="td" style="border-radius:0px 5px 0px 0px;"><b> Date</b></td><td class="td_vide"></td></tr>
 <?php 
$reponse = mysql_query("SELECT * FROM messagerie_admin WHERE pseudo_candidat='".$_SESSION['pseudo']."' and supprimer='false' ORDER BY idmsga DESC");
while ($rep = mysql_fetch_array ($reponse))
{
$id_msg=$rep['idmsga'];
?>
	  
		   
		   <tr>
		      
		           
				   <?php echo'<td><a href="candidat_messagerie_consult2.php?id_m='.$id_msg.'"> <img src="image/zoom.png" title="consulter"/></a></td>';?>
		           <td> service administratif </td>
				   <td><?php echo $rep['sujet']; ?></td>
				   <td><?php echo $rep['date']; ?></td>
				   <?php echo'<td><a href="candidat_messagerie_supprim2.php?id_m='.$id_msg.'"  > <img src="image/b_drop.png" title="Supprimer" /></a></td>';?>
				   
		   </tr>
		   
		    
			 	
		       
				
<?php
}
?>
</table>
</div>	



</div>
</div>
</div>
	
<?php } ?>