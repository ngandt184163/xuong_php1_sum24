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

    // ham nay chi co nhiem vu load view
    public function loadViewThem() {
        // load ca categories
        $categories = $this->productModel->getAllCategory();
        include "./view/them.php";
    }

    public function store() {
        if(isset($_POST['them'])) {
            $name=$_POST['name'];
            $price=$_POST['price'];
            $img=$_FILES['anh'];
            $quanty=$_POST['quanty'];
            $des_c=$_POST['des_c'];
            $category_id=$_POST['category_id'];


            //upload anh vao thu muc public/img va lay duong dan ve
            $img_path = uploadFile($img);

            // luu vao db
            $this->productModel->store($name, $price, $img_path, $quanty, $des_c, $category_id);

            // goi view
            header('location:?action=home');
        }
    }

    public function delete($id) {
        $this->productModel->destroy($id);
        header('location:?action=home');
    }

    public function loadViewSua($id) {
        $product = $this->productModel->getProductById($id);
        $categories = $this->productModel->getAllCategory();

        include "./view/update.php";
    }

    public function update($id) {
        if(isset($_POST['sua'])) {
            $name=$_POST['name'];
            $price=$_POST['price'];
            $img=$_FILES['anh'];
            $quanty=$_POST['quanty'];
            $des_c=$_POST['des_c'];
            $category_id=$_POST['category_id'];


            // kiem tra xem co up anh moi khong
            if($img['size'] == 0) {
                $product = $this->productModel->getProductById($id);
                $img_path = $product['image'];   // bang anh cu
            }else  {
                //upload anh vao thu muc public/img va lay duong dan ve
                $img_path = uploadFile($img);
            }
            

            // luu vao db
            $this->productModel->updateP($id, $name, $price, $img_path, $quanty, $des_c, $category_id);

            // goi view
            header('location:?action=home');
        }
    }
}


?>