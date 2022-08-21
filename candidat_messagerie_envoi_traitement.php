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

<title>traitement messagerie</title>

<?php include ("en_tete _candidat1.php"); ?>
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_accueil.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_menu_info_ab.css" rel="stylesheet" type="text/css" />
<div class="font_blanc">
 <?php include ("menu_candidat.php");?>

   <div id="corps">
	
<?php
   //verifiction des informations ( saisie) 
	
     if (!empty($_POST['objet'] ) and !empty($_POST['sujet'] ) and  !empty($_POST['msg'] ) )
      {
              //recuperation des données saisies
 
              $pseudo =$_SESSION['pseudo'];
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
            $reponse=mysql_query("INSERT INTO messagerie_admin (idmsga,pseudo_candidat,date,objet,sujet,message,lu,supprimer,supprimer_admin) VALUES ( '','".$pseudo."','".$dat."','".$objet."','".$sujet."','".$_POST['msg']."','false','false','false')");
            echo "<META http-equiv='refresh' content='0; URL=candidat_messagerie.php'>";
	}else
	  {
	  echo "<META http-equiv='refresh' content='0; URL=candidat_messagerie_envoi_erreur.php'>";
	  }
	
	
  ?>
	
    </div>
	
</div>	
		
<?php } ?>
	


