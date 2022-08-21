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
<title>Messagerie consultation</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>

<?php include ("en_tete _candidat1.php"); ?>
<link href="Styles/style_accueil.css" rel="stylesheet" type="text/css" />
<link href="Styles/menu_candidat/style_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Consultation Messagerie </div>
 <div class="form_parametre">
 
 <?PHP 
 //le id du commentaire a qui en repond
  $id_messag=$_GET['id_m'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
 
$reponse = mysql_query("SELECT * FROM messagerie_condidat where idmsgc='$id_messag' and supprimer='false' ");
while ($rep = mysql_fetch_array ($reponse))
{

?>
       
      
	   
	   <div class="div_messagerie2">
		   <table width="100%" id="table_messagerie">
		   
		   <tr>
		           <td width="17%" class="tabl">Emetteur : </td>
             <td class="tabl">AUTO ECOLE OULD AREZKI administation</td>
				   <td class="tabl">Envoy&eacute; le <?php echo $rep['date'];?> </td>
		   </tr>
		     <tr>
		           <td width="17%"><span class="tabl">objet </span>:</td>
		            <td width="45%">
					<?php echo $rep['objet'];?>
	      </td>
					<td class="td_vide"></td>
		     </tr>
			 <tr>
		           <td width="17%" class="tabl">Sujet :</td>
		            <td width="45%">
					<?php echo $rep['sujet'];?>
			   </td>
					<td class="td_vide"></td>
		     </tr>
			 <tr>
		           <td width="17%" class="tabl">Message :</td>
		            <td colspan=2 width="83%">
					<div class="td_message_consult">
					<?php echo $rep['message'];?>
					</div>
					</td>
					
		     </tr>
			 
		         </table>
		</div>
		<center><a style="text-decoration: none;" href="candidat_messagerie.php"><input type="submit" value="Fermer" /></a>  <a style="text-decoration: none;" href="candidat_messagerie_envoi.php"><input type="submit" value="Répondre" /></a></center>
		   <?php
}
//pour la mise a jour des message non lu
 $reponse=mysql_query("select * from messagerie_condidat where idmsgc='$id_messag'");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
	  
	         if ($existe)
                      {
					  mysql_query("UPDATE messagerie_condidat SET lu='true' where idmsgc='$id_messag'");
					  }



?>


	



</div>
</div>
</div>

	
<?php } ?>