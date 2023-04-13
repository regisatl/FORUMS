<?php 
    require ('actions/users/securityAction.php');
    require ('actions/questions/publishQuestionAction.php');
        
?>

<!DOCTYPE html>
<html>

<?php include ('includes/head.php'); ?>

<body>

<?php include('includes/navbar.php'); ?> 

   <br><br><br>
	<form class="container" method="POST">

		<?php 
		     if(isset($errorMsg)){ 
		    ?>
		    <div class="alert alert-danger" role="alert">
		    <?php 	//code...
		     	echo $errorMsg ;
		     }elseif (isset($successMsg)) {
		     	 ?>
		    <div class="alert alert-success" role="alert">
		    <?php 
		     	// code...
		     	echo $successMsg ;
		     } 

		 ?>

		  <div class="mb-3">
		    <label for="titre" class="form-label">Titre du message:</label>
		    <input type="text" class="form-control" name="titre">
		  </div>
		   <div class="mb-3">
		    <label for="description" class="form-label">Description du message:</label>
		    <textarea class="form-control" name="description"></textarea> 
		  </div>
		   <div class="mb-3">
		    <label for="contenu" class="form-label">Contenu du message:</label>
		   <textarea class="form-control" name="contenu"></textarea>
		  </div>
		  <button type="submit" class="btn btn-primary" name="valider">Publier votre message</button>
	</form>

<?php include('includes/footer.php'); ?>

</body>
</html>