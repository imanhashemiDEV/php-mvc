<?php

use app\controllers\HomeController;
use app\controllers\PostController;



$router->get('/',[HomeController::class, 'index']);

$router->get('/posts',[PostController::class, 'index']);
$router->get('/post/{id}',[PostController::class, 'post']);