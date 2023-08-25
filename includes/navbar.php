<nav class="container navbar fixed-top navbar-expand-lg navbar-dark bg-dark rounded mt-3 py-3">
      <div class="container-fluid fw-bold logo">
            <a class="navbar-brand" href="#">CHATS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                              <a class="nav-link" aria-current="page" href="index.php">ACCUEIL</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="publishQuestion.php">ECRIRE</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="mesQuestions.php">MESSAGES</a>
                        </li>
                        <?php
                        if (isset($_SESSION['auth'])) {
                              ?>
                              <li class="nav-item">
                                    <a class="nav-link" href="profile.php?id= <?= $_SESSION['id']; ?>">PROFIL</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="actions/users/logoutAction.php">DECONNEXION</a>
                              </li>
                              <?php
                        }
                        ?>
                  </ul>
                  <?php require('actions/questions/showAllQuestionsAction.php'); ?>
                  <form class="d-flex">
                        <input class="form-control fw-bold me-2" type="search" name="search" placeholder="Rechercher"
                              aria-label="Search">
                        <button class="btn btn-outline-primary fw-bold" type="submit">Rechercher</button>
                  </form>
            </div>
      </div>
</nav>