<?php

require('actions/users/signupAction.php'); ?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>

<body class="mt-5 pt-5">

      <form class="container col-sm-6" method="POST">

            <?php
            if (isset($successMsg)) {
                  ?>
                  <div class="alert alert-success" role="alert">
                        <?php echo $successMsg;
            } elseif (isset($errorMsg)) {
                  ?>
                        <div class="alert alert-danger" role="alert">
                              <?php echo $errorMsg; ?>
                        </div>
                  <?php }
            ?>

                  <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Entrez votre email">
                        <label for="email" class="form-label">Entrez votre email</label>
                  </div>
                  <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom">
                        <label for="nom" class="form-label">Entrez votre nom</label>
                  </div>
                  <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prenom">
                        <label for="prenom" class="form-label">Entrez votre prenom</label>
                  </div>
                  <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="numero" placeholder="Entrez votre numero">
                        <label for="numero" class="form-label">Entrez votre numéro</label>
                  </div>
                  <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="mdp" placeholder="Entrez votre password">
                        <label for="Password" class="form-label">Entrez votre password</label>
                  </div>
                  <div class="mb-3">
                        <button type="submit" class="btn btn-primary fw-bold w-100 py-3"
                              name="valider">S'inscrire</button>
                  </div>
                  <div class="button-group">
                        <a href="login.php">
                              <p>J'ai déjà un compte, Je me connecte...</p>
                        </a>
                  </div>
      </form>

</body>

</html>