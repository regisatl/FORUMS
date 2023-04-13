
<?php 
require('actions/database.php'); 

//Vérifier si l'id de la question est bien passée dans le paramètres de l'URL...
if(isset($_GET['id']) AND !empty($_GET['id'])){

   $idQuestions = $_GET['id'];

//Vérifier si la question existe...
   $checkIfQuestionsExists = $bd->prepare('SELECT * FROM questions WHERE id = ?');
   $checkIfQuestionsExists->execute(array($idQuestions));

if($checkIfQuestionsExists->rowCount() > 0 ){

//Récupérer les données de la question...
   $questionsInfos = $checkIfQuestionsExists->fetch();
if($questionsInfos['idAuteur'] == $_SESSION['id']){

   $questionTitre = $questionsInfos['titre'];
   $questionDescription = $questionsInfos['description'];
   $questionContenu = $questionsInfos['contenu'];
   $questionDate = $questionsInfos['datePublication'];

   $questionDescription = str_replace('<br />','',  $questionDescription);
   $questionContenu = str_replace('<br />','',  $questionContenu);
	}else{
   $errorMsg = "Vous n'êtes pas l'auteur de cette question...";
	}

}else{
   $errorMsg = "Aucune question n'a été trouvée...";
}
}else{
  $errorMsg = "Aucune question n'a été trouvée...";
}

?>
