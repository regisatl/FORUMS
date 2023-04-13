<?php 

require('actions/users/loginAction.php'); ?>

<!DOCTYPE html>
<html>
<?php include ('includes/head.php'); ?>
<body>

<br><br><br>
<form class="container" method="POST">

<?php if(isset($errorMsg)){?><div class="alert alert-danger" role="alert"><?php echo $errorMsg;} ?></div>

		 <div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email">
	    </div>
	    <div class="mb-3">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" class="form-control" name="mdp">
		</div>
		 
		  <button type="submit" class="btn btn-primary" name="valider">Se connecter</button>
          <br><br>
		  <a href="signup.php"><p>Je n'ai pas de compte, Je m'inscris...</p></a>
</form>


</body>
</html>