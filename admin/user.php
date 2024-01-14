<?php $title = 'Tabel User'; ?>
<?php include "template/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?php
  if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  ' . $msg . '
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  }
  ?>

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-bold">Tabel User</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-gradient-primary">
          <h3 class="card-title">Tabel User</h3>
        </div>
        <!-- /card.header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Jabatan</th>
                <th style="width: 200px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include_once("../koneksi.php");
              $result = mysqli_query($koneksi, "SELECT * FROM user");
              ?>
              <?php $no = 1; ?>
              <?php foreach ($result as $user): ?>
                <tr>
                  <td>
                    <?= $no; ?>
                  </td>
                  <td>
                    <?= $user['nama']; ?>
                  </td>
                  <td>
                    <?= $user['username']; ?>
                  </td>
                  <td>
                    Password Ter-enkripsi
                  </td>
                  <td>
                    <?= $user['jabatan']; ?>
                  </td>
                  <td width="30%" class="text-center">
                    <a href="edit_user.php?id=<?= $user['id_user']; ?>" class="btn btn-success btn-sm"><i
                        class="fas fa-edit"></i>Edit</a>
                    <a href="delete_user.php?id=<?= $user['id_user']; ?>" id="btnHapus" class="btn btn-danger btn-sm"><i
                        class="fas fa-trash-alt"></i>Delete</a>
                    <a href="detail-barang.php" class="btn btn-warning btn-sm"><i
                        class="fas fa-info-circle"></i>Detail</a>
                  </td>
                </tr>
                <?php $no++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <a href="add_user.php"><button type="button"
          class="btn btn-block bg-gradient-primary btn-flat col-2 float-right"><i class="nav-icon fas fa-user"></i>
          Add</button></a>
    </div>
    <!-- row (main row) -->
</div><!-- /container-fluid -->
</div>
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php include "template/footer.php"; ?>