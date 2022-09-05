<?php
session_start();
?>
<!DOCTYPE html>

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Main css -->
    <link rel="stylesheet" href="traitement.css">
</head>
<?php
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, "compte");
if (!$con) {
    echo " Database Connection Error";
}


function set_message($msg)
{
    if (!empty($msg)) {
        $_SESSION['MESSAGE'] = $msg;
    } else {
        $msg = '';
    }
}
// display Session Message
function display_message()
{
    if (isset($_SESSION['MESSAGE'])) {
        echo $_SESSION['MESSAGE'];
        session_unset();
    }
}


// function verif_email($email)
// {
//     $syntaxe = '#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#';
//     if (preg_match($syntaxe, $email))
//         return true;
//     else
//         return false;
// }
function register_user()
{
    global $con;
    if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['password']) && isset($_SESSION['re_password'])) {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        $pass = $_SESSION['password'];
        $confirm_pass = $_SESSION['re_password'];
        if (empty($name) || empty($email) || empty($pass) || empty($confirm_pass)) {
            $error = "<div> Please Fill in the Blanks</div>";
            set_message($error);
        } else {
            if ($pass != $confirm_pass) {
                $error = "<div> Password Not Matched.</div>";
                set_message($error);
            } else {
                $query = "select * from users where email='$email'";
                $result = mysqli_query($con, $query);

                if (mysqli_num_rows($result)) {
                    $error = "<div>The Email Already Exists.</div>";
                    set_message($error);
                } else {
                    $hash = md5($pass);

                    $sql = "INSERT INTO users (username,email,password) VALUES('$name' , '$email' , '$hash')";
                    $data = mysqli_query($con, $sql); //(le nom de connexion , le nom de requete)
                    if ($data) {
                        $error = "<div> Record Successfully Registered : ) </div>";
                        set_message($error);
                    } else {
                        $error = "<div> Something is Wrong; </div>";
                        set_message($error);
                    }
                }
            }
        }
    }
}
