<?php
session_start();
if (!isset($_SESSION['pseudo']) and !isset($_SESSION['mdp']) )
{
header('location: examen.php');
}
else{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Examen</title>

<link href="Menu_info/style_menu_info.css" rel="stylesheet" type="text/css" />
<link href="menu_admin/style.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_admin">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Examens</div>
 <div class="form_parametre">
 
	 
 <?PHP 
 
mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>
<div class="div_messagerie">

<table width="100%" cellspacing=2 id="table_messagerie_admin">
<tr><td  class="td" style="border-radius:10px 0px 0px 0px;"><b> Candidat concernés</b>  </td> <td class="td"><b> Examen</b></td> <td class="td"><b> Date</b></td> <td class="td" style="border-radius:0px 10px 0px 0px;"><b> Heure</b></td><td class="td_vide"></td></tr>
 <?php 
$reponse = mysql_query("SELECT * FROM examen where supprimer_admin='false' ORDER BY id_exam DESC");
while ($rep = mysql_fetch_array ($reponse))
{
$id_msg=$rep['id_exam'];
?>
	  
		  
						
			             <tr>
						    
		                    <td class="couleur_msg_nlu"><b><?php echo $rep['candidat']; ?></b></td>
				            <td class="couleur_msg_nlu"><b><?php echo $rep['titre_exam']; ?></b></td>
				            <td class="couleur_msg_nlu"><b><?php echo $rep['dateexam']; ?></b></td>
                            <td class="couleur_msg_nlu"><b><?php echo $rep['heure']; ?></b></td>
							
		                </tr>
						
			     <?php  } ?>
			 
			 
			 
			 
			
		       
				
<?php
}
?>
</table>
</div>	





</div>


</div>
</div>
</div>

	
