<?php 
    include_once("../koneksi.php");


    $iduser = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = '$iduser'");

    if ($iduser > 0) {
        echo "<script>
                alert('Data User Berhasil dihapus');
                document.location.href = 'user.php';
            </script>";
    } else {
        echo "<script>
                alert('Data User Gagal dihapus');
                document.location.href = 'user.php';
            </script>";
    }