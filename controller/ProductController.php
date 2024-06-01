<?php

// nhung file model
include "./model/ProductModel.php";

class ProductController {
    public $productModel;

    public function __construct() {
        $this->productModel = new ProductModel();
    }

    public function showAllProduct(){
        // no co can truy db de lay du lieu khong
        // goi db va lay ket qua ve
        $products = $this->productModel->getAllProdut();
        // goi view de tra ket qua cho nguoi dung 

        // showData($products);
        // die();

        include "./view/home.php";
    }

    public function showProductDetail($id) {
        $product = $this->productModel->getProductById($id);

        include "./view/productDetail.php";
    }
}


?>