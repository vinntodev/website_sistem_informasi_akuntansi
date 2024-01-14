<?php $title = 'Detail Barang'; ?>

<?php
include "template/header.php";
include_once("../koneksi.php");

// mengambil data dari database berdasarkan id
$id = $_GET['id'];
$result = mysqli_query ($koneksi, "SELECT * FROM tabel_inventori WHERE id_barang = $id");

// while ($user_data = mysqli_fetch_array($result)) {
//   $kodebarang = $user_data['kode_barang'];
//   $namabarang = $user_data['nama_barang'];
//   $hargabeli = $user_data['harga_beli'];
//   $hargajual = $user_data['harga_jual'];
//   $stokbarang = $user_data['stok_barang'];
// }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-bold">Detail Barang</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Form Detail Barang</h3>
            </div>
            <form action="#" method="post" name="form_detailBarang">
                <div class="card-body">

                </div>
              <div class="card-footer">
                <button type="button" onclick="location.href='inventori.php'" class="btn btn-dark"><i class="fas fa-backspace"></i> Back</button>
                <!-- cara kedua membuat tombol kembali menggunakan link -->
                <!-- <a href="inventori.php" class="btn btn-danger">Back</a> -->
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "template/footer.php"; ?>