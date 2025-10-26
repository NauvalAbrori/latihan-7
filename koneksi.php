<?php
$host = "localhost";
$user = "root";   // default user XAMPP
$pass = "";       // default password kosong
$db   = "kelurahan";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
