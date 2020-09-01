<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
	<title></title>
</head>
<body style='background: #F0F0F0'>
	<div id="content">
		<?php 
   			session_start();
   			
   			$user = $_SESSION['pseudo'];
   			echo"<h2><center>BIENVENUE DANS VOTRE ESPACE DE TRAVAIL. VOTRE NOM D'UTILISATEUR EST: $user </center></h2>";

		?>
	</div>
</body>
</html>