<?php $title = 'Edit Barang'; ?>

<?php
include "template/header.php";
include_once("../koneksi.php");

// mengambil data dari database berdasarkan id
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM tabel_inventori WHERE id_barang = $id");

while ($user_data = mysqli_fetch_array($result)) {
  $kodebarang = $user_data['kode_barang'];
  $namabarang = $user_data['nama_barang'];
  $hargabeli = $user_data['harga_beli'];
  $hargajual = $user_data['harga_jual'];
  $stokbarang = $user_data['stok_barang'];
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-bold">Update Barang</h1>
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
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Form Update Barang</h3>
            </div>
            <form action="edit_proses.php" method="post" name="form_update">
              <div class="card-body">
                <div class="form-group">
                  <label for="kodebarang">Kode Barang</label>
                  <input type="text" name="kodebarang" class="form-control" placeholder="Enter Kode Barang"
                    value="<?php echo $kodebarang; ?>" readonly>
                  <!-- readonly berfungsi untuk tidak bisa diedit -->
                </div>
                <div class="form-group">
                  <label for="namabarang">Nama Barang</label>
                  <input type="text" name="namabarang" class="form-control" placeholder="Enter Nama Barang"
                    autocomplete="off" required value="<?php echo $namabarang; ?>">
                </div>
                <div class="form-group">
                  <label for="hargabeli">Harga Beli</label>
                  <input type="text" name="hargabeli" class="form-control" placeholder="Enter Harga Beli" required
                    autocomplete="off" value="<?php echo $hargabeli; ?>">
                </div>
                <div class="form-group">
                  <label for="hargajual">Harga Jual</label>
                  <input type="text" name="hargajual" class="form-control" placeholder="Enter Harga Jual" required
                    autocomplete="off" value="<?php echo $hargajual; ?>">
                </div>
                <div class="form-group">
                  <label for="stokbarang">Stok Barang</label>
                  <input type="text" name="stokbarang" class="form-control" placeholder="Enter Stok Barang" required
                    autocomplete="off" value="<?php echo $stokbarang; ?>">
                  <input type="hidden" name="idbarang" class="form-control" value="<?php echo $_GET['id']; ?>">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="update" onclick="return alert('Data berhasil di Update')"
                  class="btn btn-primary">Update</button>
                <!-- cara pertama membuat tombol kembali menggunakan button-->
                <button type="button" onclick="location.href='inventori.php'" class="btn btn-danger"
                  style="float: right;"><i class="fas fa-backspace"></i> Back</button>
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