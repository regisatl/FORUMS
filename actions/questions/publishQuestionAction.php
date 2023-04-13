 <?php
     
      require('actions/database.php');

//code de validation...
if(isset($_POST['valider'])){

//code de vérification pour avoir remplir les champs...
if(!empty($_POST['titre']) AND !empty($_POST['description']) AND !empty($_POST['contenu'])){

   $questionTitre = htmlspecialchars($_POST['titre']);
   $questionDescription = nl2br(htmlspecialchars($_POST['description']));
   $questionContenu = nl2br(htmlspecialchars($_POST['contenu']));
   $questionDate = date('d/m/Y');
   $questionIdAuteur = $_SESSION['id'];
   $questionEmailAuteur = $_SESSION['email'];

   //code d'insertion des données dans la base...
   $insertQuestions = $bd->prepare('INSERT INTO questions(titre, description, contenu, idAuteur, emailAuteur, datePublication) VALUES(?, ?, ?, ?, ?, ?)');
   $insertQuestions->execute(array($questionTitre,  
   	                             $questionDescription, 
   	                             $questionContenu, 
   	                             $questionIdAuteur, 
   	                             $questionEmailAuteur, 
   	                             $questionDate));
   //code de succes... 
   $successMsg = "Votre question a été bien publiée dans le forum...";

}else{
		//code d'erreur...
		$errorMsg ="Veuillez complèter tous les champs...";
	}
}
	?>
