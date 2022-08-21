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
<title>Messagerie Admin</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Boîte de réception</div>
 <div class="form_parametre">
 
	 
 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>
<div class="div_messagerie">

<table width="100%" cellspacing=2 id="table_messagerie_admin">
<tr><td class="td_vide"></td> <td class="td_vide"></td><td  class="td" style="border-radius:10px 0px 0px 0px;"><b>Expéditeur</b>  </td> <td class="td"><b> Sujet</b></td> <td class="td" style="border-radius:0px 10px 0px 0px;"><b> Date</b></td><td class="td_vide"></td></tr>
 <?php 
$reponse = mysql_query("SELECT * FROM messagerie_admin where supprimer_admin='false' ORDER BY idmsga DESC");
while ($rep = mysql_fetch_array ($reponse))
{
$id_msg=$rep['idmsga'];
?>
	  
		   <?php 
		      if($rep['lu']=='true')
			  {?>
		   
		   <tr>
		      
		           
				   <?php echo'<td><a href="admin_messagerie_consult.php?id_m='.$id_msg.'"> <img src="image/zoom.png" title="consulter"/></a></td>';?>
				   <td><img src="image/email_open.png" title="Message lu"/></td>
		           <td><?php echo $rep['pseudo_candidat']; ?></td>
				   <td><?php echo $rep['sujet']; ?></td>
				   <td><?php echo $rep['date']; ?></td>
				   <?php echo'<td><a href="admin_messagerie_supprim.php?id_m='.$id_msg.'"  > <img src="image/b_drop.png" title="Supprimer" /></a></td>';?>
				   
		   </tr>
		   
		     <?php }else
			            { ?>
						
			             <tr>
						    <?php echo'<td class="couleur_msg_nlu"><a href="admin_messagerie_consult.php?id_m='.$id_msg.'"> <img src="image/zoom.png" title="consulter"/></a></td>';?>
							<td class="couleur_msg_nlu"><img src="image/email2.png" title="Message Non lu" /></td>
		                    <td class="couleur_msg_nlu"><b><?php echo $rep['pseudo_candidat']; ?></b></td>
				            <td class="couleur_msg_nlu"><b><?php echo $rep['sujet']; ?></b></td>
				            <td class="couleur_msg_nlu"><b><?php echo $rep['date']; ?></b></td>
							<?php echo'<td class="couleur_msg_nlu"><a href="admin_messagerie_supprim.php?id_m='.$id_msg.'" > <img src="image/b_drop.png" title="Supprimer"/></a></td>';?>
		                </tr>
						
			     <?php  } ?>
			 
			 
			 
			 
			
		       
				
<?php
}
?>
</table>
</div>	


<div class="titre_nett"> Mettre a jour la Boîte de recéption</div>
<div class="div_messagerie_admin_nett">
<?php
 $existe=true;
$reponse = mysql_query("SELECT * FROM messagerie_admin");

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
                        <img style="vertical-align: middle;" src="image/information.png" /> Dans ce champs vous pouvez mettre a jour la base de donnée en supprimant les message supprimé par les candidats et aussi par vous.
                      </p>
                              <a class="lien" href="admin_messagerie_nett_recep.php">Nettoyer la boite de réception</a>
			<?php }else
					       {
						   echo"<p><img style=\"vertical-align: middle;\" src='image/success2.png'  /> La Boîte de réception est à jour......</p>";
						   }
?>


</div>


</div>
</div>
</div>
	
<?php } ?>