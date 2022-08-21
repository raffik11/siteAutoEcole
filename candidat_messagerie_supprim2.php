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
<title>Messagerie</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>

<?php include ("en_tete _candidat1.php"); ?>
<link href="Styles/style_accueil.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/mail.png'/> Messagerie </div>
 <div class="form_parametre">
 
 <?PHP 
 //le id du commentaire a qui en repond
  $id_messag=$_GET['id_m'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
//pour la supperission des message 
 $reponse=mysql_query("select * from messagerie_admin where idmsga='$id_messag' and supprimer='false'");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
	  
	         if ($existe)
                      {
					  mysql_query("UPDATE messagerie_admin SET supprimer='true' where idmsga='$id_messag'");
					  echo "<META http-equiv='refresh' content='0; URL=candidat_messagerie_list_envoyer.php'>";
					  }



?>


	



</div>
</div>
</div>

	
<?php } ?>