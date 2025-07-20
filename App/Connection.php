<?php

namespace App;

use Exception;
use PDO;
use PDOException;

class Connection {
    public function getDb() {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=mvc;charset=utf8", "php", "123456");
            return $conn;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}