<?php

namespace model;

require_once('app/lib/Autoloader.php');
use database\Database;

class MembersModel
{
    private $database;

    public function __construct() {
        $db = new Database();
        $this->database = $db->connect();
    }

    function getMembers() {
        $query = "SELECT * FROM Members;";
        $db = $this->database->prepare($query);
        $db->execute();
        return $db->fetchAll();
    }
}