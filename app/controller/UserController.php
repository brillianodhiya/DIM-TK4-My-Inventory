<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\UsersModel;

class UserController extends Controller
{
    private $usersModel;

    public function __construct() {
        $this->usersModel = $this->model(UsersModel::class);
    }

    public function index() {
        $users = $this->usersModel->getUsers();
        $data = [
            'pageTitle' => "Daftar User",
            'users' => $users
        ];
        $this->view('v_user', $data);
    }

}