<?php 
require('actions/database.php');

$getToutMesQuestions = $bd->prepare('SELECT id, titre, description FROM questions WHERE idAuteur = ? ORDER BY id DESC');
$getToutMesQuestions->execute(array($_SESSION['id']));

?>