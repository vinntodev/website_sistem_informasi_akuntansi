<?php $title = 'Tambah User'; ?>
<?php include "template/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tambah User</h1>
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
              <h3 class="card-title">Form Tambah User</h3>
            </div>
            <form action="add_userProses.php" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label for="nama">Nama User</label>
                  <input type="text" name="nama" class="form-control" placeholder="Enter User" required>
                  <!-- value="<?php echo generateRandomString() ?>" -->
                  <!-- readonly berfungsi untuk tidak bisa diedit -->
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter Username" autocomplete="off" required>
                  <!-- menggunakan format huruf : pattern="[A-Za-z]+" title="hanya huruf saja" -->
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select name="jabatan" id="jabatan" class="form-control">
                    <option value="">-- pilih jabatan --</option>
                    <option value="Manager">Manager</option>
                    <option value="Administrasi">Administrasi</option>
                    <option value="Programmer">Programmer</option>
                  </select>
                </div>
                
              </div>
              <div class="card-footer">
                <button type="submit" name="adduser" onclick="return alert('Data berhasil ditambahkan')" class="btn btn-primary">Submit</button>
                <!-- onclick="return alert('Data berhasil di Tambahkan')" -->
                <!-- cara pertama membuat tombol kembali menggunakan button-->
                <button type="button" onclick="location.href='user.php'" class="btn btn-danger" style="float: right;"><i class="fas fa-backspace"></i>Back</button>
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