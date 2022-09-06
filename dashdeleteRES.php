<?php

include 'config.php';
if(isset($_GET['Deletesend'])){
  $idt = $_GET['Deletesend'];
  $sqli="DELETE from reservation where id =$idt" ;
  $res = mysqli_query($conn,$sqli);
  if(!$res){
    echo 'no';
  }else{
    echo 'yes';
  }
}
?>

