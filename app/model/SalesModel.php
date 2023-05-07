<?php

namespace model;

require_once('app/lib/Autoloader.php');
use database\Database;

class SalesModel
{
    private $database;

    public function __construct() {
        $db = new Database();
        $this->database = $db->connect();
    }

    function getSales() {
        $query = "
            SELECT I.name as NamaBarang, I.unit as Satuan, S.name as Supplier, CONCAT(U.first_name, ' ', U.last_name) as admin_name, sales.*
            FROM Sales sales
            JOIN Items I on sales.id_item = I.id_item
            JOIN Suppliers S on S.id_supplier = sales.id_supplier
            JOIN Users U on U.id_user = sales.id_user;
        ";

        $db = $this->database->prepare($query);
        $db->execute();
        return $db->fetchAll();
    }
}