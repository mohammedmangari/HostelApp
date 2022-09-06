<?php
include 'config.php';
  $id = $_GET['DEMP'];
  $sqli="DELETE from employeurs where id = $id" ;
  $res = mysqli_query($conn,$sqli);
  if(!$res){
    echo 'no';
  }else{
    echo 'yes';
  }

?>
