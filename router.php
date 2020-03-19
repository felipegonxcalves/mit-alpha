<?php

$router = new SON\Router;

$router['/'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'index'
];

$router['/registro'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'create'
];

$router['/products'] = [
    'class' => App\Controllers\ProductsController::class,
    'action' => 'index'
];

$router['/login'] = [
    'class' => App\Controllers\AutenticacaoController::class,
    'action' => 'pageRenderLogin'
];

$router['/validate-login'] = [
    'class' => App\Controllers\AutenticacaoController::class,
    'action' => 'validateLogin'
];

$router['/questoes'] = [
    'class' => App\Controllers\QuestoesController::class,
    'action' => 'renderQuestion'
];
$router['/render-after-login'] = [
    'class' => App\Controllers\QuestoesController::class,
    'action' => 'renderAfterLogin'
];


return $router;
