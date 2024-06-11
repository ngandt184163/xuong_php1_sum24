<?php

require_once "./includes/connect.php";
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


    public function getAllCategory() {
        // viet cau truy van
        $sql = "SELECT * FROM categories";
        // chay cau truy van
        $result = $this->conn->query($sql);
        // tra ve ket qua
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function store($name, $price, $img_path, $quanty, $des_c, $category_id) {
        $sql = "INSERT INTO products (name, price, image, quanty, des_c, category_id)
        VALUES ('$name', '$price', '$img_path', '$quanty', '$des_c', '$category_id')";

        $this->conn->query($sql);
    }

    public function destroy($id) {
        $sql = "DELETE FROM products WHERE id='$id'";
        $this->conn->query($sql);
    }

    public function updateP($id, $name, $price, $img_path, $quanty, $des_c, $category_id){
        $sql = "UPDATE products SET name='$name' ";
        $this->conn->query($sql);
    }
}

?>