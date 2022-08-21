<style type="text/css">
#menu_admin .bloc_menu_admin h5 marquee {
	color: #FFF;
}
</style>
<div id="menu_admin">
                <div class="bloc_menu_admin">
                  <h5><marquee align="top" loop="infinite"  behavior="alternate" direction="left">Mon compte Administrateur</marquee></h5>
				  <div class="corpsmenu_admin"> 
				  
				  <!--pour la messagerie-->
			<?PHP 
               $nbr_msg_admin_nlu=0;
               mysql_connect("localhost","root","");
               mysql_select_db("auto_ecole");
               $reponse = mysql_query("SELECT * FROM messagerie_admin WHERE lu='false' ");
                while ($rep = mysql_fetch_array ($reponse))
                {
				$nbr_msg_admin_nlu=$nbr_msg_admin_nlu+1;
				}

             ?>
                       
		                                                 <ul id="menua">
														         <li><a href="admin_accueil.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-home2.png"/> Home</a></li>
		                                                         <li>
			                                                          <a href="#"><img style="vertical-align: middle;" src="Image/menu_cand/blue-mail.png"/> Messagerie</a>
			                                                          <ul>
				                                                         <li><a href="admin_messagerie.php">Boîte de récepetion (<?php echo $nbr_msg_admin_nlu; ?>)</a></li>
				                                                         <li><a href="admin_messagerie_list_envoyer.php">Boîte d'envoi</a></li>
				                                                         <li><a href="admin_messagerie_envoi.php">Envoyer un message</a></li>
		                                                           </ul>
		                                                         </li>
		                                                         <li>
			                                                        <a href="#"><img style="vertical-align: middle;" src="Image/menu_cand/blue-user.png"/> Gérer les candidats</a>
																	<ul>
																    <li><a href="admin_list_candidat.php">Liste des Candidats</a></li>
														
																		<li><a href="inscription_admin.php">Ajouter un candidat</a></li>
																	</ul>
																</li>
                                                           <li><a href="#"><img style="vertical-align: middle;" src="Image/menu_cand/blue-write1.png"/> Gérer les flash infos visiteur </a>
                                                           <ul>     
														   <li><a href="admin_nouvelle.php">Saisir un flash info</a></li>
                                                           </ul>
                                                          </li>
                                                           <li><a href="#"><img style="vertical-align: middle;" src="Image/menu_cand/blue-write2.png"/> Gérer les flash infos Candidat</a>
                                                           <ul>
                                                           <li><a href="admin_nouvelle_candidat.php">Saisir un flash info</a></li>                
                                                           </ul>
                                                           </li>
                                                           <li><a href="#"><img style="vertical-align: middle;" src="Image/menu_cand/blue-clipboard paste.png"/> Examens</a>
                                                           <ul>
                                                            <li><a href="admin_examen.php">Ajouter un examen</a></li>
         
                                                            </ul>
                                                 </li>
																<li>
																    <a href="#"><img style="vertical-align: middle;" src="Image/menu_cand/blue-discuss.png"/> Gérer le forum</a>
																	<ul>
																		<li><a href="admin_forum.php">Consulter le forum</a></li>
																		<li><a href="admin_forum_mettre_a_jour.php">Mettre a jour le forum</a></li>
																		
																	</ul>
																</li>
																<li>
																	<a href="admin_parametre_compte.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-tool.png"/> Paramètres de compte</a>
										
																</li>
																<li><a href="admin_deconnexion.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-cancel.png"/> <b>Deconnexion</b></a></li>
					</ul>  
        	            
				  </div>      			
                </div>		

                


       
</div>

