<style type="text/css">
<!--
.Style1 {
	color: #FFF;

}
#menu .bloc_menu .corpsmenu #Form #form {
	color: #FFF;
}
#menu .bloc_menu .corpsmenu .text_accueil1 b {
	color: #FFF;
}
#menu .bloc_menu h5 {
	color: #FFF;
}
-->
</style>

<div id="menu">
                <div class="bloc_menu">
                        <h5><marquee align="top" loop="infinite"  behavior="alternate"  direction="left">
                        Espace membres
                        </marquee></h5>
				  <div class="corpsmenu"> 
					 <form id="Form" method="post" action="identification_candidat.php">
                     
                      <label id="form" class="form" for="login1">Pseudo :</label><br>
                      <input name="login1" id="login1" type="text"/><br><br>
                      <label id="form" class="form" for="pwd">Mot de passe :</label><br>
                      <input name="pwd" id="pwd" type="password"/><br><br>

                         <input class="input" type="submit" value="Connexion" /> <input class="input" type="reset" value="Reset" /><br><br>
                    </form>
					 <p><br>
					   <strong><a href="candidat_mdp_oublier.php">Mot de passe oubli&eacute; ?</a> </strong></p>
					 <p><span class="Style1">Vous n'&ecirc;tes pas membre ?</span> </p>
					 <p><strong><a href="inscription.php">Cr&eacute;er un compte </a></strong><br>
				       <br>
			               </p>
				  </div>    			
                </div>		

                <div class="bloc_menu" >
	
	
 				<h5><marquee align="top" loop="infinite"  behavior="alternate"  direction="left">Authentification admin</marquee></h5>

				<div class="corpsmenu" >
				
				<p class="text_accueil1"><b>Vous êtes administrateur identifiez vous svp</b></p>
				
				<p>					     
				<a class="lien_simple" href="identification_admin.php"><img  src="image/Admin-icon.png" width="119" height="130"  style="vertical-align: middle;"></a></p>
				<p><a class="lien_simple" href="identification_admin.php">administrateur</a>
				  </p>
				<br>
			
                </div>    			
                </div>


</div>

