<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" media="screen">
	<title></title>
</head>
<body style='background: #0062ff'>
	<div id="content">
		<?php 
   			session_start();
   			if($_SESSION['pseudo']!==""){
   			header("location:Acceuil.php")
   		}

		?>
	</div>
</body>
</html>