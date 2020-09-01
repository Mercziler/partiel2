<?php  
session_start();

$pseudo=$_POST['pseudo'];
$password=$_POST['password'];

if (isset($_SESSION['pseudo'])) {
	header('Location:authentification.html');
}


if (isset($pseudo) && isset($password)) {
	# connexion a la base de donnee
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "partielweb";

	$conn =new mysqli($host,$user,$pass,$dbname) or die(mysqli_connect_error());

	$pseudo = mysqli_real_escape_string($conn,htmlspecialchars($_POST['pseudo']));
	$password = mysqli_real_escape_string($conn,htmlspecialchars($_POST['password']));

	if ($pseudo!=="" && $password!=="") {
		# code...
		$req="SELECT COUNT(*) FROM membre WHERE pseudo='$pseudo' AND motpasse='$password'";
		$exec_requete = mysqli_query($conn,$req);
		$reponse = mysqli_fetch_array($exec_requete);
		//echo $reponse[0];
		$count = $reponse[0];

		if ($count!=0) {
			# code...
			$_SESSION['pseudo'] = $pseudo;
			header('Location:Acceuil.php');
		}else{
			header('Location:authentification.html');
		}
	}
}

mysqli_close($conn);


?>