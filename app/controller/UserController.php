<?php

namespace controller;

require_once('app/lib/Autoloader.php');

use lib\Controller;
use model\UsersModel;
use model\RolesModel;

class UserController extends Controller
{
    private $usersModel;
    private $rolesModel;

    public function __construct() {
        $this->usersModel = $this->model(UsersModel::class);
        $this->rolesModel = $this->model(RolesModel::class);
    }

    public function index() {
        $users = $this->usersModel->getUsers();
        $data = [
            'pageTitle' => "Daftar User",
            'users' => $users
        ];
        $this->view('v_user', $data);
    }

    public function addUser() {
        $data = [
            'pageTitle' => "Tambah User",
            'roles' => $this->rolesModel->getRoles()
        ];
        $this->view('v_user', $data);
    }

    public function editUser() {
        $data = [
            'pageTitle' => "Ubah User",
            'roles' => $this->rolesModel->getRoles(),
            'user' => $this->usersModel->getUserById($_GET['idUser'])
        ];
        $this->view('v_user', $data);
    }

    public function saveUser() {
        if(isset($_POST['btn_submit'])) {
            // Remove all HTML tags and all characters with ASCII value > 127
            $firstName  = filter_var($_POST['input_first_name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $lastName   = filter_var($_POST['input_last_name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $phone      = filter_var($_POST['input_phone'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $address    = filter_var($_POST['input_address'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $role       = filter_var($_POST['role'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $username   = filter_var($_POST['input_username'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $password   = filter_var($_POST['input_password'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

            $saveUser = $this->usersModel->saveUser(
                username: $username,
                password: $password,
                firstName: $firstName,
                lastName: $lastName,
                phone: $phone,
                address: $address,
                idRole: $role
            );

            if($saveUser) {
                header('Location: ' . $this->getBaseUrl() . 'user');
                exit();
            } else {
                echo nl2br("Failed to save user data. Please try again!\n<a href='" . $this->getBaseUrl() . "user'>Kembali</a>");
            }
        }
    }

    public function updateUser() {
        if(isset($_POST['btn_submit'])) {
            // Remove all HTML tags and all characters with ASCII value > 127
            $idUser     = filter_var($_POST['input_id_user'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $firstName  = filter_var($_POST['input_first_name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $lastName   = filter_var($_POST['input_last_name'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $phone      = filter_var($_POST['input_phone'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $address    = filter_var($_POST['input_address'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $role       = filter_var($_POST['role'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $username   = filter_var($_POST['input_username'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $password   = filter_var($_POST['input_password'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

            $updateUser = $this->usersModel->updateUser(
                username: $username,
                password: $password,
                firstName: $firstName,
                lastName: $lastName,
                phone: $phone,
                address: $address,
                idRole: $role,
                idUser: $idUser
            );

            if($updateUser) {
                header('Location: ' . $this->getBaseUrl() . 'user');
                exit();
            } else {
                echo nl2br("Failed to save user data. Please try again!\n<a href='" . $this->getBaseUrl() . "user'>Kembali</a>");
            }
        }
    }

    public function deleteUser() {
        if(isset($_GET['idUser'])) {
            $deleteUser = $this->usersModel->deleteUser($_GET['idUser']);

            if($deleteUser) {
                header('Location: ' . $this->getBaseUrl() . 'user');
                exit();
            } else {
                echo nl2br("Failed to delete user data. Please try again!\n<a href='" . $this->getBaseUrl() . "user'>Kembali</a>");
            }
        }
    }
}