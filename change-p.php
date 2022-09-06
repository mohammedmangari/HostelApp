<?php 
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])){


	include "config.php";

	if (isset($_POST['oldPassword']) && isset($_POST['newPassword'])
		&& isset($_POST['confirmPassword'])) {
	
		function validate($data){
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}
	
		$oldPassword = validate($_POST['oldPassword']);
		$newPassword = validate($_POST['newPassword']);
		$confirmPassword = validate($_POST['confirmPassword']);


		if(empty($oldPassword)){
			header("Location: change-password.php?error= l'ancien mot de passe doit être remplie" );
			exit();
		  }else if(empty($newPassword)){
			header("Location: change-password.php?error=le nouveau mot de passe doit être remplie");
			exit();
		  }else if($newPassword !== $confirmPassword){
			header("Location: change-password.php?error=le nouvau mot de passe et le confirmé sont different");
			exit();
		  }else {
			  // hashing the password
			  $oldPassword= md5($oldPassword);
			  $newPassword = md5($newPassword);
			  $id = $_SESSION['id'];
	  
			  $sql = "SELECT password
					  FROM users WHERE 
					  id='$id' AND password='$oldPassword'";
			  $result = mysqli_query($conn, $sql);
			  if(mysqli_num_rows($result) === 1){
				  
				  $sql_2 = "UPDATE users
							SET password='$newPassword'
							WHERE id='$id'";
				  mysqli_query($conn, $sql_2);
				  header("Location: change-password.php?success=Your password has been changed successfully");
				  exit();
	  
			  }
			  else{
				header("Location: change-password.php?error=l'ancien mot de passe est incorrecte ");
				exit();
			  }
			}

		
	}
	else{
		header('Location:change-password.php');
		exit();
	}


}
else{
	header('Location:index.php');
	exit();
}
