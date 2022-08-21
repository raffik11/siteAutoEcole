
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>confirmation de l'inscription</title>
<?php include ("en_tete.php"); ?>
<div class="font_blanc1">
 <?php include ("menu.php");?>

<div id="corps">
<?php 
      mysql_connect("localhost","root","");
	  mysql_select_db("auto_ecole");
	  $reponse=mysql_query("select pseudo, mot_passe FROM candidat ");
	  
	  $valide=true;
	
	if (!($_POST['sex']=="")AND !($_POST['login']=="") AND !($_POST['pwd1']=="") AND !($_POST['pwd2']=="") AND !($_POST['lastName']=="") AND !($_POST['firstName']=="")  AND (!($_POST['jour']=="") and !($_POST['mois']=="") and !($_POST['annee']==""))AND !($_POST['phrase']=="") )
	{
	       if( $_POST['pwd1']==$_POST['pwd2'] )
		   {
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
	                                       ?><span><img style="vertical-align: middle;" src='image/success1.png'  /> <span class="mesconf">Votre compte a été crée avec succès </span></span><br><br>
										   
										   <?php
	                                  }else
	                                       {
										   echo "<META http-equiv='refresh' content='0; URL=inscription_erreur2.php'>";
	                                       }
										   
			  }else
                  {
				   echo "<META http-equiv='refresh' content='0; URL=inscription_erreur3.php'>";
                  }				  
										   
	}
	else
	{ 
	echo "<META http-equiv='refresh' content='0; URL=inscription_erreur1.php'>";
	}
	
	 mysql_close();
    ?>

    </div>
</div>
