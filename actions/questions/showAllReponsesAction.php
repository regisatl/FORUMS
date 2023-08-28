<?php 
	require('actions/database.php');

	$getAllReponses = $bd->prepare('SELECT idAuteur, emailAuteur, idQuestion, reponse FROM reponses WHERE idQuestion = ? ORDER BY id ASC');
	$getAllReponses->execute(array($idQuestions));

?>