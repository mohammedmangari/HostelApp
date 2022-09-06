<?php
include 'config.php';


if(isset($_POST['uphid'])){
     $name = $_POST["upname"];
     $prix = $_POST["upprix"];
     $size = $_POST["upsize"];
     $image = $_POST["upimage"];
     $hid = $_POST["uphid"];

    echo $_POST["upname"];


    $sqli="UPDATE menu set nom= '$name', prix='$prix', categorie='$size', image='$image' where id=$hid";
    $res=mysqli_query($conn,$sqli);


}


?>