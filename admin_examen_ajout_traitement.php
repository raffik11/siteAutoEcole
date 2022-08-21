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

<title>traitement mise a jour nouvelles</title>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
 <?php include ("menu_admin.php");?>

   <div id="corps">
	
<?php
   
              //recuperation des données saisies
     
			  
			  $_POST['pseudo']=strip_tags($_POST['pseudo']);
              $_POST['pseudo']=nl2br($_POST['pseudo']);
			  $_POST['pseudo']=addslashes($_POST['pseudo']);
			  
			  $examen=strip_tags($_POST['examen']);
			  $examen=nl2br($examen);
			  $examen=addslashes($examen);
			  
			  
			  
			  $date=strip_tags($_POST['date']);
			  $date=nl2br($date);
			  $date=addslashes($date);
			  
			  
			  
			  $heure=strip_tags($_POST['heure']);
			  $heure=nl2br($heure);
			  $heure=addslashes($heure);
		
			  
			
				
				// connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() );
			$reponse=mysql_query("INSERT INTO examen(id_exam, candidat, titre_exam, exam, dateexam, heure) VALUES('','".$_POST['pseudo']."','".$examen."','".$examen."','false','".$date."','".$heure."', )");
				
				
				
				
            echo "<META http-equiv='refresh' content='0; URL=admin_examen_ajout.php'>";
          
	
  ?>
	
    </div>
	
</div>	
	
<?php include ("pied_admin.php");?>	
<?php } ?>
	


