<?php
session_start();
if (!isset($_SESSION['pseudo_admin']) and !isset($_SESSION['mdp_admin']) )
{
header('location: identification_admin.php');
}
else
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin accueil</title>
<link href="Styles/menu_admin/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.Style26 {color: #0099CC}
-->
</style>
<?php include ("en_tete2.php"); ?>
<link href="Styles/entete_admin/style_accueil.css" rel="stylesheet" type="text/css" />
<link href="Styles/style.css" rel="stylesheet" type="text/css" />
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">
<div><br>
<center>
<img src="Image/bienvenue.gif" width="349" height="89" />
</center>
  <center>
<img src="image/bu.jpg" width="650" height="550"/>
</center>
</div>

</div>
</div>

	
<?php } ?>