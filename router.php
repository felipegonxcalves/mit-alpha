<?php

$router = new SON\Router;

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

$router['/store-question'] = [
    'class' => App\Controllers\QuestoesController::class,
    'action' => 'storeQuestoesIndex'
];

$router['/render-after-login'] = [
    'class' => App\Controllers\QuestoesController::class,
    'action' => 'renderAfterLogin'
];


return $router;
