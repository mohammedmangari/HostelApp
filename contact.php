<!DOCTYPE html>
<html lang="fr">

<head>

    <link rel="stylesheet" href="contact.css">
</head>

<body>
    <div class="container">
        <h1> Contactez-nous</h1>
        <!-- <h4 class="paragraphe">Pour toute question ou demande de renseignements,</br> note formulaire et un conseiller
            vous contactera pour</br> vous assister davantage.
        </h4> -->
        <?php
        message();
        if (isset($_GET["success"])) {
            echo '<p class="">' . $_GET['success'] . '</p>';
        }
        if (isset($_GET["error"])) {
            echo '<p class="">' . $_GET["error"] . '</p>';
        }
        ?>
        <form name="myForm" onsubmit="return validateForm()" method="post">
            <table class="form-style">
                <tr>
                    <td>
                        <label>
                            Votre nom <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom" class="long" />
                        <span class="error" id="errorname"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Le sujet de message <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <input type="text" name="sujet" class="long" />
                        <span class="error" id="errorsujet"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Votre adresse e-mail <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <input type="email" name="email" class="long" />
                        <span class="error" id="erroremail"></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>
                            Message <span class="required">*</span>
                        </label>
                    </td>
                    <td>
                        <textarea name="message" class="long field-textarea"></textarea>
                        <span class="error" id="errormsg"></span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="soumettre" style="cursor: pointer;" bouvalue="Envoyer">
                        <input type="reset" style="cursor: pointer;" value="Réinitialiser">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php
    // si le formulaire a été remplis
    function message()
    {
        if (isset($_POST['message'])) {
            $message = "Ce message vous a été envoyé via la page constact du site hotelSaada.ma
        Nom : " . $_POST["nom"] .
                "Email :" . $_POST["email"] . "
        Message :" . $_POST["message"];

            $retour = mail('redouanemra@gmail.com', $_POST["sujet"], $message, 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
            if ($retour) {
                header("Location: contact.php?success=Votre message a bien été envoyé !");
            } else {
                header("Location: contact.php?error=Votre message a mal transferé !");
            }
        }
    }



    ?>
    <?php
    //Base de donnée
    // function message()
    // {
    //     if (!empty($_POST["soumettre"])) {
    //         $nom = $_POST["nom"];
    //         $email = $_POST["email"];
    //         $sujet = $_POST["sujet"];
    //         $message = $_POST["message"];

    //         $connexion = mysqli_connect("localhost", "root", "", "phpdonee") or die("Erreur de connexion: " . mysqli_error($connexion));
    //         $result = mysqli_query($connexion, "INSERT INTO message (nom, sujet, email, message) VALUES ('$nom' , '$sujet' , '$email' , '$message')");
    //         if ($result) {
    //             echo '<p>Votre message a bien été envoyé.</p>';
    //         } else {
    //             echo '<p>Erreur lors de l\'envois du message.</p>';
    //         }
    //     }
    // }
    ?>
    <script language='javascript'>
        temp = document.getElementById('mess');
        setTimeout('temp.style.display="none"', 0);
    </script>
    <script>
        function validateForm() {
            var name = document.forms["myForm"]["name"];
            var email = document.forms["myForm"]["email"];
            var message = document.forms["myForm"]["message"];

            if (name.value == "") {
                document.getElementById('errorname').innerHTML = "Veuillez entrez un nom valide";
                name.focus();
                return false;
            } else {
                document.getElementById('errorname').innerHTML = "";
            }

            if (email.value == "") {
                document.getElementById('erroremail').innerHTML = "Veuillez entrez une adresse mail valide";
                email.focus();
                return false;
            } else {
                document.getElementById('erroremail').innerHTML = "";
            }

            if (email.value.indexOf("@", 0) < 0) {
                document.getElementById('erroremail').innerHTML = "Veuillez entrez une adresse mail valide";
                email.focus();
                return false;
            }

            if (email.value.indexOf(".", 0) < 0) {
                document.getElementById('erroremail').innerHTML = "Veuillez entrez une adresse mail valide";
                email.focus();
                return false;
            }

            if (message.value == "") {
                document.getElementById('errormsg').innerHTML = "Veuillez entrez un message valide";
                message.focus();
                return false;
            } else {
                document.getElementById('errormsg').innerHTML = "";
            }

            return true;
        }
    </script>

</body>

</html>