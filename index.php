<?php

//Load the auto loader classes
require_once('app/lib/Autoloader.php');
use router\Router;
use controller\HomeController;

//Homepage
Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/index', HomeController::class, 'index');

//Add another router here... separate it using comment

Router::run();