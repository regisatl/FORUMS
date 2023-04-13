
<?php 
  require('actions/users/securityAction.php'); 
  require('actions/questions/getInfosEditedQuestionsAction.php');
  require('actions/questions/editQuestionsAction.php');
 
     
?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>
<body>
<?php include('includes/navbar.php'); ?>

  <br><br><br>
  <div class="container">
  		<?php if(isset($errorMsg)){ echo '<p class="text-danger">'.$errorMsg.'</p>';} ?>

  		<?php if(isset($questionDate)){
  		?>

     <form method="POST">
			    <div class="mb-3">
					    <label for="titre" class="form-label">Titre du message:</label>
					    <input type="text" class="form-control" name="titre" value="<?= $questionTitre; ?>">
					</div>
					<div class="mb-3">
					    <label for="description" class="form-label">Description du message:</label>
					    <textarea class="form-control" name="description"><?=	$questionDescription; ?>
					    </textarea> 
					</div>
					<div class="mb-3">
					    <label for="contenu" class="form-label">Contenu du message:</label>
					   <textarea class="form-control" name="contenu"><?= $questionContenu; ?>
					   </textarea>
					</div>
					  <button type="submit" class="btn btn-primary" name="valider">Modifier votre message</button>
	    </form>

      <?php 
  		}
  		?>

</div>

<?php include('includes/footer.php'); ?>
			
</body>
</html>