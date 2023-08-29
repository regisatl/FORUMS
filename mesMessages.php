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
			<div class="card mt-3">
				<h5 class="card-header">
					<a href="messages.php?id=<?= $questions['id']; ?>">
						<?= $questions['titre']; ?>
					</a>
				</h5>
				<div class="card-body">
					<p class="card-text">
						<?= $questions['description']; ?>
					</p>
					<p class="card-text">
						<?= $questions['contenu']; ?>
					</p>
				</div>
				<div class="card-footer d-flex justify-content-around">
					<a href="publishMessage.php" class="btn btn-primary" title="Accéder au message"><span
							class="fas fa-plus-square"></span></a>
					<a href="editMessages.php?id= <?= $questions['id']; ?>" class="btn btn-warning"
						title="Modifier mon message"><span class="fas fa-edit"></span></a>
					<a href="actions/questions/deleteMessagesAction.php?id= <?= $questions['id']; ?>"
						class="btn btn-danger" title="Supprimer mon message"><span
							class="fas fa-trash"></span></a>
				</div>

			</div>
			<?php
		}
		?>
	</div>

	<?php include('includes/footer.php'); ?>

</body>

</html>