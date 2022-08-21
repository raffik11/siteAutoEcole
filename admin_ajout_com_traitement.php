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

<title>traitement forum</title>
<?php include ("en_tete2.php"); ?>
<div class="font_admin">
 <?php include ("menu_admin.php");?>

   <div id="corps">
	
<?php
   //verifiction des informations ( saisie) 
	
     if (!empty($_POST['msg'] ) and $_POST['msg']!="commentaire")
      {
              //recuperation des données saisies
 
              $pseudo='administrateur';
			  $_POST['msg']=strip_tags($_POST['msg']);
              $_POST['msg']=nl2br($_POST['msg']);
			  $_POST['msg']=addslashes($_POST['msg']);
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
            $reponse=mysql_query("INSERT INTO forum (id_com,pseudo,message,datepost) VALUES ( '','".$pseudo."','".$_POST['msg']."','".$dat."')");
            echo "<META http-equiv='refresh' content='0; URL=admin_forum.php'>";
	}else
	  {
	  echo" <script type='text/javascript'> alert('Veuillez saisir un commentaire!');</script>";
	  echo "<META http-equiv='refresh' content='0; URL=admin_ajout_com_erreur.php'>";
	  }
	
	
  ?>
	
    </div>
	
</div>	
	
<?php } ?>
	


