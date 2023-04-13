<?php
	require('actions/database.php');
//Vérifie si l'id de la question est rentrer dans l'URL...
	if(isset($_GET['id']) AND !empty($_GET['id'])){	

//Récupérer l'identifiant de la question...
		$idQuestions = $_GET['id'];

//Vérifier si a question existes...
		$checkIfQuestionsExists = $bd->prepare('SELECT * FROM questions WHERE id = ?');
		$checkIfQuestionsExists->execute(array($idQuestions));

	if($checkIfQuestionsExists->rowCount() > 0){

//Récuérer toutes les données de la question...
		$questionsInfos = $checkIfQuestionsExists->fetch();

//Stocker toutes les données de la question dans des variables propres...
		$questionTitre = $questionsInfos['titre'];
        $questionDescription = $questionsInfos['description'];
	    $questionContenu = $questionsInfos['contenu'];
	    $questionIdAuteur = $questionsInfos['idAuteur'];
	   	$questionEmailAuteur = $questionsInfos['emailAuteur'];
	    $questionDate = $questionsInfos['datePublication'];

		}else{
			$errorMsg = "Aucun message n'a été trouvée";
		}

	}else{
		$errorMsg = "Aucun message n'a été trouvée";
	}
 ?>