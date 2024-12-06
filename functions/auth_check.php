<?php
// SESI DAN PENGECEKAN LOGIN
session_start();

// Pengecekan Apakah Pengguna sudah login dan apakah role nya admin
if ($_SESSION['role'] != "admin") {

    // JIKA BUKAN ADMIN, ALIHKAN KE HALAMAN LOGIN
    header("Location: login.php");
    exit();
}
?>