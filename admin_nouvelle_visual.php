
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>visualiser le resultat nouvelles</title>
<link rel="icon" type="image/gif" href="image/icone.gif" >
<link rel="stylesheet" href="menu_info/style_menu_info_saisi.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="style_accueil.css" >
</head>

<body>	
 
<div id="tabbed_box_1" class="tabbed_box">  
    
    <div class="tabbed_area">  
  
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">FLASH INFO</a></li>  
        </ul>  
  
        <div id="content_1" class="content"> 
		     <h2>Avis Aux Candidats| AUTO ECOLE LA COLOMBE</h2>
		     <!--pour les nouvelles saisi par l'administrateur -->
   <?PHP 
 
              mysql_connect("localhost","root","");
              mysql_select_db("auto_ecole");

			  $reponse = mysql_query("SELECT * FROM nouvelle");
           while ($rep = mysql_fetch_array ($reponse))
           {	?>	
			 
             <div class="font_info"><img style="vertical-align: middle;" src="image/info.png"/><b> <?php echo $rep['titre_nouv']; ?></b></div>
             <div  class="text_accueil1">
              <p><?php echo $rep['nouvelle']; ?></p>

            
             </div>
	   </div> 
      
	   
		
        <div id="content_3" class="content">
		      <h2>Mise à jour du site web :</h2>
			  <div  class="text_accueil1">
		      - Nouvelle mise à jour des news le <?php echo $rep['datenouv']; ?>
			  </div>
		</div>  
 <?php 
	   } ?> 
    </div>  
  
  
</div> 
			
</body>
</html>		
	
	
	 
	 
    
	