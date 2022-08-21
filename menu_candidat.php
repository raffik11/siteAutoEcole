<link href="Styles/style_menu_info_ab.css" rel="stylesheet" type="text/css" />
<link href="Styles/menu_candidat/style_ab.css" rel="stylesheet" type="text/css" />

<link href="calendrier/css/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />

<link href="calendrier/js/jquery-ui-1.8.13.custom.min.js.css" rel="stylesheet" type="text/css" />

<link href="calendrier/js/jquery-1.5.1.min.js.css" rel="stylesheet" type="text/css" />

<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>

<div id="menu">
                <div class="bloc_menu">
                  <h5><marquee align="top" loop="infinite" behavior="scroll"  direction="left">Mon compte</marquee></h5>
				  <div class="corpsmenu"> 
         
		 
        	<!--pour la messagerie-->
			<?PHP 
               $nbr_msg_nlu=0;
               mysql_connect("localhost","root","");
               mysql_select_db("auto_ecole");
               $reponse = mysql_query("SELECT * FROM messagerie_condidat WHERE lu='false' and supprimer='false' and pseudo_destinataire='".$_SESSION['pseudo']."' ");
                while ($rep = mysql_fetch_array ($reponse))
                {
				$nbr_msg_nlu=$nbr_msg_nlu+1;
				}

             ?>
			                                        <ul id="menub">
		                                                         <li>
			                                                          <a href=""><img style="vertical-align: middle;" src="Image/menu_cand/blue-mail.png"/> Messagerie</a>
		                                                             <ul>
				                                                         <li><a href="candidat_messagerie.php">Boîte de récepetion <b class="couleur_orange">(<?php echo $nbr_msg_nlu; ?>)</b></a></li>
				                                                         <li><a href="candidat_messagerie_list_envoyer.php">Boîte d'envoi</a></li>
				                                                         <li><a href="candidat_messagerie_envoi.php">Envoyer un message</a></li>
			                                                           </ul>
		                                                         </li>
		                                         
													  <li><a href="candidat_forum.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-discuss.png"/> Forum</a></li>
																 <li><a href="candidat_parametre_compte.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-tool.png"/> Paramétres de compte</a></li>
                                                                 <li><a href="candidat_cours_code.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-write.png"/> Cours de Code</a></li>
                                                                  <li><a href="candidat_exam.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-clipboard paste.png"/> Examen</a></li>
																<li><a href="candidat_telechargement.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-write.png"/> Téléchargement</a></li>
																<li><a href="candidat_deconnexion.php"><img style="vertical-align: middle;" src="Image/menu_cand/blue-cancel.png"/> Deconnexion</a></li>
                    </ul>  
            
           
		   
		   
		   
       
				  </div>    			
                </div>		

                <div class="bloc_menu">
	
	
 				<h5>Horloge</h5>

				<div class="corpsmenu">
				<!-- calendrier -->
		        <div id=".ui-datepicker">
		          <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="214" height="150" title="clo">
                    <param name="movie" value="clock47_New1.swf" />
                    <param name="quality" value="high" />
                    <embed src="clock47_New1.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="214" height="150"></embed>
	              </object>
		        </div>
                <br />				
                </div>    			
                </div>


</div>

<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>
