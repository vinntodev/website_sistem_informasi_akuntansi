<?php
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "siab");

// cek koneksi
if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>