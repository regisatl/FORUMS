<?php
//connection à la base de données...
require('actions/database.php');

//Récupérer les données de la questions par défaut...
$getAllQuestions = $bd->query('SELECT id, idAuteur, titre, contenu, description, emailAuteur, datePublication FROM questions ORDER BY id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utilisateur...
if (isset($_GET['search']) and !empty($_GET['search'])) {

	//La recherche...
	$UsersSearch = $_GET['search'];

	//Récupérer les questions qui correspondent à la recherche en fonction de la demande...
	$getAllQuestions = $bd->query("SELECT id, idAuteur, titre, description, emailAuteur, datePublication FROM questions WHERE titre LIKE ''%$UsersSearch%'' ORDER BY id DESC");

}
?>