<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['re_password'])) {
    session_start();
    $_SESSION['name'] = htmlspecialchars($_POST['name']);
    $_SESSION['email'] = htmlspecialchars($_POST['email']);
    $_SESSION['password'] = htmlspecialchars($_POST['password']);
    $_SESSION['re_password'] = htmlspecialchars($_POST['re_password']);
    header('location:compte.php');
} else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}
