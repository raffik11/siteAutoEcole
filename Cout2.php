<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Nos tarifs</title>


<style type="text/css">
<!--
.Style32 {color: #FFFFFF}
-->
</style>
<?php include ("en_tete _candidat.php"); ?>
<div class="font_blanc1">


<div id="corps_page_lien">
  <h1 class="Style32">NOS CO&Ucirc;TS </h1>
  </p>
  <p>&nbsp;</p>
  <table width="898" border="1" cellspacing="0" bordercolor="#0066FF" bgcolor="#FFFFFF" id="table_messagerie2">
    <tr bordercolor="#0066FF" bgcolor="#3300CC">
      <th width="480" scope="col"><span class="Style27 Style28 Style29 Style30 Style31">Cat&eacute;gorie</span></th>
  
      
      <th width="408" scope="col">Co&ucirc;t</th>
    </tr>
	<?php
	 mysql_connect("localhost","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() ); 
	$reponse= mysql_query ("SELECT * FROM permis");
	while ($rep=mysql_fetch_array($reponse))
	{?>
	<tr bordercolor="#0033FF"><td height="66"> <span class="Style29">
	  <?php  echo $rep['categorie']; ?>
	</span> </td>
	
	
	
	<td> <span class="Style29"><?php echo $rep['caution']; ?></span> </td>
	
	
	</tr>
	  <?php
}
?>
  </table>

  <h1 class="h1_natation">&nbsp;</h1> 
<div><img src="Image/sq06-20.jpg" width="899" /></div>
</div>
</div>


