<?php
namespace App\Model;

use Config\Request;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class TemplateRenderer
{
    private $request;
    private $session;

    public function __construct()
    {
        $this->request = new Request();
        $this->session = $this->request->getSession();
    }

    public function render($template, $data = [])
    {
        $loader = new FilesystemLoader('../templates');
        $twig = new Environment($loader, [
            'cache' => '../templates/tmp',
            'debug' => true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $data['session'] = $this->session;
        echo $twig->render($template, $data);
    }
}
