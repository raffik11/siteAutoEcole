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

<title>confirmation de la mis a jour</title>
<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/style_menu_info_ab.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<link href="style_accueil.css" rel="stylesheet" type="text/css" />
<div class="font_blanc">
 <?php include ("menu_candidat.php");?>

   <div id="corps">
	
<?php
   //verifiction des informations ( saisie) 
	
     if ( (!empty($_POST['login_encien']) && !empty($_POST['login_nouveau'])) )
      {
              //recuperation des données saisies
 
              $login =$_POST['login_encien'];
			  $n_login =$_POST['login_nouveau'];
  
            // connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() );
            $reponse=mysql_query("select * from candidat where pseudo='".$login."' ");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
	  
	         if ($existe)
                       {    
					        
						    mysql_query("UPDATE candidat SET pseudo='$n_login' WHERE pseudo='$login'");
							
							//mettre a jour la table de la messagerie
							mysql_query("UPDATE messagerie_condidat SET pseudo_destinataire='$n_login' WHERE pseudo_destinataire='$login'");
							//mettre a jour les variable session
							$_SESSION['pseudo'] = $n_login;
							//mettre a jour la table de la messagerie
							mysql_query("UPDATE messagerie_admin SET pseudo_candidat='$n_login' WHERE pseudo_candidat='$login'");
							//mettre a jour la table du forum
							mysql_query("UPDATE forum SET pseudo='$n_login' WHERE pseudo='$login'");
							mysql_query("UPDATE reponse SET pseudo='$n_login' WHERE pseudo='$login'");
							
	                        echo "<META http-equiv='refresh' content='0; URL=candidat_accueil.php'>";
	                        echo"<script language='javascript'> alert('vos paramétres de compte ont été modifier avec succés');</script>";
	
	                  }else
	                         {
							  echo "<META http-equiv='refresh' content='0; URL=candidat_parametre_ps_erreur2.php'>";
		                     }
	}else
	  {
	  echo "<META http-equiv='refresh' content='0; URL=candidat_parametre_ps_erreur1.php'>";
	  }
	
	
  ?>
	
    </div>
	
</div>	
	
	
<?php } ?>
	


