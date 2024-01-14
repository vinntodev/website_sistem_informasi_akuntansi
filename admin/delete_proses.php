<?php
include_once("../koneksi.php");

$idbarang = $_GET['id'];

$result = mysqli_query($koneksi, "DELETE FROM tabel_inventori WHERE id_barang = '$idbarang'");

// header("Location: inventori.php");
if ($idbarang > 0) {
    echo "<script>
            alert('Data berhasil di Hapus');
            document.location.href = 'inventori.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal di hapus');
            document.location.href = 'inventori.php';
        </script>";
}
