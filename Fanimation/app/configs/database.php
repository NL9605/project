<?php
$host = "mysql:host=localhost:3306;dbname=fan_store";
$username = "root";
$pass = "HTTN9605dtl";
try {
    $conn = new PDO($host, $username, $pass);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
} catch (PDOException $ex) {
    echo "connection failed: ".$ex->getMessage();
}
?>