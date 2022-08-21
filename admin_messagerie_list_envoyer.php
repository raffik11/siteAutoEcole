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
<title>Liste des messages admin envoyer</title>


<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Boîte d'envoi</div>
 <div class="form_parametre">
 
   
 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>
<div class="div_messagerie">

<table width="100%" cellspacing=2 id="table_messagerie_admin">
<tr><td class="td_vide"></td> <td  class="td" style="border-radius:10px 0px 0px 0px;"><b>Destinataire </b>  </td> <td class="td"><b> Sujet</b></td> <td class="td" style="border-radius:0px 10px 0px 0px;"><b> Date</b></td><td class="td_vide"></td></tr>
 <?php 
$reponse = mysql_query("SELECT * FROM messagerie_condidat WHERE  supprimer_admin='false' ORDER BY idmsgc DESC");
while ($rep = mysql_fetch_array ($reponse))
{
$id_msg=$rep['idmsgc'];
?>
	  
		   
		   <tr>
		      
		           
				   <?php echo'<td><a href="admin_messagerie_consult2.php?id_m='.$id_msg.'"> <img src="image/zoom.png" title="consulter"/></a></td>';?>
		           <td> <?php echo $rep['pseudo_destinataire']; ?> </td>
				   <td><?php echo $rep['sujet']; ?></td>
				   <td><?php echo $rep['date']; ?></td>
				   <?php echo'<td><a href="admin_messagerie_supprim2.php?id_m='.$id_msg.'"  > <img src="image/b_drop.png" title="Supprimer" /></a></td>';?>
				   
		   </tr>
		   
		    
			 	
		       
				
<?php
}
?>
</table>
</div>	


<div class="titre_nett"> Mettre a jour la Boîte d'envoi</div>
<div class="div_messagerie_admin_nett">
<?php
 $existe=true;
$reponse = mysql_query("SELECT * FROM messagerie_condidat");

				while ( $donnees=mysql_fetch_array($reponse) and $existe )
                     {  
                           if ( $donnees['supprimer']=='true' and $donnees['supprimer_admin']=='true' ) 
						   {
                                 $existe=false;
                           }
	                  }
			
                if ( !($existe) )
                  {?>
					   <p>
                        <img style="vertical-align: middle;" src="image/information.png" /> Dans ce champs vous pouvez mettre a jour la base de donnée en supprimant les message supprimé par les abonnés et aussi par vous.
                      </p>
                              <a class="lien1" href="admin_messagerie_nett_envoi.php">Nettoyer la boite d'envoi</a>
			<?php }else
					       {
						   echo"<p><img style=\"vertical-align: middle;\" src='image/success2.png'  /> La Boîte d'envoi est à jour......</p>";
						   }
?>


</div>


</div>
</div>
</div>

	
<?php } ?>