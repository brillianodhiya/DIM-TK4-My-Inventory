<?php

namespace model;

require_once('app/lib/Autoloader.php');
use database\Database;

class UsersModel
{
    private $database;

    public function __construct() {
        $db = new Database();
        $this->database = $db->connect();
    }

    function saveUser($username, $password, $firstName, $lastName, $phone, $address, $idRole) {
        $query = "INSERT INTO Users (username, `password`, first_name, last_name, phone, address, id_role) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $db = $this->database->prepare($query);
        $executed = $db->execute($username, $password, $firstName, $lastName, $phone, $address, $idRole);
        return $executed;
    }

    function getUsers() {
        $query = "
            SELECT UR.role_name, U.*
            FROM Users U
            JOIN UserRoles UR ON U.id_role = UR.id_role;
        ";

        $db = $this->database->prepare($query);
        $db->execute();
        return $db->fetchAll();
    }

    function getUserById($userId) {
        $query = "SELECT * FROM Users WHERE id_user = ?";
        $db = $this->database->prepare($query);
        $db->execute($userId);
        return $db->fetchAll();
    }

    function updateUser($username, $password, $firstName, $lastName, $phone, $address, $idRole, $idUser) {
        $query = "UPDATE Users 
                    SET username = ?, 
                        `password` = ?, 
                        first_name = ?, 
                        last_name = ?, 
                        phone = ?, 
                        address = ?, 
                        id_role = ?
                    WHERE id_user = ?";
        $db = $this->database->prepare($query);
        $executed = $db->execute($username, $password, $firstName, $lastName, $phone, $address, $idRole, $idUser);
        return $executed;
    }

    function deleteUser($idUser) {
        $query = "DELETE FROM Users WHERE id_user = ?";
        $db = $this->database->prepare($query);
        return $db->execute($idUser);
    }
}