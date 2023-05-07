<?php

//Load the auto loader classes
require_once('app/lib/Autoloader.php');
use router\Router;
use controller\HomeController;
use controller\UserController;

//Homepage
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/index', HomeController::class, 'index');

//User
Router::add('GET', '/user', UserController::class, 'index');
Router::add('GET', '/addUser', UserController::class, 'addUser');
Router::add('GET', '/editUser', UserController::class, 'editUser');
Router::add('POST', '/saveUser', UserController::class, 'saveUser');
Router::add('POST', '/updateUser', UserController::class, 'updateUser');
Router::add('GET', '/deleteUser', UserController::class, 'deleteUser');

Router::run();