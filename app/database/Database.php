<?php

namespace database;
use PDO;
use PDOException;

class Database
{
    private $hostname = "127.0.0.1";
    private $username = "root";
    private $password = "1sampai8";
    private $database = "dim_tk4";

    function connect()
    {
        try {
            $dbh = new PDO('mysql:host=' . $this->hostname . ';dbname=' . $this->database, $this->username, $this->password);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbh;
        } catch (PDOException $e) {
            echo nl2br("Failed making database connection: \n" . $e->getMessage());
            die();
        }
    }
}