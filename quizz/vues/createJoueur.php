<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
	include("../traitement/fonctions.php");
	if (isset($_POST['creer'])) {
		# code...
		extract($_POST);
		$user = createUser($nom, $prenom, $login, $pwd, "joueur", $avatar);
	}
?>
<body>
	<?php
		include("header.php");
	?>

		<div class="container">
			<div class="left">
				<div class="left-header">
					<h4>S'INSCRIRE</h4>
					<span>Pour tester votre niveau de culture générale</span>	
				</div>
			</div>
			<div class="left-body">
				<form id="form-admin" method="post">
					<span>Prénom</span>
					<div class="textbox-1">
						<input type="text" name="prenom" required="" />
					</div>
					<span>Nom</span>
					<div class="textbox-1">
						<input type="text" name="nom" required="">
					</div>
					<span>login</span>
					<div class="textbox-1">
						<input type="text" name="login" required="" />
					</div>
					<span>Mot de passe</span>
					<div class="textbox-1">
						<input type="password" name="pwd" required="">
					</div>
					<span>Confirmer Mot de passe</span>
					<div class="textbox-1">
						<input type="password" name="pwdc" required="">
					</div>
					<br>
					<div class="textbox-1">
						<input type="file" name="avatar" value="Avatar" required="">
					</div>
					<div class="btn-1">
						<input type="submit" name="creer" value="Créer compte" id="create">
					</div>
				</form>
			</div>
			<div class="right">
				<img src="../public/images/avatar.jpg">
				<span>Avatar Joueur</span>
			</div>
		</div>
	</body>
</html>
