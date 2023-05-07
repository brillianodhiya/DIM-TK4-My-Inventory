<?php

//Load the auto loader classes
require_once('app/lib/Autoloader.php');
use router\Router;
use controller\HomeController;
use controller\UserController;

//Homepage
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/index', HomeController::class, 'index');
Router::add('GET', '/user', UserController::class, 'index');

//Add another router here... separate it using comment

Router::run();