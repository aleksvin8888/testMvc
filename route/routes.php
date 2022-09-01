<?php


use Bramus\Router\Router;


$router = new Router();

$router->get('/', 'App\Controllers\HomeController@home');

$router->get('/users', 'App\Controllers\UserController@index');
$router->get('/user/{id}', 'App\Controllers\UserController@show');
$router->post('/user', 'App\Controllers\UserController@store');

$router->get('/departments', 'App\Controllers\DepartmentController@index');
$router->get('/department', 'App\Controllers\DepartmentController@create');
$router->post('/department', 'App\Controllers\DepartmentController@store');



$router->run();