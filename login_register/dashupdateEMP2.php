<?php
include 'config.php';


if(isset($_POST['uphid'])){
     $name = $_POST["upname"];
     $sal = $_POST["upsal"];
     $date = $_POST["update"];
     $cont = $_POST["upcon"];
    //  $image = $_POST["upimage"];
     $hid = $_POST["uphid"];

    echo $_POST["upname"];


    $sqli="UPDATE employeurs set Nom= '$name', salaire='$sal', date='$date', Contact='$cont' where id=$hid";
    $res=mysqli_query($conn,$sqli);
}
?>'" . $name . "'