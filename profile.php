
<?php 
session_start();
require('actions/users/showProfilesUsersAction.php');
?>

<!DOCTYPE html>
<html>
<?php include('includes/head.php'); ?>
<body>
<?php include('includes/navbar.php'); ?>
<br><br><br>
<div class="container">

<?php 
		if(isset($errorMsg)){
?>
<div class="alert alert-danger" role="alert"><?php	echo $errorMsg;}



		if(isset($getAllProfileUsers)){

	?>
</div>
	 <div class="card">
			  <div class="card-body">
			     <center> <h4 class="text-dark"><?=$nom . '   ' .$prenom ;?></h4>
			      <br>
			      <h4 class="">E-mail: <a href="mailto:<?=$email; ?>"><?=$email; ?></a></h4>
			      <h4 class="">Téléphone: <a href="tel:+229<?=$numero; ?>"><?=$numero; ?></a></h4></center>

			    
			  </div>
			 </div>
			 <br>   
	<?php

	while($questions = $getAllProfileUsers->fetch()){
		?>

<div class="card">
  <div class="card-header">
 <a href="messages.php?id=<?=$questions['id'];?>">
      <?=$questions['titre']; ?>
    </a>  
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><?=$questions['description']; ?></p>
     <br>
      <footer class="blockquote-footer"> Publié par <?=$questions['emailAuteur']; ?> <cite title="Source Title"> le <?=$questions['datePublication']; ?></cite></footer>
    </blockquote>
  </div>
</div>
<br>
 
		<?php 
	}
}

 ?>
</div>

<?php include('includes/footer.php'); ?>
</body>
</html>