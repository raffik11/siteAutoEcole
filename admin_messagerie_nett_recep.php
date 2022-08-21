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
<title>Messagerie admin</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Messagerie </div>
 <div class="form_parametre">
 
 <?PHP 

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
//pour la supperission des message 
 $reponse=mysql_query("DELETE FROM messagerie_admin where supprimer='true' and supprimer_admin='true'");
  echo "<META http-equiv='refresh' content='0; URL=admin_messagerie.php'>";
  echo"<script language='javascript'> alert('La base de donnee est a jour !');</script>";
  
?>


	



</div>
</div>
</div>


<?php } ?>