<?php
	session_start();
	if(!isset($_SESSION['auth'])){
		header('Location: ../../login.php');
	}
	require('../database.php');

   if(isset($_GET['id']) AND !empty($_GET['id'])){

		    $idQuestions = $_GET['id'];

		    $CheckIfQuestionsExists = $bd->prepare('SELECT idAuteur FROM questions WHERE id = ?');
		    $CheckIfQuestionsExists->execute(array($idQuestions));

		if( $CheckIfQuestionsExists->rowCount() > 0){

			$questionsInfos = $CheckIfQuestionsExists->fetch();
		if( $questionsInfos['idAuteur'] == $_SESSION['id']){

			$deleteQuestions = $bd->prepare('DELETE FROM questions WHERE id = ?');
			$deleteQuestions->execute(array($idQuestions));

			header('Location: ../../mesMessages.php');


		}else{
			echo "Vous n'avez pas le droit de supprimer cette question...";
		}

		}else{
			echo "Aucune question n'a été trouvée...";
		} 

	}else{

		echo "Aucune question n'a été trouvée...";
	}
?>