<?php

session_start();
// nhung file controller
include "./controller/ProductController.php";
include "./controller/UserController.php";
include "./includes/help.php";
// tao bien dieu huong
// $action = isset($_GET['action']) ? $_GET['action'] : "home";
$action = isset($_GET['action']) ? $_GET['action'] : "home";
// echo $action;

// tao doi tuong controller

$productController = new ProductController();
$userController = new UserController();

// dieu huong bang switch case
switch($action) {
    case "home":
        // khoi tao phuong thuc xu li
        $productController->showAllProduct();
        break;
    case "product_detail":
        $id = $_GET['id'];
        $productController->showProductDetail($id);
        break;
    case "register":
        $userController->register();
        break;

    case "register-store":
        $userController->registerStore();
        break;

    case "login":
        $userController->login();
        break;
    case "check-login":
        $userController->checkLogin();
        break;
    case "logout":
        $userController->logout();
        break;
}

?>