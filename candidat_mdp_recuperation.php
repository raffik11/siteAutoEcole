<?php session_start(); ?>
<title>recuperation mot de passe</title>

<?php
   //verifiction des informations ( saisie) 
	
if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['phrase_saisie'])  )
{ 
             //recuperation des données saisies
 
              $login =$_POST['login'];
              $phrase =$_POST['phrase_saisie'];



            // connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() );
            $reponse=mysql_query("select * from candidat where pseudo='".$login."' && phrase_sec='".$phrase."'");
            $existe=mysql_num_rows($reponse);
			
			while ($donnees=mysql_fetch_array($reponse) )
           {
		   $mdp=$donnees['mot_passe'];
		   }
		   
		   if($existe)
		   {?>
		   
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Paramétres de compte</title>
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc">
<?php include ("menu.php");?>

  <div id="corps">
    
    <div class="form_parametre">
	 <div class="titre">Recup&eacute;ration  mot de passe</div>
	 <center><p class="text_mdp_ob"> <img src="image/information.png" /> Vous pouvez desormais vous connecté sur votre compte<br> voici les information qui conserne votre compte :<br> </p>
    <?php $_SESSION['pseudo'] = $login;
	 $_SESSION['mdp'] = $mdp;?>
	 
	 <table  class="table_mdp1" width=46%>
     <tr>
           <td width=50%>Pseudo :</td>
           <td class="info"><strong><?php echo $login;?></strong> </td>
	 </tr>
	 

	  <tr >
	        <td width=50%>Mot de passe :</td>
            <td class="info"><strong><?php echo $mdp;?></strong></td>
      </tr>
	  
	  <tr>
	  <td colspan=2><center><a style="text-decoration: none;"href="candidat_accueil.php"><input type="submit" value="Connexion" /></a></center></td>
	  </tr>
	  </table></center>
    </div>
	
	
   </div>
   
</div>

<?php include ("pied.php");?>	
		   
		   
		   <?php
		   }else
		        {
				echo "<META http-equiv='refresh' content='0; URL=candidat_mdp_oublier_erreur1.php'>";
				echo"<script language='javascript'> alert('Votre Pseudo ou phrase secrète est incorrecte!');</script>";
				}
		   
	}else
          {
		   echo "<META http-equiv='refresh' content='0; URL=candidat_mdp_oublier_erreur.php'>";
           echo"<script language='javascript'> alert('Veuillez saisir votre Pseudo et phrase secrète!!!');</script>";
          }		  
		   
?>
