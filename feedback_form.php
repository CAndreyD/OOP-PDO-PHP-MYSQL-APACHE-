<?php
require 'db.php';
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
ini_set("error_reporting", E_ALL);
class FeedbackForm {
    private $conn;

    public function __construct() {
        $db = new DBConnection();
        $this->conn = $db->getConnection();
    }
    public function saveFeedback($name, $email, $message) {
        try {
            
            $sql = "INSERT INTO FeedBack.Users (fio, email, message) VALUES (:name, :email, :message)";
            
            
            $stmt = $this->conn->prepare($sql);
            
            
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':message', $message);
            
            
            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo("Ошибка saveFeedback");
            return false;
        }
    }
    
    // public function saveFeedback($name, $email, $message) {
    //     $name = $this->conn->real_escape_string($name);
    //     $email = $this->conn->real_escape_string($email);
    //     $message = $this->conn->real_escape_string($message);
        
    //     $sql = "INSERT INTO FeedBack.Users (fio, email, message) VALUES ('$name', '$email', '$message')";
        
    //     if ($this->conn->query($sql) === TRUE) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }

    public function getFeedbackMessages() {
        $sql = "SELECT * FROM FeedBack.Users";
        $result = $this->conn->query($sql);

        $feedback = array();

        if ($result->rowCount() > 0) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $feedback[] = $row;
            }
            return $feedback;
        } else {
            return false;
        }
    }
}
