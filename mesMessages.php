<?php
require('actions/users/securityAction.php');
require('actions/questions/mesMessagesAction.php');


?>
<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body class="mt-5 mb-3">

	<?php include('includes/navbar.php'); ?>

	<div class="container pt-5">
		<?php
		while ($questions = $getToutMesQuestions->fetch()) {
		?>
			<div class="card">
				<h5 class="card-header">
					<a href="messages.php?id=<?= $questions['id']; ?>">
						<?= $questions['titre']; ?>
					</a>
				</h5>
				<div class="card-body">
					<p class="card-text"><?= $questions['description']; ?>
					</p>
					<a href="messages.php?id=<?= $questions['id']; ?>" class="btn btn-primary">Accéder au message</a>
					<a href="editMessages.php?id= <?= $questions['id']; ?>" class="btn btn-warning">Modifier mon message</a>
					<a href="actions/questions/deleteMessagesAction.php?id= <?= $questions['id']; ?>" class="btn btn-danger">Supprimer mon message</a>
				</div>

			</div>
			<br>


		<?php
		}
		?>
	</div>

	<?php include('includes/footer.php'); ?>

</body>

</html>