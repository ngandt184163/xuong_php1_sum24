<?php
function connectDB() {
    $severname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "xuongthphp1sum24";

    try {
        $conn = new PDO("mysql:host=$severname;dbname=$dbname", $username, $password);

        // set attribute
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "ket noi thanh cong";
        return $conn;
    } catch (PDOException $e) {
        echo "Loi: ".$e->getMessage();
    }
}
?>