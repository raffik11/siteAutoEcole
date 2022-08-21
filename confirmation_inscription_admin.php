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

<title>admin ajout candidat confirmation</title>
<?php include ("en_tete2.php"); ?>
<div class="font_admin">
 <?php include ("menu_admin.php");?>

<div id="corps">
           <?php  // Connexion à la base de données 
      mysql_connect("localhost","root","");
	  mysql_select_db("auto_ecole");
	  $reponse=mysql_query("select pseudo, mot_passe FROM candidat ");
	  
	  $valide=true;
	
	
	      
				while ( $donnees=mysql_fetch_array($reponse) and $valide )
                     {  
                           if ( $_POST['login'] == $donnees['pseudo'] OR $_POST['pwd1'] == $donnees['mot_passe'] ) 
						   {
                                 $valide=false;
                           }
	                  }
	
	                                 if ( $valide )
	                                  { 
	                                      $nom=strip_tags($_POST['lastName']);
										  $nom=addslashes($nom);
										  
	                                      $prenom=strip_tags($_POST['firstName']);
										  $prenom=addslashes($prenom);
										  
	                                      $j=strip_tags($_POST['jour']);
										  $m=strip_tags($_POST['mois']);
										  $a=strip_tags($_POST['annee']); 
										  $date_naiss=$j.'/'.$m.'/'.$a;
										  
	                                      $pseudo=strip_tags($_POST['login']);
										  $pseudo=addslashes($pseudo);
										  
										  $cat=strip_tags($_POST['cat']);
										  
	                                      $pwd=strip_tags($_POST['pwd1']);
										  $pwd=addslashes($pwd);
										  
	                                      $sex=strip_tags($_POST['sex']);
										  $phrase_sec=strip_tags($_POST['phrase']);
	                                      $phrase_sec=addslashes($phrase_sec);
										   
	                                      $reponse=mysql_query("INSERT INTO candidat (idc,sexe,nom,prenom,date_naiss,pseudo,mot_passe,phrase_sec,cat) VALUES ( '','$sex','$nom','$prenom','$date_naiss','$pseudo','$pwd','$phrase_sec','$cat')");
	                                       echo "<META http-equiv='refresh' content='0; URL=admin_list_candidat.php'>";
										   echo"<script language='javascript'> alert('Le compte a été crée avec succées!');</script>"; 
										 
	                                  }else
	                                       {
										   echo "<META http-equiv='refresh' content='0; URL=inscription_admin_erreur.php'>";
										   echo"<script language='javascript'> alert('Le Pseudo ou le mot de passe existe!');</script>"; 
	                                       }
										   
							  
										   
	
	 mysql_close();
    ?>

    </div>
</div>


<?php } ?>