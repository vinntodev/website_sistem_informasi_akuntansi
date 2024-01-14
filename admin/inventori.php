<?php $title = 'Tabel Inventori'; ?>

<?php 
  include "template/header.php"; 
  ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<?php 
if(isset($_GET['msg'])) {
  $msg = $_GET['msg'];
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  '.$msg.'
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
          <h1 class="m-0 text-bold">Inventori Barang</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
        <div class="col-12">
          <div class="card">
            <div class="card-header bg-gradient-secondary">
              <h3 class="card-title">Tabel Inventori</h3>
            </div>
            <!-- /card.header -->
            <div class="card-body p-0">
              <table class="table table-striped" id="example2">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Stok Barang</th>
                    <th class="text-center" width="25%">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- panggil semua data dari database -->
                  <!-- cara pertama menggunakan perulangan while -->
                  <!-- <?php
                  include_once("rupiah.php");
                  include_once("../koneksi.php");
                  $result = mysqli_query($koneksi, "SELECT * FROM tabel_inventori ORDER BY id_barang DESC");
                  $no = 1;
                  while ($user_data = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $no . "</td>";
                    echo "<td class='text-center'>" . $user_data['kode_barang'] . "</td>";
                    echo "<td>" . $user_data['nama_barang'] . "</td>";
                    echo "<td>" . rupiah1($user_data['harga_beli']) . "</td>";
                    echo "<td>" . rupiah1($user_data['harga_jual']) . "</td>";
                    echo "<td class='text-center'>" . $user_data['stok_barang'] . "</td>";
                    echo "<td>" . "<a href='edit.php?id=$user_data[id_barang]'><span class='badge bg-success'>Edit</span> <a href='delete_proses.php?id=$user_data[id_barang]'><span class='badge bg-danger'>Hapus</span>" . "</a></a></td></tr>";
                    $no++;
                  }
                  ?> -->
                  <!-- cara kedua menggunakan perulangan foreach -->
                  <?php
                  include_once("rupiah.php");
                  include_once("../koneksi.php");
                  $result = mysqli_query($koneksi, "SELECT * FROM tabel_inventori ORDER BY id_barang DESC");
                  ?>
                  <?php $no = 1; ?>
                  <?php foreach ($result as $barang): ?>
                    <tr>
                      <td>
                        <?= $no; ?>
                      </td>
                      <td class="text-center">
                        <?= $barang['kode_barang']; ?>
                      </td>
                      <td>
                        <?= $barang['nama_barang']; ?>
                      </td>
                      <td>
                        <?= rupiah1($barang['harga_beli']); ?>
                      </td>
                      <td>
                        <?= rupiah1($barang['harga_jual']); ?>
                      </td>
                      <td class="text-center">
                        <?= $barang['stok_barang']; ?>
                      </td>
                      <td class="text-center" width="30%">
                        <a href="edit.php?id=<?= $barang['id_barang']; ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Update</a>
                        <a href="delete_proses.php?id=<?= $barang['id_barang']; ?>" id="btn-hapus" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
                        <a href="detail-barang.php" class="btn btn-warning btn-sm"><i class="fas fa-info-circle"></i> Detail</a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <a href="add.php"><button type="button" class="btn btn-block bg-gradient-primary btn-flat col-2 float-right"><i class="fas fa-cart-plus"></i> Add</button></a>
        </div>
        <!-- row (main row) -->
      </div><!-- /container-fluid -->
    <!-- </div> -->
  </section>
  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<?php include "template/footer.php"; ?>