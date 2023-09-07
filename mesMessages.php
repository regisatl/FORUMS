<?php
require('actions/users/securityAction.php');
require('actions/questions/mesMessagesAction.php');


?>
<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body>

	<?php include('includes/navbar.php'); ?>

	<div class="container pt-5">
		<?php
		while ($questions = $getToutMesQuestions->fetch()) {
			?>
			<div class="card mt-3">
				<h5 class="card-header fw-semibold d-flex justify-content-between">
					<div class="btn-group">
						<a href="messages.php?id=<?= $questions['id']; ?>">
							<?= $questions['titre']; ?>
						</a>
					</div>
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle fw-bold" href="#" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							Actions
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item fw-semibold" href="publishMessage.php">Message</a></li>
							<li><a class="dropdown-item fw-semibold"
									href="editMessages.php?id= <?= $questions['id']; ?>">Modifier</a></li>
							<li><a class="dropdown-item fw-semibold"
									href="actions/questions/deleteMessagesAction.php?id= <?= $questions['id']; ?>">Supprimer</a>
							</li>
						</ul>
					</div>
				</h5>
				<div class="card-body">
					<p class="card-text">
						<?= $questions['description']; ?>
					</p>
					<p class="card-text">
						<?= $questions['contenu']; ?>
					</p>
				</div>

				<div class="card-footer">
					<em class="blockquote-footer pt-3">
						Message publier à <strong><?= $questions['datePublication']; ?></strong>
					</em>
				</div>

			</div>
			<?php
		}
		?>
	</div>

	<?php include('includes/footer.php'); ?>

</body>

</html>