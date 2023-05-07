<?php

namespace model;

require_once('app/lib/Autoloader.php');
use database\Database;

class SuppliersModel
{
    private $database;

    public function __construct() {
        $db = new Database();
        $this->database = $db->connect();
    }

    function getSuppliers() {
        $query = "SELECT * FROM Suppliers;";
        $db = $this->database->prepare($query);
        $db->execute();
        return $db->fetchAll();
    }
}