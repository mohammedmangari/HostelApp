<?php
include 'config.php';


if(isset($_POST['uphid'])){
     $UID = $_POST["UID"];
     $UCLIENT = $_POST["UCLIENT"];
     $UDATE = $_POST["UDATE"];
     $UMONTANT = $_POST["UMONTANT"];
    //  $UETAT = $_POST["UETAT"];
     $hid = $_POST["uphid"];

    echo $_POST["upname"];


    $sqli="UPDATE facture set id= '$UID', id_user='$UCLIENT', montant='$UMONTANT',  date ='$UDATE' where id = $hid";
    $res=mysqli_query($conn,$sqli);
}
?>