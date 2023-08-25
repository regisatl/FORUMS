<?php

require('actions/database.php');

//Récupérer l'identifiant de l'utilisateur...
if (isset($_GET['id']) and !empty($_GET['id'])) {

	//L'identifiant de l'utilisateur... 
	$idUsers = $_GET['id'];

	$checkIfUsersExists = $bd->prepare('SELECT email, nom, prenom, numero FROM users WHERE id = ?');
	$checkIfUsersExists->execute(array($idUsers));


	if ($checkIfUsersExists->rowCount() > 0) {

		//Récupérer toutes les données de l'utilisateur...
		$UsersInfos = $checkIfUsersExists->fetch();

		$email = $UsersInfos['email'];
		$nom = $UsersInfos['nom'];
		$prenom = $UsersInfos['prenom'];
		$numero = $UsersInfos['numero'];


		//Récupérer toutes les messages de l'utlisateur publiées...
		$getAllProfileUsers = $bd->prepare('SELECT * FROM questions WHERE idAuteur = ? ORDER BY id DESC');
		$getAllProfileUsers->execute(array($idUsers));

	} else {
		$errorMsg = "Aucun utilisateur n'a été trouvé...";
	}


} else {
	$errorMsg = "Aucun utilisateur trouvé...";
}


?>