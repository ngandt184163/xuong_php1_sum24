<?php
require_once "../includes/connect.php";

class UserModel{
    public $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    public function register($email, $password) {
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        $this->conn->query($sql);
    }

    public function login($email) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}


?>