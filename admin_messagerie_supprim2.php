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
<title>Messagerie</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

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
 $reponse=mysql_query("select * from messagerie_condidat where idmsgc='$id_messag' and supprimer_admin='false'");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
	  
	         if ($existe)
                      {
					  mysql_query("UPDATE messagerie_condidat SET supprimer_admin='true' where idmsgc='$id_messag'");
					  echo "<META http-equiv='refresh' content='0; URL=admin_messagerie_list_envoyer.php'>";
					  }



?>


	



</div>
</div>
</div>


<?php } ?>