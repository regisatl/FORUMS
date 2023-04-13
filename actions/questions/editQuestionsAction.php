<?php 

require('actions/database.php'); 

//Validation du formulaire...
if(isset($_POST['valider'])){

//Vérifier si les champs sont rempli...
	if(!empty($_POST['titre']) AND !empty($_POST['description']) AND !empty($_POST['contenu'])){

//Les données succeptibles d'être changées...
		$newQuestionTitre = htmlspecialchars($_POST['titre']);
		$newQuestionDescription = nl2br(htmlspecialchars($_POST['description']));
		$newQuestionContenu = nl2br(htmlspecialchars($_POST['contenu']));

//Modifications des questions pouvant être changées...
		$editNewQuestion = $bd->prepare('UPDATE questions SET titre = ?, description = ?, contenu = ? WHERE id = ?');
		$editNewQuestion->execute(array($newQuestionTitre, $newQuestionDescription, $newQuestionContenu, $idQuestions));

//Rediriger la page d'affichage des questions à l'utilisateur...
		header('Location: mesQuestions.php'); 

	}else{
		$errorMsg = "veuillez remplir tous les champs...";
	}
}


?>