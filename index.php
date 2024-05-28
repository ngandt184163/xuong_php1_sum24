<?php
// nhung file controller

// tao bien dieu huong
$action = isset($_GET['action']) ? $_GET['action'] : "home";

// tao doi tuong controller

// dieu huong bang switch case
switch($action) {
    case "home":
        echo "trang chu";
        break;
    case "test":
        echo "test";
        break;
}

?>