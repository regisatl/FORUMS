<?php
session_start();
require('actions/questions/showAllMessagesAction.php');
require('actions/questions/postReponseAction.php');
?>

<!DOCTYPE html>
<html>

<?php include('includes/head.php');  ?>

<body class="container">

    <?php include('includes/navbar.php'); ?>

    <div class="container mt-5 pt-5 mb-3">
        <?php
        while ($questions = $getAllQuestions->fetch()) {
        ?>
            <div class="card">
                <div class="card-header">
                    <a href="messages.php?id=<?= $questions['id']; ?>">
                        <?= $questions['titre']; ?>
                    </a>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p><?= $questions['description']; ?></p>
                        <br>
                        <footer class="blockquote-footer"> Publié par <a href="profile.php?id= <?= $questions['idAuteur']; ?>"><em> <?= $questions['emailAuteur']; ?></em></a> <cite title="Source Title"> le <?= $questions['datePublication']; ?></cite></footer>
                    </blockquote>
                </div>
            </div>
            <br>
        <?php
        }
        ?>
    </div>

    <?php include('includes/footer.php'); ?>

</body>

</html>