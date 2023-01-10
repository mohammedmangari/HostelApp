<?php

include 'db_connect.php';

session_start();

error_reporting(0);


if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
	header("Location: compte.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];

	//  encrypte password
	$password = md5($_POST['password']);

	if ($email == "Admin@Admin") {
		header("Location: login_register/dashbord.php");
	}

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conx, $sql);
	
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		
		header("Location: compte.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style_login.css">

	<title>friend's hotel </title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Connection</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Se connecter</button>
			</div>
			<p class="login-register-text " style="text-align:center"><a href="affiche.php">Creer un compte.</a></p>

		</form>
	</div>
</body>

</html>