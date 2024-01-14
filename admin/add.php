<?php $title = 'Tambah Barang'; ?>

<?php include "template/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah Barang</h1>
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
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Data</h3>
            </div>
            <form action="add_proses.php" method="POST" name="form_tambah">
              <div class="card-body">
                <div class="form-group">
                  <label for="kodebarang">Kode Barang</label>
                  <input type="text" name="kodebarang" class="form-control" placeholder="Enter Kode Barang" value="<?php echo generateRandomString() ?>" readonly>
                  <!-- readonly berfungsi untuk tidak bisa diedit -->
                </div>
                <div class="form-group">
                  <label for="namabarang">Nama Barang</label>
                  <input type="text" name="namabarang" class="form-control" placeholder="Enter Nama Barang"
                    autocomplete="off" required>
                  <!-- menggunakan format huruf : pattern="[A-Za-z]+" title="hanya huruf saja" -->
                </div>
                <div class="form-group">
                  <label for="hargabeli">Harga Beli</label>
                  <input type="number" name="hargabeli" class="form-control" placeholder="Enter Harga Beli" required
                    autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="hargajual">Harga Jual</label>
                  <input type="number" name="hargajual" class="form-control" placeholder="Enter Harga Jual" required
                    autocomplete="off">
                </div>
                <div class="form-group">
                  <label for="stokbarang">Stok Barang</label>
                  <input type="number" name="stokbarang" class="form-control" placeholder="Enter Stok Barang" required
                    autocomplete="off">
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="tambah" onclick="return alert('Data berhasil ditambahkan')" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Submit</button>
                <!-- onclick="return alert('Data berhasil di Tambahkan')" -->
                <!-- cara pertama membuat tombol kembali menggunakan button-->
                <button type="button" onclick="location.href='inventori.php'" class="btn btn-danger" style="float: right;"><i class="fas fa-backspace"></i> Back</button>
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