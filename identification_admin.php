
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Autentification admin</title>
  
<?php include ("en_tete.php"); ?>

<div class="font_admin">

<div class="admin ombrage Style14 "><center><em>Authentification Admin</marquee></em>
  </center>
  </div>
<div id="admin">

<form method="post" action="identification_admin_traitement.php">
 <center>   Veuillez vous identifiez svp...</center><br><br>

 <table width="390" height="156">
     <tr>
	     <td> 
		       <label for="login_admin"> 
	                <div align="center" class="Style18"><span class="Style2">Identifiant</span> :</div>
	                </label>
		 </td>

         <td> 
		        <input name="login_admin" id="login_admin" type="text" size="25"/>
		 </td>
                           
                
	 </tr>
	 <tr> 
	    <td>
	       <label for="mdp_admin">
		          <div align="center" class="Style18"><span class="Style2" >Mot de passe:</span></div>
	       </label>
	       
		</td>
		 <td>
		     <input name="mdp_admin" id="mdp_admin" type="password" size="25" />
		</td>
     </tr>
	 
	 <tr>
	     <td colspan="2">
		 <center>
                  <input type="submit" value="Connexion" />
	     </center></td>
     </tr>
    </table>
   
  
  </form>

</div>

</div>



  </div></div>
 </body>
 </html>