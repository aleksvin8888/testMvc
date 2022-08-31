<?php


use Bramus\Router\Router;


$router = new Router();

$router->get('/', 'App\Controllers\HomeController@home');

$router->get('/users', 'App\Controllers\UserController@index');
$router->get('/user/{id}', 'App\Controllers\UserController@show');

$router->get('/departments', 'App\Controllers\DepartmentController@index');
$router->get('/department/{id}', 'App\Controllers\DepartmentController@show');



$router->run();