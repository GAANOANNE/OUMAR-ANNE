<?php 
	function getData($fichier='utilisateur')
	{
		# code...
		$data=file_get_contents("data/".$fichier.".json");
		$data=json_decode($data,true);
		return $data;
	}
	function connexion($login,$pwd)
	{
		$users=getData();
		foreach ($users as $key => $user) {
			# code...
			if ($user["login"]===$login && $user["password"]===$pwd) {
				# code...
				if ($user["profil"]==="admin") {
					# code...
					return "admin"; 
				}else{
					return "joueur";
				}
			}				
		}
			return "Erreur";
	}
	function createUser($nom, $prenom, $login, $pwd, $profil, $photo){
		$user = array(
			"prenom" => "$prenom",
			"nom" => "$nom",
			"login" => "$login",
			"password" => "$pwd",
			"profil" => "$profil",
			"photo" => "$photo"
		);

		$js=file_get_contents("../data/utilisateur.json");
		$js=json_decode($js,true);
		$js[] = $user; 
		$js = json_encode($js);
		file_put_contents("../data/utilisateur.json", $js);
		//echo $js;
	}
	function getUsers(){
		$users = file_get_contents("../data/utilisateur.json");
		$users = json_decode($users,true);
		return $users;
	}
	function createQuestions($question, $type_reponse, $reponse, $type, $nombre_de_points){
		$reponse = array("reponse" => $reponse,
							"type" => $type);
		$reponse[]=$reponse;
		//$reponse=:json_encode($reponse);
		$question = array(
			"question" => $question,
			"type_reponse" => $type_reponse,
			"nombre_de_points" => $nombre_de_points,
			"reponse" => $reponse
		);

		$js=file_get_contents("../data/question.json");
		$js=json_decode($js,true);
		$js[] = $question; 
		$js = json_encode($js);
		file_put_contents("../data/question.json", $js);
		}
?> 