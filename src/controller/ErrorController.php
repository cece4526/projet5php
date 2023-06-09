<?php

namespace App\Controller;

class ErrorController extends Controller
{
    public function errorNotFound()
    {
        return $this->view->render('error_404.html.twig');
    }

    public function errorServer($e = null)
    {
        return $this->view->render('error_500.html.twig', ['error' => $e]);
    }
}
