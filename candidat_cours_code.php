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

<title>Nos tarifs</title>


<style type="text/css">
<!--
.Style32 {color: #000000}
-->
</style>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 254px;
	top: 329px;
}
</style>
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc1">


<div id="corps_page_lien">
  <h1 class="Style32">COURS DE CODE  </h1>
  <p> <h1>Vous pouvez  télécharger nos cours de code au format pdf.</h1></p>
<p> Cliquez sur l'icone pour lancer le t&eacute;l&eacute;chargement du pdf<a href="t&eacute;l&eacute;chargement/signalisation.pdf"><img src="image/icone_pdf.png" width="100" height="100" /></a></p>
<img src="Image/img-3.png"  width="800" height="500"/>
  <h1 class="h1_natation">&nbsp;</h1> 

</div>
</div>


	
<?php } ?>