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
 


<div class="a1"><a class="lien_simple" href="admin_ajout_com.php"><img style="vertical-align: middle;" src="image/ajouter_com.png"/>   ajouter un commentaire</a></div>
<div class="deffilement">
 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php 
$reponse = mysql_query("SELECT * FROM forum ORDER BY id_com DESC");
while ($rep = mysql_fetch_array ($reponse))
{
 $nbr=$rep['nbre_rep'];
$id=$rep['id_com'];
?>
	   <div class="border_table" >
		   <table width="100%">
		   
		   <tr>
		           <td id="cellule1"><img src="image/offline.png" /> <?php echo $rep['pseudo']; ?></td>
		           <td id="cellule2">post� le <?PHP echo $rep['datepost']; ?></td>
		   </tr>
		     <tr>
		           <td  width="140" rowspan=2><img src="image/imagesquest.jpg" width="150" align="middle" /></td>
		            <td width="500" >
					<div align="justify" class="taille_cellule"> <?php echo $rep['message']; ?></div>
					</td>
		     </tr>
			 <?php 
		      if($rep['nbre_rep']==0)
			  {?>
			 <tr>
			  <?php echo ' <td id="cellule">  <a href="admin_repondre.php?id_q='.$id.'"> <img style="vertical-align: middle;" src="image/repondre.png"></a></td>';?>

			 </tr>
		 <?php }else
		            {
		             echo'<tr valign=bottom><td id="cellule" width=450 align=right><sup class="nbr_msg"><blink>Vous avez '.$nbr.' r�ponse </blink> </sup> <a href="admin_voire.php?id_q='.$id.'"><img style="vertical-align: middle;" src="image/voire.jpg" ></a>  <a href="admin_repondre.php?id_q='.$id.'"><img style="vertical-align: middle;" src="image/repondre.png"></a></td></tr>';
				    }
			        ?>
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