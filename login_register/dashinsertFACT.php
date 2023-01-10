<?php
    include "config.php";

    if($_POST['fact']==null){
      header("Location: dashbord.php");
    }

    if(isset($_POST['fact'])){
    $fact = mysqli_real_escape_string($conn, $_POST['fact']);
    $client = mysqli_real_escape_string($conn, $_POST['client']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $Mon = mysqli_real_escape_string($conn, $_POST['Mon']);
    // $etat = mysqli_real_escape_string($conn, $_POST['etat']);
 
    // if($name=='' || $prix==''  || $size==''){
    //    return false;
    // }
    
    if(mysqli_query($conn, "INSERT INTO facture(id ,id_user, montant, date) VALUES('" . $fact . "', '".$client."'  , $Mon , ' " . $date . "')")) {
      echo "<script>alert('inseretd')</script>";
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


