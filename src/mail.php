
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/envoie_mail.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <title>Redirection</title>
</head>
<body>



<?php

//sécurisation des caractéres transmis
    if(empty($_POST['email']) ||
        empty($_POST['nom']) ||
        empty($_POST['message']) ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        echo "No arguments Provided";
        return false;
    }

    $nom = strip_tags(htmlspecialchars($_POST['nom']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $message = strip_tags(htmlspecialchars($_POST['message']));




    $mailer = new Mailer();

    $mailer->sendMail($email, $nom, $message);

    return true



?>
</body>
</html>