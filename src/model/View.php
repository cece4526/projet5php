<?php

namespace App\Model;

use Config\Request;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View
{
    private $file;
    private $title;
    private $request;
    private $session;

    public function __construct()
    {
        $this->request = new Request();
        $this->session = $this->request->getSession();
    }

    public function render($template, $data = [])
    {
        $loader = new FilesystemLoader( '../templates');
        $twig = new Environment($loader, [
            'cache' => '../templates/tmp',
            'debug' => true
        ]);
        $twig->addExtension(new \Twig\Extension\DebugExtension());
        $data['session']= $this->session;
        echo $twig->render($template, $data);
        die;
        // $this->file = '../templates/'.$template.'.php';
        // $content  = $this->renderFile($this->file, $data);
        // $view = $this->renderFile(
        //     '../templates/base.php', [
        //     'title' => $this->title,
        //     'content' => $content,
        //     'session' => $this->session
        //     ]
        // );
        // echo $view;
    }

    private function renderFile($file, $data)
    {
        if(file_exists($file)) {
            extract($data);
            ob_start();
            include $file;
            return ob_get_clean();
        }
        header('Location: index.php?route=notFound');
    }
}
