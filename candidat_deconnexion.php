<?php session_start();
if (!isset($_SESSION['pseudo']) and !isset($_SESSION['mdp']) )
{
header('location: accueil.php');
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>deconnexion</title>
</head>

<body>
<?php
			 
unset($_SESSION['pseudo']);
unset($_SESSION['mdp']);
header('location:index.php');?>
</body>
</html>
<?php } ?>