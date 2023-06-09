<?php

namespace App\Controller;
use Config\Parameter;

class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleDAO->getAllArticles();
        return $this->view->render(
            'home.html.twig', [
            'allArticles' => $articles
            ]
        );
    }

    public function article($articleId)
    {
        $article = $this->articleDAO->getOneArticle($articleId);
        $comments = $this->commentDAO->getCommentsFromArticle($articleId);
        return $this->view->render(
            'single.html.twig', [
            'article' => $article,
            'allComments' => $comments
            ]
        );
    }
    public function addComment(Parameter $post, $articleId)
    {
        if ($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Comment');
            if ($errors === null || count($errors) === 0) {
                if ($post->get('pseudo') === $this->session->get('pseudo')) {
                    $this->commentDAO->addComment($post, $articleId);
                    $this->session->set('add_comment', 'Le nouveau commentaire est en attente de validation');
                    header('Location: ../public/index.php');
                    return;
                } else {
                    $errors = ['pseudo' => 'pas le meme pseudo'];
                }
            }
            
            $article = $this->articleDAO->getOneArticle($articleId);
            $comments = $this->commentDAO->getCommentsFromArticle($articleId);

            return $this->view->render(
                'single.html.twig', [
                'article' => $article,
                'comments' => $comments,
                'post' => $post,
                'errors' => $errors
                ]
            );
        }
        $this->session->set('not_action', 'vous ne pouvez pas faire cette action');
        header('Location: ../public/index.php');
    }

    public function flagComment($commentId)
    {
        $this->commentDAO->flagComment($commentId);
        $this->session->set('flag_comment', 'Le commentaire a bien été signalé');
        header('Location: ../public/index.php');
    }
    public function register(Parameter $post)
    {   
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'User');
            if($this->userDAO->checkUser($post)) {
                $errors['pseudo'] = $this->userDAO->checkUser($post);
            }
            if(!$errors) {
                $this->userDAO->register($post);
                $this->session->set('register', 'Votre inscription a bien été effectuée');
                header('Location: ../public/index.php');
            }
            return $this->view->render(
                'register.html.twig', [
                'post' => $post,
                'errors' => $errors
                ]
            );

        }
        return $this->view->render('register.html.twig');
    }
    public function login(Parameter $post)
    {
        if($post->get('submit')) {
            $user = $this->userDAO->login($post);
            $result = $this->checkLogin($post, $user);
            if($result && $result['isPasswordValid']) {
                $this->session->set('login', 'Content de vous revoir');
                $this->session->set('id', $result['result']['id']);
                $this->session->set('role', $result['result']['name']);
                $this->session->set('email', $result['result']['email']);
                $this->session->set('pseudo', $result['result']['pseudo']);
                header('Location: ../public/index.php');
            }
            else {
                $this->session->set('error_login', 'Le pseudo ou le mot de passe sont incorrects');
                return $this->view->render(
                    'login.html.twig', [
                    'post'=> $post
                    ]
                );
            }
        }
        return $this->view->render('login.html.twig');
    }
    public function checkLogin(Parameter $post, $result)
    {
        if ($result !== false) {
            $isPasswordValid = password_verify($post->get('password'), $result['password']);

            return [
                'result' => $result,
                'isPasswordValid' => $isPasswordValid
            ];
        }
        return [
            'result' => false,
            'isPasswordValid' => false
        ];
    }
}
