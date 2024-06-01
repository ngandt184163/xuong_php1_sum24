<?php

include "./includes/connect.php";
class ProductModel {
    public $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    public function getAllProdut() {
        // viet cau truy van
        $sql = "SELECT * FROM products";
        // chay cau truy van
        $result = $this->conn->query($sql);
        // tra ve ket qua
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM products WHERE id='$id'";
        $result = $this->conn->query($sql);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

?>