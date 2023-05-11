<?php

require '../config/Dev.php';
require '../vendor/autoload.php';
session_start();
$router = new \App\config\Router();
$router->run();
$loader = new Twig_loader_filesystem(__DIR__, '/template');
$twig = new Twig_Environment($loader, [
    'cache' => __DIR__, '/tmp'

]);