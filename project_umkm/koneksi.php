<?php
$host = "localhost";
$user = "root";
$pass = "rizkynolimit";
$db = "project_umkm";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>
