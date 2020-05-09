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
		$user = createUser($nom, $prenom, $login, $pwd, "admin", $avatar);
	}
	if (isset($_POST['create_question'])) {
		# code...
		extract($_POST);
		$question = createQuestions($question,$select_type_reponse,"$reponse1","faux",$nombre_point);
	}
?>
<body>
	<?php
		include("header.php");
	?>
	<div class="card">
		<div class="card-header">
			<form action="/quizz">
				<span>CREER ET PARAMETRER VOS QUIZZ 
					<input type="submit" name="logout" value="Déconnexion" id="create">
				</span>
			</form>
		</div>
		<div class="gauche">
			<div class="gauche-header">
				<div class="femme"> <img src="../public/images/avatar.jpg"></div>
			</div>
			<div class="gauche-text">
				<li>
					<a href="accueil.php?action=listquestion">Liste Questions</a>
					<img src="../public/icones/ic-liste.png">
				</li>
				<li>
					<a href="accueil.php?action=createadmin">Créer Admin</a>
					<img src="../public/icones/ic-ajout-active.png">
				</li>
				<li>
					<a href="accueil.php?action=listjoueurs">Liste joueurs</a>
					<img src="../public/icones/ic-liste.png">
				</li>
				<li>
					<a href="accueil.php?action=createquestion">Créer Questions</a>
					<img src="../public/icones/ic-ajout.png">
				</li>
			</div>
		</div>
		<?php
			if (isset($_GET['action'])) {
				switch ($_GET['action']) {
					case 'createadmin':
						# code...							
						include("createAdmin.php");
						break;
					case 'listquestion':
						# code...							
						include("questions.php");
						break;
					case 'createquestion':
						# code...							
						include("createQuestion.php");
						break;
					case 'listjoueurs':
						# code...	
						$users = getUsers();					
						include("utilisateurs.php");
						break;
							
					default:
						# code...
						break;
				}			
			}
		?>
	</div>
<script>
		document.createElement('p');
</script>
</body>
</html>