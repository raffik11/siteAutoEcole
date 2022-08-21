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
<title>forum</title>


<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/comments.png'/> Forum</div>
 <div class="form_parametre">
 
 
 

 <div class="deffilement2">
 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php 
$reponse = mysql_query("SELECT * FROM forum ORDER BY id_com DESC");
while ($rep = mysql_fetch_array ($reponse))
{
 $id=$rep['id_com'];
?>
	   <div class="border_table" >
		   <table width="100%">
		   
		   <tr>
		           <td width=140 id="cellule1"><img src="image/offline.png" /> <?php echo $rep['pseudo']; ?></td>
		           <td width=500 id="cellule2a">posté le <?PHP echo $rep['datepost']; ?></td>
				   <?php echo' <td id="cellule3"><a href="admin_forum_supp2.php?id_q='.$id.'"><img style="vertical-align: middle; height:18px; width:18px;" src="image/b_drop.png" title="supprimer"/> </a> </td> ';?>
		   </tr>
		     <tr>
		           <td  width=140 rowspan=2><img src="image/imagesquest.jpg" width=150 align="middle" /></td>
		            <td width=500 >
					<div align="justify" class="taille_cellule">  <?php echo $rep['message']; ?></div>
					</td>
					<td></td>
		     </tr>
			 
			 
				    
		         </table>
				 </div>
		   <?php
}
?>

	


</div>
</div>
</div>
</div>

	
<?php } ?>