<?php

namespace Core\Database;

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123');
define('DB_NAME', 'moviee');

class Database
{
    private \mysqli $connection;
    private static $instance;

    public function __construct()
    {
        $this->connect();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function connect()
    {
        $this->connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        if ($this->connection === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
    }

    public function query($query)
    {
        $result = mysqli_query($this->connection, $query);

        if ($result === false) {
            die("ERROR: Could not execute $query. " . mysqli_error($this->connection));
        }

        return $result;
    }
}
