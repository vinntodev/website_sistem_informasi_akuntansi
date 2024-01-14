<?php
include_once("../koneksi.php");
?>

<?php

if (isset($_POST['tambah'])) {
    $kodebarang = $_POST['kodebarang'];
    $namabarang = $_POST['namabarang'];
    $hargabeli = $_POST['hargabeli'];
    $hargajual = $_POST['hargajual'];
    $stokbarang = $_POST['stokbarang'];

    $query = ("INSERT INTO tabel_inventori(kode_barang, nama_barang, harga_beli, harga_jual, stok_barang) VALUE ('$kodebarang','$namabarang','$hargabeli','$hargajual','$stokbarang')");

    $result = mysqli_query($koneksi, $query);
    // header("location: inventori.php");
    if($result) {
        header("location: inventori.php?msg=Data berhasil di tambahkan");
    } else {
        echo "Failed: ". mysqli_error($koneksi);
    }
}