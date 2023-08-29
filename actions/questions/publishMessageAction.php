<?php
date_default_timezone_set("Africa/Porto-Novo");

require('actions/database.php');

//code de validation...
if (isset($_POST['valider'])) {

   //code de vérification pour avoir remplir les champs...
   if (!empty($_POST['titre']) and !empty($_POST['description']) and !empty($_POST['contenu'])) {

      $questionTitre = htmlspecialchars($_POST['titre']);
      $questionDescription = nl2br(htmlspecialchars($_POST['description']));
      $questionContenu = nl2br(htmlspecialchars($_POST['contenu']));
      $questionDate = date("H:i:s d-m-Y");
      // echo $dateNow;
      $questionIdAuteur = $_SESSION['id'];
      $questionEmailAuteur = $_SESSION['email'];

      //code d'insertion des données dans la base...
      $insertQuestions = $bd->prepare('INSERT INTO questions(titre, description, contenu, idAuteur, emailAuteur, datePublication) VALUES(?, ?, ?, ?, ?, ?)');
      $insertQuestions->execute(
         array(
            $questionTitre,
            $questionDescription,
            $questionContenu,
            $questionIdAuteur,
            $questionEmailAuteur,
            $questionDate
         )
      );

      //code pour rediriger l'utilisateur vers la page d'accueil...    
      header('Location: ./mesMessages.php');
      //code de succes... 
      $successMsg = "Votre question a été bien publiée dans le forum...";
   } else {
      //code d'erreur...
      $errorMsg = "Veuillez complèter tous les champs...";
   }
}
?>