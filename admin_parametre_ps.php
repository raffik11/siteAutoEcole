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

<title>confirmation de la mis a jour</title>
<?php include ("en_tete2.php"); ?>
<div class="font_admin">
 <?php include ("menu_admin.php");?>

   <div id="corps">
	
<?php
   //verifiction des informations ( saisie) 
	
     if ( (!empty($_POST['login_encien']) && !empty($_POST['login_nouveau'])) )
      {
              //recuperation des donn�es saisies
 
              $login =$_POST['login_encien'];
			  $n_login =$_POST['login_nouveau'];
  
            // connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a �chou�e".mysql_error() );

            //selectionner la base et faire la requ�te n�cessaire
            mysql_select_db("auto_ecole")or die("la connexion a �chou�e".mysql_error() );
            $reponse=mysql_query("select * from admin where pseudo='".$login."' ");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
	  
	         if ($existe)
                       {
						    mysql_query("UPDATE admin SET pseudo='$n_login' WHERE pseudo='$login'");
							//mettre a jour les variable session
							$_SESSION['pseudo_admin'] = $n_login;
	                        echo "<META http-equiv='refresh' content='0; URL=admin_accueil.php'>";
	                        echo"<script language='javascript'> alert('vos param�tres de compte ont �t� modifier avec succ�s');</script>";
	
	                  }else
	                         {
							  echo "<META http-equiv='refresh' content='0; URL=admin_parametre_ps_erreur2.php'>";
		                     }
	}else
	  {
	  echo "<META http-equiv='refresh' content='0; URL=admin_parametre_ps_erreur1.php'>";
	  }
	
	
  ?>
	
    </div>
	
</div>	
	

<?php } ?>
	


