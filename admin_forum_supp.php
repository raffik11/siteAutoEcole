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
<title>Forum mise a jour admin</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Forum mise a jour </div>
 <div class="form_parametre">
 
 <?PHP 

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
  $id_qs=$_GET['id_q'];     
//pour la supperission des message 
 $reponse=mysql_query("DELETE FROM forum where id_com='".$id_qs."'");
 echo "<META http-equiv='refresh' content='0; URL=admin_forum_mettre_a_jour.php'>";
  echo"<script language='javascript'> alert('Le commentaire a étè supprimer avec succées !');</script>";
  
  
?>


	



</div>
</div>
</div>
	
<?php } ?>