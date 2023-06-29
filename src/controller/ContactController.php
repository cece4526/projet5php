<?php

namespace App\Controller;

use Config\Parameter;

class ContactController extends Controller
{
    public $VotreAdresseMail = "cece4526@hotmail.fr";

    public function contactMail(Parameter $post)
    {
        if (!empty($post->get('mail'))) {
            if (!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i", $post->get('mail'))) {
                echo "L'adresse mail entrée est incorrecte";
            } else {
                if (!empty($post->get('sujet'))) {
                    if (!empty($post->get('message'))) {
                        $Entetes = "MIME-Version: 1.0\r\n";
                        $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                        $Entetes .= "From: Crea-ced <" . $post->get('mail') . ">\r\n";
                        $Entetes .= "Reply-To: Crea-ced <" . $post->get('mail') . ">\r\n";
                        $Mail = $post->get('mail');
                        $Sujet = '=?UTF-8?B?' . base64_encode($post->get('sujet')) . '?=';
                        $Message = htmlentities($post->get('message'), ENT_QUOTES, "UTF-8");
                        if (mail($this->VotreAdresseMail, $Sujet, nl2br($Message), $Entetes)) {
                            echo "Le mail a été envoyé avec succès !";
                        } else {
                            $this->session->set('no_send_mail', 'Une erreur est survenue, le mail n\'a pas été envoyé');
                            header('Location: ../public/index.php');
                        }
                    } else {
                        $this->session->set('void_message', 'Le champ message est vide');
                        header('Location: ../public/index.php');
                    }
                } else {
                    $this->session->set('void_sujet', 'Le champ sujet est vide');
                    header('Location: ../public/index.php');
                }
            }
        } else {
            $this->session->set('void_mail', 'Le champ mail est vide');
            header('Location: ../public/index.php');
        }
    }
}
