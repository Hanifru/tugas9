<?php
$host = "localhost";
$user = "xirpl1-10"; // default XAMPP
$pass = "0096607724";     // default kosong
$db   = "db_xirpl1-10_1";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
