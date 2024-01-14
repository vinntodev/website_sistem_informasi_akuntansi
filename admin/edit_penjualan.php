<?php $title = 'Edit Penjualan'; ?>

<?php
include "template/header.php";
include_once("../koneksi.php");

// mengambil data dari database berdasarkan id

// $id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT tabel_jual.*, tabel_inventori.nama_barang FROM tabel_jual JOIN tabel_inventori ON tabel_jual.kode_barang = tabel_inventori.kode_barang ORDER BY id_jual DESC");


while ($user_data = mysqli_fetch_array($result)) {
    $tanggal_jual = $user_data['tanggal_jual'];
    $kode_jual = $user_data['kode_jual'];
    $nama_barang = $user_data['nama_barang'];
    $harga_barang = $user_data['harga_barang'];
    $jumlah_barang = $user_data['jumlah_barang'];
    $total_jual = $user_data['total_jual'];
    $total_laba = $user_data['total_laba'];
    // var_dump($result);
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">Update Penjualan</h1>
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
                            <h3 class="card-title">Form Update Penjualan</h3>
                        </div>
                        <form action="edit_JualProses.php" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <!-- <input type="hidden" name="id_jual" class="form-control"
                                        value="<?php echo $_GET['id'] ?>"> -->
                                    <label for="kode_jual">No.Invoice</label>
                                    <input type="text" name="kode_jual" class="form-control"
                                        value="<?php echo $kode_jual; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_jual">Tanggal Jual</label>
                                    <input type="text" name="tanggal_jual" class="form-control"
                                        value="<?php echo $tanggal_jual; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="nama_barang">Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control"
                                        value="<?php echo $nama_barang; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_barang">Jumlah Barang</label>
                                    <input type="text" name="jumlah_barang" class="form-control"
                                        value="<?php echo $jumlah_barang; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="harga_barang">Harga Barang</label>
                                    <input type="text" name="harga_barang" class="form-control"
                                        value="<?php echo $harga_barang; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="total_jual">Total Jual</label>
                                    <input type="text" name="total_jual" class="form-control"
                                        value="<?php echo $total_jual; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="total_laba">Total Laba</label>
                                    <input type="text" name="total_laba" class="form-control"
                                        value="<?php echo $total_laba; ?>">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="editPenjualan"
                                    onclick="return alert('Data Penjualan berhasil di Update')"
                                    class="btn btn-primary">Update</button>
                                <!-- cara pertama membuat tombol kembali menggunakan button-->
                                <button type="button" onclick="location.href='report.php'" class="btn btn-danger"
                                    style="float: right;"><i class="fas fa-backspace"></i>Back</button>
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