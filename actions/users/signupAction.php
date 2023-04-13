<?php 
		session_start();
		require('actions/database.php'); 

		//code de validation deu formulaire...
		if(isset($_POST['valider'])){

		//code de vérification pour avoir remplir les champs...
		if(!empty($_POST['email']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['numero']) AND !empty($_POST['mdp'])){

        //code des donnnées de l'utilisateur...
		$email = htmlspecialchars($_POST['email']);
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$numero = htmlspecialchars($_POST['numero']);
		$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

		//code pour vérifier si l'utilisateur existe déjà...
		$checkIfUsersAlreadyExists = $bd->prepare('SELECT email FROM users WHERE email = ?');
		$checkIfUsersAlreadyExists-> execute(array($email));

		if($checkIfUsersAlreadyExists->rowCount() == 0){

		//code pour insérer une personne dans la base de données...
		 $insertUsers = $bd->prepare('INSERT INTO users(email, nom, prenom, numero, mdp) VALUES (?, ?, ?, ?, ?)');
		 $insertUsers-> execute(array($email, $nom, $prenom, $numero, $mdp));

		 $successMsg = "Vos données ont été bien envoyées...";

		//code pour récupérer les données de l'utilisateur...
		 $getInfosUsers = $bd->prepare('SELECT id, email, nom, prenom numero FROM users WHERE nom = ?, prenom = ?');
		 $getInfosUsers->execute(array($email, $nom, $prenom, $numero));

		 $UsersInfos = $getInfosUsers->fetch();
            
		//code pour authentifier un utilisateur dans le forum et récupérer ses données dans des variables globales sessions...
		$_SESSION['auth'] = true;
		$_SESSION['id'] = $UsersInfos['id'];
		$_SESSION['nom'] = $UsersInfos['nom'];
		$_SESSION['prenom'] = $UsersInfos['prenom'];
		$_SESSION['numero'] = $UsersInfos['numero'];
		$_SESSION['email'] = $UsersInfos['email'];
                 
		//code pour rediriger l'utilisateur vers l page d'accueil...    
		header('Location: index.php');


		}else{
			$errorMsg = "L'utilisateur de cet email existe déjà...";
		}

		}else{
		$errorMsg = "Veuillez remplir tous les champs...";
		}
		}


?>

