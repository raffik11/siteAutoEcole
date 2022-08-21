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
<title>Paramétres de compte</title>
<link rel="stylesheet" href="menu_info/style_menu_info_par.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_par.js" type="text/javascript"></script>

<link href="Styles/style_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

  <div id="corps">
    <div class="titre"><img src="image/parametre.gif" /> Paramétres de compte</div>
    <div class="form_parametre">
	 
	 <p class="text_insc2"> <img src="image/information.png" />  Pour plus de sécurité , vous pouvez procéder au changement de votre pseudo et mot de passe dans cette rubrique.
     Pour ce faire,veuillez remplir les champs ci-dessous </p>
     
	<div id="tabbed_box_1" class="tabbed_box">  
    
    <div class="tabbed_area">  
  
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">pseudo et mot de passe</a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">pseudo </a></li>  
            <li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3">mot de passe</a></li>  
        </ul>  
		         <div id="content_1" class="content"> 
				 <img style="vertical-align: middle;" src='image/erreur.png'  /> <span class="erreur">Acces refusé : Pseudo ou mot de passe incorrecte.</span><br><br>
				       <table width=75%>
                             <tr>
                               <form id="myform" method="post" action="candidat_parametre.php">
	 
                                <td><label for="login_encien">Ancien Pseudo :</label></td>
                                <td><input name="login_encien" id="login_encien" type="text" /></td>
	  
	                        </tr>
	 
	                        <tr>
	                            <td><label for="login_nouveau">Nouveau Pseudo :</label></td>
                                <td><input name="login_nouveau" id="login_nouveau" type="text" /></td>
	       
	                       </tr> 
	 
	                        <tr>
	 
                             <td> <label for="pwd_encien">Ancien Mot de passe : </label></td>
                             <td> <input name="pwd_encien" id="pwd_encien" type="password" /> </td>
	  
	                        </tr>
	                         <tr>
	 
                              <td><label  for="pwd_nouveau">Nouveau Mot de passe : </label></td>
                              <td>
		                      <input name="pwd_nouveau" id="pwd_nouveau" type="password" />
		                     </td> 
     
	                           </tr>
	                          <tr>
	 
                                <td><label  for="pwd_nouveau2">Mot de passe  (confirmation): </label></td>
                                <td>
			                      <input name="pwd_nouveau2" id="pwd_nouveau2" type="password" />
			                    </td>
                              </tr>
	                          <tr >
	  
	                          <td colspan=2><center><input type="submit" value="Valider" />  <input type="reset" value="Réinitialiser" /></center></td>
                              </tr>
	  
	                      </form>
	                 
	                        </table>  
				</div>
		
			
			     
				<div id="content_2" class="content">
				      <table width=70% >
                             <tr>
                               <form id="myform" method="post" action="candidat_parametre_ps.php">
	 
                                <td><label for="login_encien1">Ancien Pseudo :</label></td>
                                <td><input name="login_encien" id="login_encien1" type="text" /></td>
	  
	                        </tr>
	 
	                        <tr>
	                            <td><label for="login_nouveau1">Nouveau Pseudo :</label></td>
                                <td><input name="login_nouveau" id="login_nouveau1" type="text" /></td>
	       
	                       </tr> 
	                         <tr >
	  
	                          <td colspan=2><center><input type="submit" value="Valider" />  <input type="reset" value="Réinitialiser" /></center></td>
                              </tr>
	  
	                      </form>
	                 
	                  </table>
				</div>
			
			
			
			     
			<div id="content_3" class="content">
				        <table width=75% >
						    <tr>
                               <form id="myform" method="post" action="candidat_parametre_mdp.php">
						     <td> <label for="pwd_encien1">Ancien Mot de passe : </label></td>
                             <td> <input name="pwd_encien" id="pwd_encien1" type="password" /> </td>
	  
	                        </tr>
	                         <tr>
	 
                              <td><label  for="pwd_nouveau1">Nouveau Mot de passe : </label></td>
                              <td>
		                      <input name="pwd_nouveau" id="pwd_nouveau1" type="password" />
		                     </td> 
     
	                           </tr>
	                          <tr>
	 
                                <td><label  for="pwd_nouveau21">Mot de passe  (confirmation): </label></td>
                                <td>
			                      <input name="pwd_nouveau2" id="pwd_nouveau21" type="password" />
			                    </td>
                              </tr>
	                          <tr >
	  
	                          <td colspan=2><center><input type="submit" value="Valider" />  <input type="reset" value="Réinitialiser" /></center></td>
                              </tr>
	  
	                      </form>
	                 
	                        </table>	   
				</div>
			
			</div>
		</div>
	
	
	
	
    </div>
	
	
   </div>
   
</div>

	
<?php } ?>