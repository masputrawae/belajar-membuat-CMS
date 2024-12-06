<?php 
// MEMULAI SESI MELACAK LOGIN
session_start();

// JIKA SUDAH LOGIN SEBAGAI ADMIN, ALIHKAN KE HALAMAN DASHBOARD
if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'config/database.php'; // Menghubungkan ke database

    $username = $_POST['username']; 
    $password = $_POST['password'];
}
?>