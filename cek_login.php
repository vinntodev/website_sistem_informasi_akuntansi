<?php
// Aktifkan session php
session_start();
if (isset($_SESSION['pesan'])) {
    header("location: index.php");
    exit;
}

// Koneksi dengan DBMS
include 'koneksi.php';

// tangkap data yang dikirim form
$username = $_POST['username'];
$password = $_POST['password'];


// Cek data yang dikirim dengan yang ada di database
// $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");

// hitung jumlah yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
} else {
    header("location:index.php?pesan=gagal");
}

?>