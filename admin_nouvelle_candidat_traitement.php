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
     
			  
			  $_POST['nouv_p']=strip_tags($_POST['nouv_p']);
              $_POST['nouv_p']=nl2br($_POST['nouv_p']);
			  $_POST['nouv_p']=addslashes($_POST['nouv_p']);
			  
			  $nouv1=strip_tags($_POST['nouv_1']);
			  $nouv1=nl2br($nouv1);
			  $nouv1=addslashes($nouv1);
			  
		
			  
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
			$reponse=mysql_query("UPDATE nouvelle_candidat SET titre_nouv ='".$_POST['nouv_p']."', nouvelle ='".$nouv1."',datenouv='".$dat."' ");
				
				
				
				
            echo "<META http-equiv='refresh' content='0; URL=admin_nouvelle_candidat.php'>";
          
	
  ?>
	
    </div>
	
</div>	
	
	
<?php } ?>
	


