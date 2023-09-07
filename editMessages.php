<?php
require('actions/users/securityAction.php');
require('actions/questions/getInfosEditedMessagesAction.php');
require('actions/questions/editMessagesAction.php');


?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body>
	<?php include('includes/navbar.php'); ?>

	<h1 class="mt-5 text-center text-secondary fw-bold">Modifier votre message</h1>
	<div class="container mt-5">


		<?php if (isset($errorMsg)) {
			echo '<p class="text-danger">' . $errorMsg . '</p>';
		} ?>

		<?php if (isset($questionDate)) {
			?>

			<form method="POST" class="fw-bold">
				<div class="mb-3">
					<label for="titre" class="form-label">Titre du message:</label>
					<input type="text" class="form-control" name="titre" value="<?= $questionTitre; ?>">
				</div>
				<div class="mb-3">
					<label for="description" class="form-label">Description du message:</label>
					<textarea class="form-control" name="description"><?= $questionDescription; ?>
						    </textarea>
				</div>
				<div class="mb-3">
					<label for="contenu" class="form-label">Contenu du message:</label>
					<textarea class="form-control" name="contenu"><?= $questionContenu; ?>
						   </textarea>
				</div>
				<button type="submit" class="btn btn-primary fw-bold w-100 py-3 bg-gradient" name="valider">Modifier votre
					message</button>
			</form>

		<?php
		}
		?>

	</div>

	<?php include('includes/footer.php'); ?>

</body>

</html>