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

<title>traitement forum reponse</title>
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_menu_info_ab.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc">
 <?php include ("menu_candidat.php");?>

   <div id="corps">
	
<?php
   //verifiction des informations ( saisie) 
	$id_com=$_GET['id'];
	$nbr_rep=$_GET['nbre'];
     if (!empty($_POST['msg'] ) and $_POST['msg']!="commentaire")
      {
              //recuperation des données saisies
 
              $pseudo =$_SESSION['pseudo'];
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
            $reponse=mysql_query("INSERT INTO reponse (id_rep,id_com,pseudo,daterep,reponse) VALUES ( '','".$id_com."','".$pseudo."','".$dat."','".$_POST['msg']."')");
			
			//acceder a la base donnee forum
	
			$nbr_rep=$nbr_rep+1;
			$rep=mysql_query("UPDATE forum SET nbre_rep='$nbr_rep' WHERE id_com='$id_com'");
            echo "<META http-equiv='refresh' content='0; URL=candidat_forum.php'>";

	}else
	  {
	  echo" <script type='text/javascript'> alert('Veuillez saisir une reponse!');</script>";
	  echo "<META http-equiv='refresh' content='0; URL=candidat_ajout_reponse_erreur.php?id_q=".$id_com."'>";
	  }
	
	
  ?>
	
    </div>
	
</div>	
		
<?php } ?>
	


