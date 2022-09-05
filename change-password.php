<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Changer mot de passe </title>
	<link rel="stylesheet" href="style_changepassword.css" >

	
</head>
<body>
    <form action="change-p.php" method="post">
     	<div class="logo"></div>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

     	<?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

     	<label>ancien mot de passe </label>
     	<input type="password" 
     	       name="oldPassword" 
     	       placeholder="">
     	       <br>

     	<label>Nouveau mot de passe </label>
     	<input type="password" 
     	       name="newPassword" 
     	       placeholder="">
     	       <br>

     	<label>Confirmer  mot de passe</label>
     	<input type="password" 
     	       name="confirmPassword" 
     	       placeholder="">
     	       <br>

     	<button type="submit" >Changer </button>
          <a href="compte.php" class="ca">Retourner</a>
     </form>
</body>
</html>

<?php 
}
else{
	header('Location:index.php');
	exit();
}

 ?>