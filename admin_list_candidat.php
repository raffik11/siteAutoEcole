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
<title>Liste abonnée</title>


<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> Liste des candidats</div>
 <div class="form_parametre">
 
 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>
<br><br>
<div class="border_table" >
<table width="100%" class="table_horaire" >

<tr>
	 <td width=5% class="td_vide"></td>  <td class="titre_ab">Nom</td> <td class="titre_ab">Prenom</td>
	 <td class="titre_ab">Type Permis</td>  <td width=5% class="td_vide"></td> 
</tr>
 <?php 
$reponse = mysql_query("SELECT * FROM candidat ORDER BY idc DESC");
while ($rep = mysql_fetch_array ($reponse))
{
 $id=$rep['idc'];
?>
	   		   
		   
	<tr>
		 <td width=5%><?php echo'<a href="admin_list_candidat_consulter.php?id_ab='.$id.'" title="Consulter en détail"><img src="image/zoom.png"/></a>';?></td>   <td><?php echo $rep['nom'];?></td> <td><?php echo $rep['prenom'];?></td> <td><?php echo $rep['cat'];?></td> <td width=5%> <?php echo'<a href="admin_list_candidat_supp.php?id_ab='.$id.'" title="Supprimer"><img src="image/close.png"/></a>';?> </td> 
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