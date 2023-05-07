<?php

namespace model;

require_once('app/lib/Autoloader.php');
use database\Database;

class ItemsModel
{
    private $database;

    public function __construct() {
        $db = new Database();
        $this->database = $db->connect();
    }

    function getItems() {
        $query = "
            SELECT CONCAT(user.first_name, ' ', user.last_name) as admin_name, item.*
            FROM Items item
            JOIN Users user ON user.id_user = item.id_user        
        ";

        $db = $this->database->prepare($query);
        $db->execute();
        return $db->fetchAll();
    }
}