<?php
session_start();
require('actions/questions/showMessagesAction.php');
require('actions/questions/postReponseAction.php');
require('actions/questions/showAllReponsesAction.php');
?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body>
	<?php include('includes/navbar.php'); ?>
	<br><br><br><br>
	<div class="container">
		<?php

		if (isset($questionDate)) {
			?>
			<section class="show-content">

				<h3>
					<?= $questionTitre; ?>
				</h3>
				<p>
					<?= $questionDescription; ?>
				</p>
				<p>
					<?= $questionContenu; ?>
				</p>
				<small><em>
						<?='<a href="profile.php?id=' . $questionIdAuteur . '">' . $questionEmailAuteur . '</a> &nbsp' . $questionDate; ?>
					</em></small>
			</section>
			<br>
			<section class="show-answers">
				<form class="form-group" method="POST">
					<div class="mb-3">
						<label for="text" class="form-label"><strong>Réponse:</strong></label>
						<textarea type="text" class="form-control" name="reponse" placeholder=""
							required=""></textarea>
						<br>
						<button class="btn btn-primary" type="submit" name="valider">Envoyer</button>
					</div>
				</form>

				<?php

				while ($reponse = $getAllReponses->fetch()) {
					?>
					<div class="card">
						<div class="card-header">
							<a href="profile.php?id= <?= $reponse['idAuteur']; ?>"><?= $reponse['emailAuteur']; ?></a>
						</div>
						<div class="card-body">
							<blockquote class="blockquote mb-0">
								<p>
									<?= $reponse['reponse']; ?>
								</p>
								<br>
							</blockquote>
						</div>
					</div>
					<br>

					<?php
				}

				?>
			</section>
		<?php
		}

		?>


	</div>

	<?php include('includes/footer.php'); ?>

</body>

</html>