<?php $title = 'Edit User'; ?>

<?php
include "template/header.php";
include_once("../koneksi.php");

// mengambil data dari database berdasarkan id
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user = $id");

while ($user_data = mysqli_fetch_array($result)) {
  $nama = $user_data['nama'];
  $username = $user_data['username'];
  $password = $user_data['password'];
  $jabatan = $user_data['jabatan'];
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-bold">Update User</h1>
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
              <h3 class="card-title">Form Update User</h3>
            </div>
            <form action="edit_userProses.php" method="post">
              <div class="card-body">
                <div class="form-group">
                <input type="hidden" name="iduser" class="form-control" value="<?php echo $_GET['id']; ?>">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Enter Username"
                    autocomplete="off" required value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password"
                    autocomplete="off" required value="<?php echo $password ?>">
                </div>
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <select name="jabatan" id="jabatan" class="form-control">
                    <option value="Manager" <?php if ($jabatan === "Manager")
                      echo "selected"; ?>>Manager</option>
                    <option value="Administrasi" <?php if ($jabatan === "Administrasi")
                      echo "selected"; ?>>Administrasi
                    </option>
                    <option value="Programmer" <?php if ($jabatan === "Programmer")
                      echo "selected"; ?>>Programmer
                    </option>
                  </select>
                </div>
              </div>
                <div class="card-footer">
                  <button type="submit" name="editUser" onclick="return alert('Data User berhasil di Update')"
                    class="btn btn-primary">Update</button>
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