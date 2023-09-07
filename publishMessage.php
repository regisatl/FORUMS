<?php
require('actions/users/securityAction.php');
require('actions/questions/publishMessageAction.php');
?>

<!DOCTYPE html>
<html>

<?php include('includes/head.php'); ?>

<body>

	<?php include('includes/navbar.php'); ?>

	<h1 class="mt-5 text-center text-secondary fw-bold">Publier votre message</h1>

	<form class="container mt-5" method="POST">

		<?php
		if (isset($errorMsg)) {
			?>
			<div class="alert alert-danger fw-semibold" role="alert">
				<?php
				echo $errorMsg;
				?>
			</div>
			<?php
		} elseif (isset($successMsg)) {
			?>
			<div class="alert alert-success fw-semibold" role="alert">
				<?php
				echo $successMsg;
				?>
			</div>
			<?php
		}
		?>
		<div class="form-floating mt- 5 mb-3">
			<input type="text" class="form-control" name="titre" placeholder="Titre du message">
			<label for="titre" class="form-label fw-bold">Titre du message</label>
		</div>
		<div class="form-floating mb-3">
			<textarea class="form-control" name="description" placeholder="Description du message"></textarea>
			<label for="description" class="form-label fw-bold">Description du message</label>
		</div>
		<div class="form-floating mb-3">
			<textarea class="form-control" name="contenu" placeholder="Contenu du message"></textarea>
			<label for="contenu" class="form-label fw-bold">Contenu du message</label>
		</div>
		<button type="submit" class="btn btn-primary w-100 py-3 fw-bold bg-gradient" name="valider">Publier
			votre message</button>
	</form>

	<?php include('includes/footer.php'); ?>

</body>

</html>