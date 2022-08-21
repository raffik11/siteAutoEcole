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
<title>forum consultation commentaire</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>

<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/comments.png'/> Forum</div>
 <div class="form_parametre">
 

 <div class="a1"><a class="lien_simple" href="candidat_ajout_com.php"><img style="vertical-align: middle;" src="image/ajouter_com.png"/>  ajouter un commentaire</a></div>
 <?PHP 
 //le id du commentaire a qui en repond
  $id_commentair=$_GET['id_q'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
 
$reponse = mysql_query("SELECT * FROM forum where id_com='$id_commentair' ");
while ($rep = mysql_fetch_array ($reponse))
{
$nbr=$rep['nbre_rep'];
$id=$rep['id_com'];
?>
        
	   <div class="border_table" >
		   <table width="100%">
		   
		   <tr>
		           <td id="cellule1"><img src="image/offline.png" /> <?php echo $rep['pseudo']; ?></td>
		           <td id="cellule2">posté le <?PHP echo $rep['datepost']; ?></td>
		   </tr>
		     <tr>
		           <td  width="140" rowspan=2><img src="image/imagesquest.jpg" width="150" align="middle" /></td>
		            <td width="500" >
					<div align="justify" class="taille_cellule"> <?php echo $rep['message']; ?></div>
					</td>
		     </tr>
			 <tr>
			  <?php echo ' <td id="cellule">  <a href="candidat_repondre.php?id_q='.$id.'"> <img style="vertical-align: middle;" src="image/repondre.png"></a></td>';?>

			 </tr>
		         </table>
				 </div>
		   <?php
}
?>


<center><img src="image/haut1.png"/></center>
<div class="border_table_reponse" >
<?PHP 
 //le id du commentaire a qui en repond
  $id_commentair=$_GET['id_q'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
 
$reponse = mysql_query("SELECT * FROM reponse where id_com='$id_commentair' ORDER BY id_rep DESC LIMIT 0,3 ");
while ($rep = mysql_fetch_array ($reponse))
{

?>
        
	   <div class="border_table" >
		   <table width="100%">
		   
		   <tr>
		           <td id="cellule11"><img src="image/offline1.png" /> <?php echo $rep['pseudo']; ?></td>
		           <td id="cellule22">posté le <?PHP echo $rep['daterep']; ?></td>
		   </tr>
		     <tr>
		           <td  width="140" rowspan=2><img src="image/imagesquest1.jpg" width="150" align="middle" /></td>
		            <td width="500" >
					<div align="justify" class="taille_cellule"> <?php echo $rep['reponse']; ?></div>
					</td>
		     </tr>
		         </table>
		</div>   
		<?php }
?>
</div>

</div>
	




</div>
</div>
	
<?php } ?>