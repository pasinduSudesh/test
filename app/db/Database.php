<?php declare (strict_types = 1);

define('dbHost', 'localhost');
define('dbUser', 'root');
define('dbPassword', '');
define('dbName', 'telas');

// TODO: use pdo, singleton
class Database
{
    private $conn;
    private static $instance;

    private function __construct()
    {
        $this->conn = new mysqli(dbHost, dbUser, dbPassword, dbName);
        if ($this->conn->connect_error)
        {
            die("error occurs while connecting with database");
        }
    }

    public function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function query($query)
    {
        return $this->conn->query($query);
    }

    public function idLastInsert(){
        return strval($this->conn->insert_id);
    }
}
 