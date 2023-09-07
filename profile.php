<?php
session_start();
require('actions/users/showProfilesUsersAction.php');
?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body class="container mt-3">
	<?php include('includes/navbar.php'); ?>
	<div class="mt-3">
		<h1 class="fs-4 mb-3 fw-bold text-center text-uppercase">Profil</h1>
		<?php
		if (isset($errorMsg)) {
			?>
			<div class="alert alert-danger" role="alert">
				<?php echo $errorMsg;
		}

		if (isset($getAllProfileUsers)) {

			?>
			</div>
			<div class="card mb-3">
				<div class="card-body text-center">
					<h2 class="fw-bold text-black">
						<?= $nom . '   ' . $prenom; ?>
					</h2>

					<h4 class=""><span class="fw-semibold">Email</span>: <a class="text-decoration-none"
							href="mailto:<?= $email; ?>">
							<?= $email; ?>
						</a></h4>
					<h4 class=""><span class="fw-semibold">Téléphone</span>: <a class="text-decoration-none"
							href="tel:+229<?= $numero; ?>">
							<?= $numero; ?>
						</a></h4>
				</div>
				<div class="card-footer text-center mt-3 mb-0">
					<a href="https://www.facebook.com" class="facebook text-decoration-none text-primary mx-2"
						title="facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i>
					</a>
					<a href="https://www.twitter.com" class="twitter text-decoration-none text-primary mx-2"
						title="twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i>
					</a>
					<a href="https://www.skype.com" class="skype text-decoration-none text-info mx-2" title="skype"
						target="_blank"><i class="fa fa-skype fa-2x"></i>
					</a>
					<a href="https://www.linkedin.com" class="linkedin text-decoration-none text-info mx-2"
						title="linkedin" target="_blank"><i class="fa fa-linkedin fa-2x"></i>
					</a>
					<a href="https://www.youtube.com" class="youtube text-decoration-none text-danger mx-2"
						title="youtube" target="_blank"><i class="fa fa-youtube fa-2x"></i>
					</a>
					<a href="https://www.instagram.com" class="instagram text-decoration-none text-black mx-2"
						title="instagram" target="_blank"><i class="fa fa-instagram fa-2x"></i>
					</a>
				</div>
			</div>

			<?php
			while ($questions = $getAllProfileUsers->fetch()) {
				?>
				<div class="card mb-3">
					<div class="card-header">
						<a href="messages.php?id=<?= $questions['id']; ?>">
							<?= $questions['titre']; ?>
						</a>
					</div>
					<div class="card-body">
						<blockquote class="blockquote mb-0">
							<p>
								<?= $questions['description']; ?>
							</p>
							<br>
							<footer class="blockquote-footer"> Publié par
								<?= $questions['emailAuteur']; ?> <cite title="Source Title"> à
									<?= $questions['datePublication']; ?>
								</cite>
							</footer>
						</blockquote>
					</div>
				</div>
				<?php
			}
		}

		?>
	</div>

	<?php include('includes/footer.php'); ?>
</body>

</html>