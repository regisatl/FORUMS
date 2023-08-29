<?php
require('actions/users/securityAction.php');
require('actions/questions/publishMessageAction.php');
?>

<!DOCTYPE html>
<html>

<?php include('includes/head.php'); ?>

<body class="mt-5 mb-3">

	<?php include('includes/navbar.php'); ?>

	<form class="container mt-5 pt-5" method="POST">

		<?php
		if (isset($errorMsg)) {
		?>
			<div class="alert alert-danger" role="alert">
				<?php
				echo $errorMsg;
		} elseif (isset($successMsg)) {
				?>
				<div class="alert alert-success" role="alert">
				<?php
					echo $successMsg;
		}
		?>
				<div class="form-floating mt- 5 mb-3">
					<input type="text" class="form-control" name="titre">
					<label for="titre" class="form-label">Titre du message</label>
				</div>
				<div class="form-floating mb-3">
					<textarea class="form-control" name="description"></textarea>
					<label for="description" class="form-label">Description du message</label>
				</div>
				<div class="form-floating mb-3">
					<textarea class="form-control" name="contenu"></textarea>
					<label for="contenu" class="form-label">Contenu du message</label>
				</div>
				<button type="submit" class="btn btn-primary" name="valider">Publier votre message</button>
	</form>

	<?php include('includes/footer.php'); ?>

</body>

</html>