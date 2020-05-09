<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="conteneur">
		<div class="conteneur-header">
			<h4>PARAMATREZ VOTRE QUESTION</h4>
		</div>
	<div class="left-body">
		<form id="form_creer_question" method="POST" action="#">
		<label>Questions</label>
		<input type="text"name="question" id="question" error="question_vide">
		<div class="error form" id="question_vide" ></div><br>
		<label>Nbre de points</label>
		 <input type="number" min="1" name="nombre_point" id="champ_nombre_point" error="point_vide">
		 <i class="error_form" id="point_vide"></i><br>
		<label>Types de réponses </label> 
		<select id="select_type" name="select_type_reponse">
			<option value=""> Donner le type de réponse</option>
			<option value="choix_multiple" name="multiple"> choix multiple</option>
			<option value="choix_simple" name="simple"> choix simple</option>
			<option value="reponse_texte" name="texte"> Réponse texte</option>
		</select>
		<button type="button" id="bouton_nouvelle_reponse">
		<label for="bouton_nouvelle_reponse" id="bouton_nouvelle_reponse" ><img src="/quizz/public/icones/ic-ajout-réponse.png"></label>
		</button>
			
		<div id="reponses"></div>
	
		<input type="submit" name="create_question" value="Enrégistrer" id="Enrégistrer" class="bouton_enregistrer" >
		   
		</form>
	</div>
</div>
</body>



<script type="text/javascript" >
			 /* Variable Global i */
			var i = 0;

			/* fonction qui incremente le nombre de champs genere. */
			function increment(){
				i += 1; 
				// i = i +1;
			}

			/* fonction qui reinitialise le nombre de champs genere. */
			function decrement(){
				i = 0; 
			}
			/*
			---------------------------------------------
			Foncion de suppression de champs
			---------------------------------------------

			*/
			function removeElement(parentDiv, childDiv){
				if (childDiv == parentDiv){
					alert("Le parent ne peut pas etre supprime.");
				}
				else if (document.getElementById(childDiv)){
					var child = document.getElementById(childDiv);
					var parent = document.getElementById(parentDiv);
					parent.removeChild(child);
				}
				else{
					alert("ce div n'existe pas ou a ete supprime.");
					return false;
				}
			}

			/*le contenu de tous les champ generes*/
            var reponses = document.getElementById("reponses");

            // si on choisi ou change d'option
            var a = document.getElementById('select_type');
            a.addEventListener("change",function(){
            	reponses.innrHTML="";
            	decrement();
            	if (a.value!="") {
            		nouvelleReponse();
            	}
            });
            
            // si on clique sur le bouton +
            var b = document.getElementById('bouton_nouvelle_reponse');
            b.addEventListener("click",function(){
            	nouvelleReponse();
            })

            /*
			---------------------------------------------
			Foncion de generation de champs
			---------------------------------------------

			*/
            function nouvelleReponse(){
            	var x = document.getElementById('select_type').value;
            	if (x=="") {
            		alert ("choississez le type de reponse");
            	}
            	else{
            		increment()
            		var valeur = document.createElement("input");
					valeur.setAttribute("class","type_reponse");
					switch(x) {
						case "choix_simple":
						    valeur.setAttribute("type","radio");
						    valeur.setAttribute("name","radio");
						    break;
						case "choix_multiple":
						    valeur.setAttribute("type","checkbox");
						    valeur.setAttribute("name","checkbox");
						    break;
						default:
						    // valeur.setAttribute("type","");
						    // valeur.setAttribute("name","check_list[]");
					}
					valeur.setAttribute("placeholder", "reponse" + i);
            		var r = document.createElement('span');
            		r.setAttribute("id","id_"+i);
            		var y = document.createElement("INPUT");
            		y.setAttribute("type", "text");
            		y.setAttribute("name", "reponse" + i);
            		var g = document.createElement("IMG");
					g.setAttribute("src", "/quizz/public/icones/ic-supprimer.png");
					g.setAttribute("onclick", "removeElement('reponses','id_"+i+"')");
            		r.appendChild(y);
            		r.appendChild(valeur);
            		r.appendChild(g);
					reponses.appendChild(r);
			    }
		    }
		    document.getElementById("delete").addEventListener('click', retire);
		    function retire(){
		    	alert('OK');
		    }
	</script>


</html>