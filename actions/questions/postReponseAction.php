<?php 
require('actions/database.php');

if(isset($_POST['valider'])){	

	if(!empty($_POST['reponse'])){

		$UsersReponse = nl2br(htmlspecialchars($_POST['reponse']));

		$insertReponse = $bd->prepare('INSERT INTO reponses(idAuteur, emailAuteur, idQuestion, reponse) VALUES(?, ?, ?, ?)');
		$insertReponse->execute(array($_SESSION['id'], $_SESSION['email'], $idQuestions, $UsersReponse));
	} 
}
?>