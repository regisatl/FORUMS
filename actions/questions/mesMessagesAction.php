<?php 
date_default_timezone_set("Africa/Porto-Novo");
require('actions/database.php');

$getToutMesQuestions = $bd->prepare('SELECT id, titre, contenu, description, datePublication FROM questions WHERE idAuteur = ? ORDER BY id DESC');
$getToutMesQuestions->execute(array($_SESSION['id']));

?>