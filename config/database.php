<?php 
$host = "localhost";
$user_name = "build_user";
$user_password = "build_password";
$db_name = "build";

try {
    $connect = new PDO("mysql:host=$host;dbname=$db_name", $user_name, $user_password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi Gagal" . $e->getMessage();
}
?>