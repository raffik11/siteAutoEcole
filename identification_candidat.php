<?php session_start();?>
<title>identification</title>

<?php
   //verifiction des informations ( saisie) 
	
if (isset($_POST) && !empty($_POST['login1']) && !empty($_POST['pwd'])  )
{ 
             //recuperation des donn�es saisies
 
              $login =$_POST['login1'];
              $mdp =$_POST['pwd'];



            // connexion mysql
            mysql_connect("localhost","root","") or die ("la connexion a �chou�e".mysql_error() );

            //selectionner la base et faire la requ�te n�cessaire
            mysql_select_db("auto_ecole")or die("la connexion a �chou�e".mysql_error() );
            $reponse=mysql_query("select * from candidat where pseudo='".$login."' && mot_passe='".$mdp."'");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
            mysql_close();
                if ($existe)
                      {
		  	   
                        // on r�cup�re le login ainsi que le mot de passe
                        $_SESSION['pseudo'] = $login;
						$_SESSION['mdp'] = $mdp;
						
	   		            header('location: candidat_accueil.php');
		               }	
		            else
		                {
						 echo "<META http-equiv='refresh' content='0; URL=index.php'>";
						 echo"<script language='javascript'> alert('Pseudo ou Mot de passe incorrecte!');</script>";
			             }    
		 
          
}
else
     {
	  echo "<META http-equiv='refresh' content='0; URL=accueil.php'>";
      echo"<script language='javascript'> alert('Veuillez saisir le pseudo et mot de passe!');</script>"; 
	 }

  
?>
