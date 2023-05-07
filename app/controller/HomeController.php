<?php

namespace controller;

require_once('app/lib/Autoloader.php');
use model\UsersModel;

class HomeController
{
    private $usersModel;

    public function __construct() {
        $this->usersModel = new UsersModel();
    }

    function index(): void {
        echo '<pre>' . var_export($this->usersModel->getUsers(), true) . '</pre>';
    }
}