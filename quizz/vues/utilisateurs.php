<div class="conteneur">
	<div class="left">
		<div class="left-header">
			<h4>LISTE DES JOUEURS PAR SCORE</h4>
		</div>
	</div>
	<div class="left-body">
		<table>
			<tr>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Score</th>
			</tr>
			<?php
				foreach ($users as $key => $user) {
				# code...
				if ($user["profil"]==="joueur"){ ?>
					<tr>
						<td><?php echo $user["nom"]; ?></td>
						<td><?php echo $user["prenom"]; ?></td>
						<td>100pts</td>
					</tr>
			<?php
				}
				}
			?>
		</table>
	</div>
</div>	