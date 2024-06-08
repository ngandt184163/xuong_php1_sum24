<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .header {
            width:100%;
            height: 100px;
            background:#ccc;
        }

        .footer {
            width:100%;
            height: 50px;
            background: red;;
        }
    </style>
</head>
<body>
    <div class="header">
        <?php
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
            echo '<button><a href="?action=logout">Dang xuat</a></button>';
        }else {
            echo '<button><a href="?action=register">Dang ky</a></button>';
            echo '<button><a href="?action=login">Dang nhap</a></button>';
        }
        ?>
        
        
        
    </div>

