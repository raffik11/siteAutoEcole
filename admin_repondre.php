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
<title>forum</title>
<!--pour verifier le formulaire-->
<script language="JavaScript" type="text/javascript">
function verification() 
{message="";
 	if(document.form.msg.value=='commentaire' || document.form.msg.value=='' ){message=message+"\n-Veuillez saisir le commentaire";}

	
	if(message!='')
     {alert("Veuillez completer les champs :\n"+message);
       return false;
	   }else{
			alert("Votre commentaire est posté avec succés");
            return true;
			}
  }
 
</script>

<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

<div id="corps">


<div class="titre"> <img style="vertical-align: middle;" src='image/comments.png'/> Forum</div>
 <div class="form_parametre">
 

 <div class="a1"><a class="lien_simple" href="admin_ajout_com.php"><img style="vertical-align: middle;" src="image/ajouter_com.png"/>  ajouter un commentaire</a></div>
 <?PHP 
 //le id du commentaire a qui en repond
  $id_commentair=$_GET['id_q'];

mysql_connect("localhost","root","");
mysql_select_db("auto_ecole");?>

 <?php  
       
 
$reponse = mysql_query("SELECT * FROM forum where id_com='$id_commentair' ");
while ($rep = mysql_fetch_array ($reponse))
{
$nbr=$rep['nbre_rep'];
$id=$rep['id_com'];
?>
        
	   <div class="border_table" >
		   <table width="100%">
		   
		   <tr>
		           <td id="cellule1"><img src="image/offline.png" /><?php echo $rep['pseudo']; ?></td>
		           <td id="cellule2">posté le <?PHP echo $rep['datepost']; ?></td>
		   </tr>
		     <tr>
		           <td  width="140" rowspan=2><img src="image/imagesquest.jpg" width="150" align="middle" /></td>
		            <td width="500" >
					<div align="justify" class="taille_cellule">  <?php echo $rep['message']; ?></div>
					</td>
		     </tr>
			 
		         </table>
				 </div>
		   <?php
}
?>




 <form name="form"  <?php echo'action="admin_ajout_reponse.php?nbre='.$nbr.'&id='.$id.'"'; ?> method="POST" onSubmit="return verification()">
   <table id="table_messagerie2" size=100% >
   <tr><td width=20%></td><td></td></tr>
   <tr>
         <td width=20% class="td"><label for="msg">commentaire :</label></td>
		           
         <td>
            <textarea name="msg" rows="10" cols="60">commentaire</textarea>
        </td>
   </tr>
     
   <tr><td width=20%></td><td></td></tr>
   </table>
   <center><input type="submit" value="Envoyer" /> <input type="reset" value="Effacer"/></center>
  </form> 





	



</div>
</div>
</div>
	
<?php } ?>