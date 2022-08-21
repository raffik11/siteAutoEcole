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
<title>Saisir nouvelles admin</title>
<link rel="stylesheet" href="menu_info/style_menu_info_saisi.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info.js" type="text/javascript"></script>

<!--pour verifier le formulaire-->
<script language="JavaScript" type="text/javascript">
function verification() 
{message="";
 	if(document.form.nouv_p.value==''){message=message+"\n-Veuillez saisir la nouvelle principal";}
	if(document.form.nouv_1.value=='' ){message=message+"\n-Veuillez saisir la nouvelle 1";}
	if(document.form.nouv_2.value==''){message=message+"\n-Veuillez saisir la nouvelle 2";}
	
	if(message!='')
     {alert("Veuillez completer les champs :\n"+message);
       return false;
	   }else{
			
            return true;
			}
  }
 
</script>


<style type="text/css">
<!--
.Style26 {color: #000000}
-->
</style>
<?php include ("en_tete2.php"); ?>
<div class="font_admin">
<?php include ("menu_admin.php");?>

  <div id="corps">
    <div class="titre"> La Saisie des Nouvelles </div>
    <div class="form_parametre">
	 
	 <p class="text_insc2"> <img src="image/information.png" />  Pour plus de dynamisme , vous pouvez procéder au changement des nouvelles dans cette rubrique.
     Pour ce faire,veuillez remplir les champs ci-dessous </p>
     
	 <div class="div_messagerie">
	    <form name="form" method="post" action="admin_nouvelle_traitement.php" onSubmit="return verification()">
		   <table width="100%" id="table_messagerie2">
		     <!--DWLayoutTable-->
		   
		     <tr>
		           <td width=27% class="td"><label for="nouv_p">Titre de l'info: *</label></td>
		            <td width=55%>
					<textarea name="nouv_p" id="nouv_p" rows="2" cols="30" ></textarea>					</td>
					<td></td>
		     </tr>
			 <tr>
		           <td width=27% class="td"><label for="nouv_1">Info : *</label></td>
		            <td width=55%>
					<textarea name="nouv_1" id="nouv_1" rows="5" cols="45" ></textarea>					</td>
					<td></td>
		     </tr>
			 
			 
          </table>
		   <br>
			<center><input type="submit" value="Envoyer" /> <input type="reset" value="Réinitialiser" /></center>
        </form>			
	  </div>
		
    <p class="text_insc2"> --> <a href="javascript:OuvrirFenetre('admin_nouvelle_visual.php','popup','width=700,height=400,left=300,top=150,resizable=no,status=no')" class="lien_plan Style26">Visualiser le résultat</a> <--</p>
	    
	 
	 
    
	</div>
	
	
   </div>
   
</div>

<?php } ?>