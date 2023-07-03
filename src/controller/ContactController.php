<?php

namespace App\Controller;

use Config\Parameter;

class ContactController extends Controller
{
    private $votreAdresseMail = "cece4526@hotmail.fr";

    public function contactMail(Parameter $post)
    {
        if (empty($post->get('mail'))) {
            $this->session->set('void_mail', 'Le champ mail est vide');
            header('Location: ../public/index.php');
            return;
        }

        $mail = $post->get('mail');
        if (!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i", $mail)) {
            $this->session->set('void_mail', 'L\'adresse mail entrée est incorrecte');
            header('Location: ../public/index.php');
            return;
        }

        if (empty($post->get('sujet'))) {
            $this->session->set('void_sujet', 'Le champ sujet est vide');
            header('Location: ../public/index.php');
            return;
        }

        if (empty($post->get('message'))) {
            $this->session->set('void_message', 'Le champ message est vide');
            header('Location: ../public/index.php');
            return;
        }

        $entetes = "MIME-Version: 1.0\r\n";
        $entetes .= "Content-type: text/html; charset=UTF-8\r\n";
        $entetes .= "From: Crea-ced <" . $mail . ">\r\n";
        $entetes .= "Reply-To: Crea-ced <" . $mail . ">\r\n";
        $sujet = '=?UTF-8?B?' . base64_encode($post->get('sujet')) . '?=';
        $message = htmlentities($post->get('message'), ENT_QUOTES, "UTF-8");

        if (mail($this->votreAdresseMail, $sujet, nl2br($message), $entetes)) {
            $this->session->set('succes_mail', 'Le mail a été envoyé avec succès !');
        } else {
            $this->session->set('no_send_mail', 'Une erreur est survenue, le mail n\'a pas été envoyé');
        }

        header('Location: ../public/index.php');
    }
}