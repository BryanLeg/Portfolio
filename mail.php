<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoyer du mail à Bryan LEGRAIN</title>
</head>
<body>
    <?php
    session_start();
    $dest = "brylegrain@gmail.com";
    $sujet = "Envoi depuis la page Contact de mon Portfolio";
    $message = $_POST['message'];
    $header =  $_POST['name'];

        if(isset($_POST['message'])) {
            $envoi = mail($dest, $sujet, $message, $header);

            if ($envoi) {
                echo '<p>Votre message a bien été envoyé.</p>';
            } else {
                echo '<p>Echec de ln\'envoie</p>';
            }
        };
    ?>
</body>
</html>