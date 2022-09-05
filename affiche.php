<?php
require_once 'traitement.php';
register_user();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style22.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action='connexion.php'>
                        <h1 class="form-title">Create account</h1>
                        <div class="form-group">
                            <?php

                            if (isset($_SESSION['MESSAGE'])) {
                                display_message();
                            }

                            ?>
                            <input type="text" class="form-input" name="name" id="name" placeholder="Your Full Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required="required" />
                            <span class="error" id="erroremail"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required="required" />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password" required="required" />
                        </div>


                        <div class="form-group1">
                            <input type="submit" style="cursor: pointer;" name="submit" id="submit" class="form-submit" value="Sign up" />
                        </div>
                    </form>
                    <p class="loginhere">
                        j'ai deja un compte ? <a href="index.php" class="loginhere-link">se connecter </a>
                    </p>
                </div>
            </div>
        </section>

    </div>


    <!-- JS -->
    <script src="jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>