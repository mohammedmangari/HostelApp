<?php
//   if($_POST['NPR']==null){
//     header("Location: dashbord.php");
//   }
    include "config.php";
    $NPR = mysqli_real_escape_string($conn, $_POST['NPR']);
    $NCL = mysqli_real_escape_string($conn, $_POST['NCL']);
    $DATE = mysqli_real_escape_string($conn, $_POST['DATE']);
  
 
    // if($name=='' || $prix==''  || $size==''){
    //    return false;
    // }
    if(isset($_POST['NPR'])){ 
    if(mysqli_query($conn, " INSERT INTO reservation(date_res,produit_menu,id_user) VALUES('" .$DATE. "', '" .$NPR. "', '" .$NCL."')")) {
      echo "<script>alert('inseretd')</script>";
    } else {
      //  echo "Error: " . $sql . "" . mysqli_error($conn);
      echo "<script>alert('no')</script>";
    }
  }
    mysqli_close($conn);
 
?>



