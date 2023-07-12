<?php

namespace App\Controller;
use Config\Parameter;

class BackController extends Controller
{
    public function checkPseudoComment($commentId) {
        $comment = $this->commentDAO->getComment($commentId);
        if ($comment['pseudo'] === $this->session->get('pseudo')) {
            return true;
        }
        return false;
    }

    public function deleteComment($commentId)
    {
        if ($this->checkPseudoComment($commentId) === true) {
            $this->commentDAO->deleteComment($commentId);
            $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
            header('Location: ../public/index.php');
        }
        $this->session->set('not_action', 'vous ne pouvez pas faire cette action');
        header('Location: ../public/index.php');
        
    }

    public function profile()
    {
        if ($this->session->get('pseudo')) {
            return $this->view->render('profile.html.twig');
        }
        $this->session->set('not_action', 'vous ne pouvez pas faire cette action');
        header('Location: ../public/index.php');
    }

    public function updatePassword(Parameter $post)
    {
        if ($this->session->get('pseudo') === null) {
            $this->session->set('not_action', 'vous ne pouvez pas faire cette action');
            header('Location: ../public/index.php');
        }
        if ($post->get('submit')) {
            $this->userDAO->updatePassword($post, $this->session->get('pseudo'));
            $this->session->set('update_password', 'Le mot de passe a été mis à jour');
            header('Location: ../public/index.php?route=profile');
        }
        return $this->view->render('update_password.html.twig');
    }

    public function logout()
    {
        $this->logoutOrDelete('logout');
    }

    public function deleteAccount()
    {
        if ($this->session->get('pseudo') !== null) {
            $this->userDAO->deleteAccount($this->session->get('pseudo'));
            $this->logoutOrDelete('delete_account');
        }
        $this->session->set('not_action', 'vous ne pouvez pas faire cette action');
        header('Location: ../public/index.php');
    }

    private function logoutOrDelete($param)
    {
        $this->session->stop();
        $this->session->start();
        if ($param === 'logout') {
            $this->session->set($param, 'À bientôt');
        } else {
            $this->session->set($param, 'Votre compte a bien été supprimé');
        }
        header('Location: ../public/index.php');
    }
}

