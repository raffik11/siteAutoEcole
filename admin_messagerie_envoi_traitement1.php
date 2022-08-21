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

<title>traitement messagerie</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
 <?php include ("menu_admin.php");?>

   <div id="corps">
	
<?php
 
	
              //recuperation des données saisies
              $id=$_GET['id'];
              $pseudo =$_POST['pseudo'];
			  $_POST['msg']=strip_tags($_POST['msg']);
              $_POST['msg']=nl2br($_POST['msg']);
			  $_POST['msg']=addslashes($_POST['msg']);
			  
			  $objet=strip_tags($_POST['objet']);
			  $objet=addslashes($objet);
			  $sujet=strip_tags($_POST['sujet']);
			  $sujet=addslashes($sujet);
			  $j=date("d");
			  $m=date("m");
			  $a=date("Y");
			  $h=date("H");
			  $i=date("i");
			  $dat=$j."/".$m."/".$a." à ".$h.":".$i;
  
            // connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() );
            $reponse=mysql_query("INSERT INTO messagerie_condidat (idmsgc,pseudo_destinataire,date,message,objet,sujet,lu,supprimer,supprimer_admin) VALUES ( '','".$pseudo."','".$dat."','".$_POST['msg']."','".$objet."','".$sujet."','false','false','false')");
            echo "<META http-equiv='refresh' content='0; URL=admin_list_candidat_consulter.php?id_ab=".$id." '>";
	
	
	
  ?>
	
    </div>
	
</div>	
	

<?php } ?>
	


