<?php
require_once('./app.php');
use MVC\Router;
use Controller\UserController;

$router = new Router();
    $router->get('/',[UserController::class,'getUser']);
    $router->post('/',[UserController::class,'postUser']);
    $router->get('/edit',[UserController::class,'getEditUser']);
    $router->post('/edit',[UserController::class,'postEditUser']);
    $router->get('/delete',[UserController::class,'getDeleteUser']);
    $router->post('/delete',[UserController::class,'postDeleteUser']);

    $router->comprobarRutas();

?>