<?php
include 'config.php';
  $id = $_GET['DFACT'];
  $sqli="DELETE from facture where id = $id" ;
  $res = mysqli_query($conn,$sqli);
  if(!$res){
    echo 'no';
  }else{
    echo 'yes';
  }

?>
