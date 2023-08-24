<?php
    session_start();
	require('actions/database.php');

		//code de validation...
		if(isset($_POST['valider'])){

		//code de vérification pour avoir remplir les champs...
		if(!empty($_POST['email']) AND !empty($_POST['mdp'])){

        //code des donnnées de l'utilisateur...
		$email = htmlspecialchars($_POST['email']);
		$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        
        //code pour vérifier si l'email de cet utilisateur existe déjà...
		$checkIfUsersAlreadyExists = $bd ->prepare('SELECT * FROM users WHERE email = ?');
		$checkIfUsersAlreadyExists -> execute(array($email));

		//code de récupération des données de l'utilisateur...
		if($checkIfUsersAlreadyExists ->rowCount() > 0){

		//code pour vérifier si le mot de passe est correcte...
		$UsersInfos = $checkIfUsersAlreadyExists->fetch();

		if(password_verify($mdp, $UsersInfos['mdp'])){

		//code pour authentifier un utilisateur dans le forum et récupérer ses données dans des variables globales sessions...
		$_SESSION['auth'] = true;
		$_SESSION['id'] = $UsersInfos['id'];
		$_SESSION['nom'] = $UsersInfos['nom'];
		$_SESSION['prenom'] = $UsersInfos['prenom'];
		$_SESSION['email'] = $UsersInfos['email'];
                 
        //code pour rediriger l'utilisateur vers la page d'accueil...    
			header('Location: index.php');


		}else{
		//code d'erreur...
		$errorMsg="Votre mot de passe est incorrect...";
		}

	    }else{
		//code d'erreur...
		$errorMsg="Votre email est incorrect...";
		 }	

	    }else{
		//code d'erreur...
		$errorMsg="Veuillez complèter tous les champs...";
        }
	    }
	    ?>
