<?php
session_start();

require '../config/Dev.php';
require '../vendor/autoload.php';

use Config\Router;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader( '../templates');
$twig = new Environment($loader, [
    'cache' => __DIR__, '/tmp'

]);
$router = new Router();
$router->run();
