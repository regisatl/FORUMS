<nav
      class="container navbar position-sticky top-0 z-1 navbar-expand-lg bg-light bg-gradient shadow-lg rounded mt-3 mb-3 py-3">
      <div class="container-fluid fw-bold logo">
            <a class="navbar-brand text-dark fs-3" href="#">CHATS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-size:0.8rem;">
                        <li class="nav-item col-sm-4">
                              <a class="nav-link" aria-current="page" href="./" title="Accueil"><span
                                          class="fas fa-home fa-2x"></span></a>
                        </li>
                        <li class="nav-item col-sm-4">
                              <a class="nav-link" href="publishMessage.php" title="Publier un message"><span
                                          class="fas fa-edit fa-2x"></span></a>
                        </li>
                        <li class="nav-item col-sm-4">
                              <a class="nav-link" href="mesMessages.php" title="Messages"><span
                                          class="fa fa-comments fa-2x"></span></a>
                        </li>
                        <li class="nav-item col-sm-4">
                              <a class="nav-link" href="signup.php" title="S'inscrire"><span
                                          class="fas fa-sign fa-2x"></span></a>
                        </li>
                        <li class="nav-item col-sm-4">
                              <a class="nav-link" href="login.php" title="Se connecter"><span
                                          class="fas fa-sign-in-alt fa-2x"></span></a>
                        </li>
                  </ul>
                  <?php require('actions/questions/showAllMessagesAction.php'); ?>
                  <form class="d-flex">
                        <input class="form-control fw-bold me-2" type="search" name="search" placeholder="Rechercher"
                              aria-label="Search">
                        <button class="btn btn-outline-dark fw-bold" type="submit">Rechercher</button>
                  </form>
                  <?php
                  if (isset($_SESSION['auth'])) {
                        ?>
                        <ul class="navbar-nav" style="font-size:0.8rem;">
                              <li class="nav-item">
                                    <a class="nav-link" href="profile.php?id= <?= $_SESSION['id']; ?>" title="Profil"><span
                                                class="fas fa-user-cog fa-2x"></span></a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="actions/users/logoutAction.php" title="Deconnexion"><span
                                                class="fas fa-sign-out-alt fa-2x"></span></a>
                              </li>
                        </ul>
                        <?php
                  }
                  ?>
            </div>
      </div>
</nav>
