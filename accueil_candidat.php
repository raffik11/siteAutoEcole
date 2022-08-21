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
<title>Ma page d'accueil</title>
<link rel="stylesheet" href="menu_info/style_menu_info_ab.css" type="text/css" media="screen" />  
<script src="menu_info/fonction_menu_info_ab.js" type="text/javascript"></script>

<link href="Styles/jquery-ui-1.8.13.custom.css" rel="stylesheet" type="text/css" />
<link href="Styles/menu_candidat/style_ab.css" rel="stylesheet" type="text/css" />
<?php include ("en_tete _candidat1.php"); ?>
<div class="font_blanc">
<?php include ("menu_candidat.php");?>

<div id="corps">


<div class="text_acceuil">

<div id="tabbed_box_1" class="tabbed_box">  
    
    <div class="tabbed_area">  
  
       <ul class="tabs">
	         <li><a href="javascript:tabSwitch('tab_4', 'content_4');" id="tab_4">bienvenue</a></li> 
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">Nouvelles</a></li>	    
              
             
        </ul> 
		
  
        <div id="content_4" class="content">
		
			 <div  class="text_accueil1">
             <table >
                <tr>
                     <td>			 
			             <img style="vertical-align: middle;" src="image/avatar.png"/> 
		          </td>
			          <td>
			             <span>Bienvenue <b><?php echo $_SESSION['pseudo'] ;?></b> dans votre espace personnel <br> </span>
			          </td>
                </tr>
             </table>
             </div>			 
			  
		</div>
        
          <div id="content_1" class="content"> 
		     <h2>Avis Aux Candidat | AUTO ECOLE OULD AREZKI </h2>
		     <!--pour les nouvelles saisi par l'administrateur -->
   <?PHP 
 
              mysql_connect("localhost","root","");
              mysql_select_db("auto_ecole");

			  $reponse = mysql_query("SELECT * FROM nouvelle_candidat");
           while ($rep = mysql_fetch_array ($reponse))
           {	?>	
			 
             <div class="font_info2"><img style="vertical-align: middle;" src="image/info.png"/><b> <?php echo $rep['titre_nouv']; ?></b></div>
             <div  class="text_accueil1">
              <p><?php echo $rep['nouvelle']; ?></p>

             
            </div>
	   </div> 
      
	   
        <div id="content_2" class="content">
		      <h2>Site web :</h2>
               <div  class="text_accueil1">
               - Cette Rubrique a été mise a jour le : <?php echo $rep['datenouv']; ?>
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
 


<br>
<h2>ECOLE DE CONDUITE OULD AREZKI</h2>
<p><b><span class="L">B</span></b><b class="text_acceuil"> IENVNUE SUR NOTRE SITE INTERNET, CELUI-CI VOUS INFORMERA SUR LES DIFFERENTES FORMATIONS DISPENSEES PAR L'AUTO ECOLE  &quot;OULD AREZKI &quot; ET LEURS TARIFS ET VOUS INFORMERAS SUR LES DIFFERENTES ACTUALITES DE L'AGENCE.<br />
</p>
<p>Nous sommes heureux de votre visite sur notre site. Notre  &eacute;cole vous propose une formation s&eacute;rieuse et efficace pour l&rsquo;obtention de votre  permis de conduire par une conduite s&ucirc;re et responsable.</p>
<p>Pour assurer votre r&eacute;ussite, nous vous proposons une  formation dispens&eacute;e par un personnel comp&eacute;tent et attentif.<br />
  Notre &eacute;quipe est &agrave; votre &eacute;coute pour vous guider tout au  long de votre apprentissage.</p>
<p>&nbsp;</p>
<p><img src="Image/img-3.png" width="490" height="320" alt="voit" align="middle" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<br>
<p>&nbsp;</p>

<p>.</p>

<p>Bonne visite...</p>
</div>
</div>
</div>

<?php } ?>