<?php

namespace model;

require_once('app/lib/Autoloader.php');
use database\Database;

class RolesModel
{
    private $database;

    public function __construct() {
        $db = new Database();
        $this->database = $db->connect();
    }

    function getRoles() {
        $query = "SELECT * FROM UserRoles;";
        $db = $this->database->prepare($query);
        $db->execute();
        return $db->fetchAll();
    }
}