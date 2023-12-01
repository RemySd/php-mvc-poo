<?php

namespace App\Tools;

use PDO;

class Database
{
    private PDO $connexion;
    private static ?Database $instance = null;

    private function __construct()
    {
        $this->connexion = new PDO(DB_DSN, DB_USER, DB_PWD);
    }

    public function getConnexion(): PDO
    {
        return $this->connexion;
    }

    public static function getInstance(): Database
    {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
}
