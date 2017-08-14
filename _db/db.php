<?php

/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 8/13/17
 * Time: 4:59 PM
 */
class db
{
// specify your own database credentials
    private $host = "localhost";
    private $db_name = "deboerhulls_seaviewmodels";
    private $username = "root";
    private $password = "root";
    public $conn;
// get the database connection
    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

}