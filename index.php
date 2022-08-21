<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Accueil---</title>
<link rel="stylesheet" href="menu_info/style_menu_info.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info.js" type="text/javascript"></script>
<?php include ("en_tete _candidat.php"); ?>

<div class="font_blanc1">
<?php include ("menu.php");?>

<div id="corps">


<div class="text_acceuil">

<div id="tabbed_box_1" class="tabbed_box">  
    
    <div class="tabbed_area">  
  
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Avis aux visiteurs</a></li>  
          </ul>  
  
        <div id="content_1" class="content"> 
		     <h2>Flash Info</h2>
		     <!--pour les nouvelles saisi par l'administrateur -->
   <?PHP 
 
              mysql_connect("localhost","root","");
              mysql_select_db("auto_ecole");

			  $reponse = mysql_query("SELECT * FROM nouvelle");
           while ($rep = mysql_fetch_array ($reponse))
           {	?>	
			 
             <div class="font_info"><b> <?php echo $rep['titre_nouv']; ?></b><img style="vertical-align: middle;" src="Image/info.png"/></div>
             <div  class="text_accueil1">
              <p><?php echo $rep['nouvelle']; ?></p>
            </div>
	   </div> 
      
	   
        <div id="content_2" class="content">
		      <h2>Suivi des travaux :</h2>
               <div  class="text_accueil1">
               <?php echo $rep['suivi_traveaux']; ?>
			   </div>
		</div>
		
        <div id="content_3" class="content">
		      <h2>Mise à jour du site web :</h2>
			  <div  class="text_accueil1">
		      - Nouvelle mise à jour des news le <?php echo $rep['date_nouv']; ?>.
			  </div>
		</div>  
 <?php 
	   } ?> 
    </div>  
  
</div> 

 

<br>
<h2>ECOLE DE CONDUITE OULD AREZKI</h2>
<p>&nbsp;</p>
<p><b><span class="L">B</span></b><b class="text_acceuil">IENVNUE SUR NOTRE SITE INTERNET, CELUI-CI VOUS INFORMERA SUR LES DIFFERENTES FORMATIONS DISPENSEES PAR L'AUTO ECOLE  &quot;OULD AREZKI &quot; ET LEURS TARIFS ET VOUS INFORMERAS SUR LES DIFFERENTES ACTUALITES DE L'AGENCE.<br />
</p>
<p>ECOLE DE CONDUITE OULD AREZKI est une agence   sp&eacute;cialis&eacute;e dans l'apprentissage de conduite de v&eacute;hicule de tout type,   con&ccedil;ue depuis 2000 par son dirigeant</strong><br />
OULD AREZKI BELAID.<br />
</p>
<p>Nous sommes heureux de votre visite sur notre site. Notre  &eacute;cole vous propose une formation s&eacute;rieuse et efficace pour l&rsquo;obtention de votre  permis de conduire par une conduite s&ucirc;re et responsable.</p>
<p>Pour assurer votre r&eacute;ussite, nous vous proposons une  formation dispens&eacute;e par un personnel comp&eacute;tent et attentif.<br />
  Notre &eacute;quipe est &agrave; votre &eacute;coute pour vous guider tout au  long de votre apprentissage.</p>
<p>&nbsp; </p>

<p>Bonne visite...</p>
</div>

</div>
</div>
</div>
	
