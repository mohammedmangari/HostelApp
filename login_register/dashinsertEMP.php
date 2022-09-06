<?php
    include "config.php";
    if($_POST['Name']==null){
      header("Location: dashbord.php");
    }

    if(isset($_POST['Nom'])){
    $name = mysqli_real_escape_string($conn, $_POST['Nom']);
    $sal = mysqli_real_escape_string($conn, $_POST['sal']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    // $image = mysqli_real_escape_string($conn, $_POST['image']);
    $contact = mysqli_real_escape_string($conn, $_POST['cont']);
 
    // if($name=='' || $prix==''  || $size==''){
    //    return false;
    // }
    
    if(mysqli_query($conn, "INSERT INTO employeurs(Nom, date, salaire, Contact) VALUES('" . $name . "', '".$date."'  , $sal , '" . $contact. "')")) {
      echo "<script>alert('inseretd by')</script>";
    } else {
      //  echo "Error: " . $sql . "" . mysqli_error($conn);
      echo "<script>alert('no')</script>";
    }
 
    mysqli_close($conn);
 }
 else{
     echo "non";
 }


 
?>


