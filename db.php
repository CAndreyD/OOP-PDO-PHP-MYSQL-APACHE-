<?php

class DBConnection {
    private $host = 'mysql:host=localhost;dbname=FeedBack;';
    private $username = 'root';
    private $password = '1';

    protected $conn;

    public function __construct() {
        $this->conn = new PDO($this->host, $this->username, $this->password);
        
        if(!empty($conn->connect_error)) {
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        // $this->conn->close();
        $conn=null;
    }
}


