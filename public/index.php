<?php
session_start();

require '../config/Dev.php';
require '../vendor/autoload.php';

use Config\Router;

$router = new Router();
$router->run();
