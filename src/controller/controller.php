<?php

namespace App\Controller;



use Config\Request;
use App\Constraint\Validation;
use App\DAO\ArticleDAO;
use App\DAO\CommentDAO;
use App\DAO\UserDAO;
use App\Model\TemplateRenderer;

abstract class Controller
{
    
    protected $articleDAO;
    protected $commentDAO;
    protected $userDAO;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $validation;

    public function __construct()
    {
        $this->articleDAO = new ArticleDAO();
        $this->commentDAO = new CommentDAO();
        $this->userDAO = new UserDAO();
        $this->view = new TemplateRenderer();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}
