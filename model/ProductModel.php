<?php

include "./includes/connect.php";
class ProductModel {
    public $conn;

    public function __construct() {
        $this->conn = connectDB();
    }
}

?>