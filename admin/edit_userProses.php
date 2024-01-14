<?php
include_once("../koneksi.php");
?>

<?php
if (isset($_POST['editUser'])) {
    $iduser = $_POST['iduser'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $jabatan = $_POST['jabatan'];

    $result = mysqli_query($koneksi, "UPDATE `user` SET `nama`='$nama',`username`='$username',`password`='$password',`jabatan`='$jabatan' WHERE `id_user`='$iduser'");
    header("Location: user.php");

}

?>