<?php


class Mailer
{
    const MAIL = "dylan.silva.sanches@outlook.fr";
    const SMTP = "office365.com:587";

    public function sendMail($email, $nom, $message): bool
    {
        $to = self::MAIL;
        $email_subject = "Portfolio, message de $nom";
        $email_body = "Vous avez reçus un mail depuis le formulaire de contact de votre site. \n\n"."Voici les détails: \n\nName: $nom\n\nEmail: $email\n\nMessage:\n$message";
        $sendmail = mail($to, $email_subject, $email_body);
        if ($sendmail){
            return '<div class="msg_mail"><p>Message envoyé ! En cours de redirection ...</p></div><div class="loader"></div>';
        }
        else {
            return "Erreur lors de l'envoie";
        }

    }
}