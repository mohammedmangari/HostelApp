<?php
include 'config.php';

if(isset($_POST['Upid'])){
    $pid=$_POST['Upid'];
    $sqli="SELECT * FROM menu  where id = $pid";
    $res=mysqli_query($conn,$sqli);
    $response=array();
    while($row=mysqli_fetch_assoc($res)){
        $response=$row;
    }
    echo json_encode($response);
}else{
    $response['status']=200;
    $response['message']="Invalide or data not found";
}



?>