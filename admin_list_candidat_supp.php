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
<title>Supprission candidat</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre">supprimer candidat </div>
 <div class="form_parametre">
 
 <?PHP 

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
  $id=$_GET['id_ab'];     
//pour la supperission des message 
 $reponse=mysql_query("DELETE FROM candidat where idc='".$id."' ");
  
  echo"<script language='javascript'> alert('La supprission est effectuer avec succés !');</script>";
  echo "<META http-equiv='refresh' content='0; URL=admin_list_candidat.php'>";
  
?>


	



</div>
</div>
</div>

	
<?php } ?>