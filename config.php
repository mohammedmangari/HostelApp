
<?php
// Configuration (conection to database)
$server = "localhost";
$user = "root";
$pass = "";
$database = "users";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
?>