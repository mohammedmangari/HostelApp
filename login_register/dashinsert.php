<?php
  if($_POST['Name']==null){
    header("Location: dashbord.php");
  }
    include "config.php";
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $prix = mysqli_real_escape_string($conn, $_POST['prix']);
    $size = mysqli_real_escape_string($conn, $_POST['size']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
 
    // if($name=='' || $prix==''  || $size==''){
    //    return false;
    // }
    if(isset($_POST['Name'])){ 
    if(mysqli_query($conn, "INSERT INTO menu(nom, prix, categorie, image) VALUES('" . $name . "', '" . $prix . "', '" . $size . "', '" . $image . "')")) {
      echo "<script>alert('inseretd by')</script>";
    } else {
      //  echo "Error: " . $sql . "" . mysqli_error($conn);
      echo "<script>alert('no')</script>";
    }
  }
    mysqli_close($conn);
 
?>


