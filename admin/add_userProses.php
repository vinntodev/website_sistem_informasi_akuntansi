<?php
include_once("../koneksi.php");
?>

<?php

if (isset($_POST['adduser'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    $query = "INSERT INTO user VALUES(null, '$nama', '$username', '$password', '$jabatan')";

    $result = mysqli_query($koneksi, $query);
    // header("location: inventori.php");
    if ($result) {
        header("location: user.php?msg=Data berhasil di tambahkan");
    } else {
        echo "Failed: " . mysqli_error($koneksi);
    }
}
?>