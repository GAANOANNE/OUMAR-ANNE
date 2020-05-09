<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<?php
include("traitement/fonctions.php");
	if(isset($_POST['connexion'])){
		extract($_POST);
		$cnx = connexion($login, $pwd);
		if ($cnx==="admin") {
			# code...
			header("Location:vues/accueil.php");
		}

		if ($cnx==="joueur") {
			# code...
			echo "joueur";
		}

		if ($cnx==="Erreur") {
			# code...
			echo "login ou mot ce passe incorrect";
		}
}
?>
<body>
	<?php
		include("vues/header.php");
	?>
	<form action="" method="POST" id="form-cnx">
		<div class="login">
			<div class="login-header">
				<span>Login form</span>
			</div>
			<div class="textbox">
				<input type="text" name="login" placeholder="Login" />
				<i><img src="public/icones/ic-login.png"></i>
			</div>
			<div class="textbox">
				<input type="password" name="pwd" placeholder="Mot de passe">
				<i><img src="public/icones/pwd.jpeg"></i>
			</div>
			<div class="btn">
				<input type="submit" name="connexion" value="Connexion" id="">
				<a href="vues/createJoueur.php">S'inscrire pour jouer?</a>
			</div>
		</div>
	</form>

</body>
</html>