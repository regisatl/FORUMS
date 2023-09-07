<?php
session_start();
require('actions/questions/showAllMessagesAction.php');
require('actions/questions/postReponseAction.php');
?>

<!DOCTYPE html>
<html>

<?php include('includes/head.php'); ?>

<body class="container">

    <?php include('includes/navbar.php'); ?>

    <div class="container mt-5 mb-3">
        <h1 class="mt-3 mb-3 text-center text-uppercase text-secondary fs-2 fw-bold">Tous les messages</h1>
        <?php
        while ($questions = $getAllQuestions->fetch()) {
            ?>
            <div class="card mb-3" id="accordion">

                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a class="fw-semibold" href="messages.php?id=<?= $questions['id']; ?>">
                            <?= $questions['titre']; ?>
                        </a>
                        <a class="btn text-success fw-semibold" data-bs-toggle="collapse" href="#collapseOne">
                            Toogle
                        </a>
                    </div>
                </div>
                <div id="collapseOne" class="collapse show" data-bs-parent="#accordion">
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>
                                <?= $questions['description']; ?>
                            </p>
                            <p>
                                <?= $questions['contenu']; ?>
                            </p>
                            <br>
                            <footer class="blockquote-footer"> Publié par
                                <a href="profile.php?id= <?= $questions['idAuteur']; ?>">
                                    <em>
                                        <?= $questions['emailAuteur']; ?>
                                    </em>
                                </a> <cite title="Heure d'envoi du message"> à
                                    <?= $questions['datePublication']; ?>
                                </cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <?php include('includes/footer.php'); ?>

</body>

</html>