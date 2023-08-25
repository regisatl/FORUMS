<?php

require('actions/users/loginAction.php'); ?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body class="mt-5 pt-5">

	<form class="container col-sm-6" method="POST">

		<?php if (isset($errorMsg)) { ?>
			<div class="alert alert-danger" role="alert">
				<?php echo $errorMsg;
		} ?>
		</div>

		<div class="form-floating mb-3">
			<input type="email" class="form-control" name="email" placeholder="Entrez votre email">
			<label for="email" class="form-label">Entrez votre email</label>
		</div>
		<div class="form-floating mb-3">
			<input type="password" class="form-control" name="mdp" placeholder="Entrez votre mot de passe">
			<label for="password" class="form-label">Entrez votre mot de passe</label>
		</div>

		<button type="submit" class="btn btn-primary fw-bold w-100 py-3" name="valider">Se connecter</button>
		<br><br>
		<a href="signup.php">
			<p>Je n'ai pas de compte, Je m'inscris...</p>
		</a>
	</form>


</body>

</html>