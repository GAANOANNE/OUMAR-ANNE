<div class="conteneur">
	<div class="left">
		<div class="left-header">
			<h4>S'INSCRIRE</h4>
			<span> Pour proposer des quizz</span>	
		</div>
	</div>
	<div class="left-body">
		<form id="form-admin" action="accueil.php" method="post">
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
				<input type="password" name="pwd" required="" id="pwd">
			</div>
			<span>Confirmer Mot de passe</span>
			<div class="textbox-1">
				<input type="password" name="pwdc" required="" id="pwdc">
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
		<span>Avatar Admin</span>
	</div>
</div>
<script>
	document.getElementById('form-admin').addEventListener('submit', function(e){
		alert(ok)
	});
</script>	v!:ç