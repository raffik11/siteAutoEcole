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
.list {
	color: #000;
	list-style: square;
	font: 24px "Times New Roman", Times, serif;
}
-->
</style>
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc1">


<div id="corps_page_lien">
  <h1 class="Style32">TELECHARGEMENT :<br />
    <br />
    <br />
  </h1>
  <ul>
    <li class="list"><a href="t&eacute;l&eacute;chargement/certificat_medical.pdf">Certificat médical</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="t&eacute;l&eacute;chargement/certificat_medical.pdf"><img src="Image/2014-04-28_211448.jpg" width="113" height="159" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
	     <br />
      <br />
      <br />
    </li>
    <li class="list"><a href="t&eacute;l&eacute;chargement/autorisation_mineur.pdf">Autorisation pour mineur</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <a href="t&eacute;l&eacute;chargement/autorisation_mineur.pdf"><img src="Image/2014-04-28_211516.jpg" width="111" height="154" /></a></li>
	 
  </ul>
  <p>&nbsp;</p>
  <h1 class="h1_natation">&nbsp;</h1> 

</div>
</div>


	
<?php } ?>