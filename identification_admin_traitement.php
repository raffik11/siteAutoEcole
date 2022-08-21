<?php session_start();?>
<title>identification admin</title>

<?php
   //verifiction des informations ( saisie) 
	
if (isset($_POST) && !empty($_POST['login_admin']) && !empty($_POST['mdp_admin'])  )
{ 
             //recuperation des données saisies
 
              $login =$_POST['login_admin'];
              $mdp =$_POST['mdp_admin'];



            // connexion mysql
            mysql_connect("localhost:8586","root","") or die ("la connexion a échouée".mysql_error() );

            //selectionner la base et faire la requéte nécessaire
            mysql_select_db("auto_ecole")or die("la connexion a échouée".mysql_error() );
            $reponse=mysql_query("select * from admin where pseudo='".$login."' && motp='".$mdp."'");
            $res=mysql_fetch_row($reponse);
            $existe=mysql_num_rows($reponse);
            mysql_close();
                if ($existe)
                      {
		  	   
                        // on récupère le login ainsi que le mot de passe
                        $_SESSION['pseudo_admin'] = $login;
						$_SESSION['mdp_admin'] = $mdp;
						
	   		            header('location: admin_accueil.php');
		               }	
		            else
		                {
						 echo "<META http-equiv='refresh' content='0; URL=identification_admin.php'>";
						 echo"<script language='javascript'> alert('Identifiant ou Mot de passe incorrecte!');</script>";
			             }    
		 
          
}
else
     {
	  echo "<META http-equiv='refresh' content='0; URL=identification_admin.php'>";
      echo"<script language='javascript'> alert('Veuillez saisir l\'Identifiant et mot de passe!');</script>"; 
	 }

  
?>
