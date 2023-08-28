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
        <h1 class="mt-3 mb-3 text-center text-uppercase fs-2 fw-bold">Tous les messages</h1>
        <?php
        while ($questions = $getAllQuestions->fetch()) {
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
                        <p>
                            <?= $questions['contenu']; ?>
                        </p>
                        <br>
                        <footer class="blockquote-footer"> Publié par
                            <a href="profile.php?id= <?= $questions['idAuteur']; ?>">
                                        <em>
                                        <?=$questions['emailAuteur']; ?>
                                        </em>
                            </a> <cite title="Source Title"> à
                                <?= date('H:m:s').' le '.date('d/m/Y') ?>;
                            </cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
            <?php
        }
        ?>
    </div>

    <?php include('includes/footer.php'); ?>

</body>

</html>