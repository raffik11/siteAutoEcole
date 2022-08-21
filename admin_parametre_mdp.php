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
	
     if (  (!empty($_POST['pwd_encien']) && !empty($_POST['pwd_nouveau']) && !empty($_POST['pwd_nouveau2']) ) )
      {
              //recuperation des données saisies
 
              $mdp =$_POST['pwd_encien'];
              $n_mdp=$_POST['pwd_nouveau'];
              $c_mdp=$_POST['pwd_nouveau2'];
  
            // connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() );
            $reponse=mysql_query("select * from admin where motp='".$mdp."'");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
	  
	         if ($existe)
                      {
					   if ($n_mdp==$c_mdp)
						{
						    mysql_query("UPDATE admin SET motp='$n_mdp' WHERE motp='$mdp'");
							//mettre a jour les variable session
							$_SESSION['mdp_admin'] = $n_mdp;
							
	                       echo "<META http-equiv='refresh' content='0; URL=admin_accueil.php'>";
	                        echo"<script language='javascript'> alert('vos paramétres de compte ont été modifier avec succés');</script>";
					    }else
					     {
						 echo "<META http-equiv='refresh' content='0; URL=admin_parametre_mdp_erreur3.php'>";
						 }
	  
	
	                  }else
	                         {
		                      echo "<META http-equiv='refresh' content='0; URL=admin_parametre_mdp_erreur2.php'>";
		                     }
	}else
	  {
	  echo "<META http-equiv='refresh' content='0; URL=admin_parametre_mdp_erreur1.php'>";
	  }
	
	
  ?>
	
    </div>
	
</div>	

<?php } ?>
	


