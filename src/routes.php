<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/create', 'UsersController@create');
$router->post('/create', 'UsersController@createUserAction');
$router->get('/user/{id}/edit', 'UsersController@editUser');
$router->post('/user/{id}/edit', 'UsersController@editUserAction');
$router->get('/user/{id}/delete', 'UsersController@deleteUser');