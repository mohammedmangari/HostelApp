
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

include 'config.php';

$sqli = "SELECT * from menu where id=60";
$res=mysqli_query($conn,$sqli);

$im = mysqli_fetch_assoc($res)['image'];

echo "<img src='$im'>";

 ?>   
</body>
</html>