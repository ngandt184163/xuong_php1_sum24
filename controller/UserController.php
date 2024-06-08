<?php

include "./model/UserModel.php";

class UserController {
    public $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function register() {
        //load view dang ky
        include "./view/register.php";

    }

    public function registerStore() {
        if(isset($_POST['register'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // luu vao db
            $this->userModel->register($email, $password);

            header("location:?action=login");
        }
    }

    public function login() {
        // load view
        include "./view/login.php";
    }

    public function checkLogin(){
        // echo "haha";
        // die();
        if(isset($_POST['login'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // luu vao db
            $user = $this->userModel->login($email);
            // showData($user);
            // sau khi co thong ti nguoi dung can check xem co dung password khong
            if($user){
                if($user['password'] == $password) {
                    //luu thong tin vao session
                    $_SESSION['email'] = $email;
                    // chuyen huong ve trang chu
                    header("location:?action=home");
                }else {
                    echo "<script>alert('Mat khau khong dung');</script>";
                }
            }else {
                echo "<script>alert('Nguoi dung khong ton tai');</script>";
            }
            
        }
    }

    public function logout() {
        if(isset($_SESSION['email'])){
            session_destroy();
            // session_unset();
            header("location:?action=login");
        }
    }
}
?>