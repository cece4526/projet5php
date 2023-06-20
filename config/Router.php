<?php
namespace Config;

use App\Controller\FrontController;
use App\Controller\BackController;
use App\Controller\ErrorController;
use App\Controller\AdminController;
use Exception;

class Router
{
    private $frontController;
    private $backController;
    private $errorController;
    private $adminController;
    private $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->frontController = new FrontController();
        $this->backController = new BackController();
        $this->errorController = new ErrorController();
        $this->adminController = new AdminController();
    }

    public function run()
    {
        $route = $this->request->getGet()->get('route');
        try {
            if ($route !== null) {
                switch ($route) {
                    case 'article':
                        $this->frontController->article($this->request->getGet()->get('articleId'));
                        break;
                    case 'addArticle':
                        $this->adminController->addArticle($this->request->getPost());
                        break;
                    case 'editArticle':
                        $this->adminController->editArticle($this->request->getPost(), $this->request->getGet()->get('articleId'));
                        break;
                    case 'deleteArticle':
                        $this->backController->deleteArticle($this->request->getGet()->get('articleId'));
                        break;
                    case 'addComment':
                        $this->frontController->addComment($this->request->getPost(), $this->request->getGet()->get('articleId'));
                        break;
                    case 'validateComment':
                        $this->backController->validateComment($this->request->getGet()->get('commentId'));
                        break;
                    case 'flagComment':
                        $this->frontController->flagComment($this->request->getGet()->get('commentId'));
                        break;
                    case 'unflagComment':
                        $this->backController->unflagComment($this->request->getGet()->get('commentId'));
                        break;
                    case 'deleteComment':
                        $this->backController->deleteComment($this->request->getGet()->get('commentId'));
                        break;
                    case 'register':
                        $this->frontController->register($this->request->getPost());
                        break;
                    case 'login':
                        $this->frontController->login($this->request->getPost());
                        break;
                    case 'profile':
                        $this->backController->profile();
                        break;
                    case 'updatePassword':
                        $this->backController->updatePassword($this->request->getPost());
                        break;
                    case 'logout':
                        $this->backController->logout();
                        break;
                    case 'deleteAccount':
                        $this->backController->deleteAccount();
                        break;
                    case 'deleteUser':
                        $this->backController->deleteUser($this->request->getGet()->get('userId'));
                        break;
                    case 'administration':
                        $this->adminController->administration();
                        break;
                    default:
                        $this->errorController->errorNotFound();
                        break;
                }
            } else {
                $this->frontController->home();
            }
        } catch (Exception $e) {
            $this->errorController->errorServer($e);
        }
    }
}