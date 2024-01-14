<?php $title = 'Tabel Penjualan'; ?>
<?php error_reporting(0); ?>
<?php include "template/header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-3">
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-3">
                    <div class="small-box bg-info">
                        <div class="inner">

                            <?php
                            include_once("../koneksi.php");
                            $result = mysqli_query($koneksi, "SELECT kode_jual, COUNT(kode_jual) as total_order FROM tabel_jual GROUP BY kode_jual");

                            while ($user_data = mysqli_fetch_array($result)) {
                                $totalorder = $user_data['total_order'];
                            }
                            ?>
                            <h3>
                                <?php echo $totalorder; ?>
                            </h3>
                            <p>Jumlah Order</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-3">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <?php
                            include_once("rupiah.php");
                            $result = mysqli_query($koneksi, "SELECT SUM(total_laba) as total_laba FROM tabel_jual");

                            while ($user_data = mysqli_fetch_array($result)) {
                                $totallaba = $user_data['total_laba'];
                            }
                            ?>

                            <h3>
                                <?php echo rupiah1($totallaba); ?>
                            </h3>
                            <p>Jumlah Laba</p>
                        </div>
                        <div class="icon">
                            <i class="#"></i>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-3">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <?php
                            // $result = mysqli_query($koneksi, "SELECT COUNT(kode_barang) as total_barang FROM tabel_inventori");
                            $result = mysqli_query($koneksi, "SELECT COUNT(jumlah_barang) as jumlah_barang FROM tabel_jual");

                            while ($user_data = mysqli_fetch_array($result)) {
                                $totalbarang = $user_data['jumlah_barang'];
                            }
                            ?>

                            <h3>
                                <?php echo $totalbarang ?>
                            </h3>
                            <p>Jumlah Barang</p>
                        </div>
                        <div class="icon">
                            <i class="#"></i>
                        </div>

                    </div>
                </div>

                <div class="col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <?php
                            $result = mysqli_query($koneksi, "SELECT SUM(stok_barang) as total_stok FROM tabel_inventori");

                            while ($user_data = mysqli_fetch_array($result)) {
                                $totalstok = $user_data['total_stok'];
                            }
                            ?>

                            <h3>
                                <?php echo $totalstok ?>
                            </h3>
                            <p>Jumlah Stok</p>
                        </div>
                        <div class="icon">
                            <i class="#"></i>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <?php
                            include_once("rupiah.php");
                            $result = mysqli_query($koneksi, "SELECT SUM(total_jual) as total_jual FROM tabel_jual");

                            while ($user_data = mysqli_fetch_array($result)) {
                                $totalJual = $user_data['total_jual'];
                            }
                            ?>

                            <h3>
                                <?php echo rupiah1($totalJual); ?>
                            </h3>
                            <p>Total Penjualan</p>
                        </div>
                        <div class="icon">
                            <i class="#"></i>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tabel Penjualan</h3>
                            <a href="edit_penjualan.php" style="float: right;" class="btn btn-secondary btn-sm">Edit</a>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No. Invoice</th>
                                        <th>Tanggal</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah Barang </th>
                                        <th>Harga Barang</th>
                                        <th>Total Jual</th>
                                        <th>Total Laba</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include_once("rupiah.php");
                                    include_once("../koneksi.php");
                                    $result = mysqli_query($koneksi, "SELECT tabel_jual.*, tabel_inventori.nama_barang FROM tabel_jual JOIN tabel_inventori ON tabel_jual.kode_barang = tabel_inventori.kode_barang ORDER BY id_jual DESC");

                                    $no = 1;
                                    while ($user_data = mysqli_fetch_array($result)) {
                                        $dt = new DateTime($user_data['tanggal_jual']);
                                        $date = $dt->format('d/m/Y');
                                        echo "<tr>";
                                        echo "<td>" . $no . "</td>";
                                        echo "<td>" . $user_data['kode_jual'] . "</td>";
                                        echo "<td>" . $date . "</td>";
                                        echo "<td>" . $user_data['nama_barang'] . "</td>";
                                        echo "<td class='text-center';>" . $user_data['jumlah_barang'] . "</td>";
                                        echo "<td>" . rupiah1($user_data['harga_barang']) . "</td>";
                                        echo "<td>" . rupiah1($user_data['total_jual']) . "</td>";
                                        echo "<td>" . rupiah1($user_data['total_laba']) . "</td>";
                                        $no++;
                                    }
                                    ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- row (main row) -->
                </div><!-- /container-fluid -->

            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "template/footer.php"; ?>