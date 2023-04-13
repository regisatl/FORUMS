<?php 

require('actions/users/signupAction.php'); ?>

<!DOCTYPE html>
<html>
<?php include ('includes/head.php'); ?>
<body>



    <br><br><br>
	<form class="container" method="POST">
     
<?php
if(isset($successMsg)){
?>
<div class="alert alert-success" role="alert">
<?php echo $successMsg; }

elseif(isset($errorMsg)){
?>
<div class="alert alert-danger" role="alert">
<?php echo $errorMsg; ?>
</div> 
<?php } 
?>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
   <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" name="prenom">
  </div>
  <div class="mb-3">
    <label for="numero" class="form-label">Numéro</label>
    <input type="tel" class="form-control" name="numero">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password</label>
    <input type="password" class="form-control" name="mdp">
  </div>
  <button type="submit" class="btn btn-primary" name="valider">S'inscrire</button>
    <br><br>
	<a href="login.php"><p>J'ai déjà un compte, Je me connecte...</p></a>
</form>

</body>
</html>