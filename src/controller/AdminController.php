<?php

namespace App\Controller;
use Config\Parameter;

class AdminController extends Controller
{
    private function checkLoggedIn()
    {
        if (!$this->session->get('pseudo')) {
            $this->session->set('need_login', 'Vous devez vous connecter pour accéder à cette page');
            header('Location: ../public/index.php?route=login');
        } else {
            return true;
        }
    }
    private function checkAdmin()
    {
        $this->checkLoggedIn();
        if (!($this->session->get('role') === 'admin')) {
            $this->session->set('not_admin', 'Vous n\'avez pas le droit d\'accéder à cette page');
            header('Location: ../public/index.php?route=profile');
        } else {
            return true;
        }
    }

    public function administration()
    {
        if ($this->checkAdmin()) {
            $articles = $this->articleDAO->getAllArticles();
            $comments = $this->commentDAO->getFlagComments();
            $statusComments = $this->commentDAO->getStatusComments();
            $users = $this->userDAO->getUsers();

            return $this->view->render('administration.html.twig', [
                'articles' => $articles,
                'comments' => $comments,
                'statusComments' => $statusComments,
                'users' => $users
            ]);
        }
    }

    public function addArticle(Parameter $post)
    {
        if ($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if (!$errors) {
                $this->articleDAO->addArticle($post, $this->session->get('id'));
                $this->session->set('add_article', 'Le nouvel article a bien été ajouté');
                header('Location: ../public/index.php?route=administration');
            }
            return $this->view->render('add_article.html.twig', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        return $this->view->render('add_article.html.twig');
    }

    public function editArticle(Parameter $post, $articleId)
    {
        $article = $this->articleDAO->getOneArticle($articleId);
        if ($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if (!$errors) {
                $this->articleDAO->editArticle($post, $articleId, $this->session->get('id'));
                $this->session->set('edit_article', 'L\'article a bien été modifié');
                header('Location: ../public/index.php?route=administration');
            }
            return $this->view->render('edit_article.html.twig', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        $post->set('id', $article->getId());
        $post->set('title', $article->getTitle());
        $post->set('content', $article->getContent());
        $post->set('author', $article->getAuthor());

        return $this->view->render('edit_article.html.twig', [
            'post' => $post
        ]);
    }
}