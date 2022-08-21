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
<title>Consultation abonnee</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre">Consultation de l'abonné</div>
 <div class="form_parametre">
 
 <?PHP 
 //le id du commentaire a qui en repond
  $id=$_GET['id_ab'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
 
$reponse = mysql_query("SELECT * FROM candidat where idc='$id' ");
while ($rep = mysql_fetch_array ($reponse))
{
?>


<table class="table_consult_ab"width="80%">       
<tr>      
	<td class="td_consulter_ab"width=35%>Id </td>  <td><?php echo $rep['idc'];?></td>   
</tr>	   
<tr>
    <td class="td_consulter_ab" width=35%>Sexe </td>  <td><?php if ($rep['sexe']=='Mr' ){
	                                                        echo 'Masculin';
															}else
															     { echo 'Féminin';}
															?>
														</td>
</tr>
<tr>
    <td class="td_consulter_ab" width=35%>Nom </td>  <td><?php echo $rep['nom'];?></td>
</tr>
<tr>
    <td class="td_consulter_ab" width=35%>Prenom </td>  <td><?php echo $rep['prenom'];?></td>
</tr>
<tr>
    <td class="td_consulter_ab" width=35%>Date de naissance </td>  <td><?php echo $rep['date_naiss'];?></td>
</tr>
<tr>
    <td class="td_consulter_ab" width=35%>Pseudo </td>  <td><?php echo $rep['pseudo'];?></td>
</tr>
<tr>
    <td class="td_consulter_ab" width=35%>Catégorie Permis </td>  <td><?php echo $rep['cat'];?></td>
</tr>
<tr>
    <td class="td_consulter_ab"  width=35%>Mot de passe </td>  <td><?php echo $rep['mot_passe'];?></td>
</tr>
<tr>
    <td class="td_consulter_ab" width=35%>Phrase secrète </td>  <td><?php echo $rep['phrase_sec'];?></td>
</tr>	
</table>	
<?php 
$id=$rep['idc'];
$ps=$rep['pseudo'];
echo'<center><a href="admin_messagerie_envoi2.php?id='.$id.'"><input type="submit" value="Envoyer un message à '.$ps.'"/></a></center>';?>

<?php } ?>

	



</div>
</div>
</div>
	
<?php } ?>