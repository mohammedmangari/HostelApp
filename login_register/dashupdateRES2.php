<?php
include 'config.php';


if(isset($_POST['uphid'])){
     $UN = $_POST["Unpr"];
     $UC = $_POST["Uncl"];
     $UD = $_POST["Udate"];
     $hid = $_POST["uphid"];

    echo $_POST["upname"];


    $sqli="UPDATE reservation set produit_menu= '$UN', id_user='$UC',  date='$UD' where id = $hid";
    $res=mysqli_query($conn,$sqli);
}
?>