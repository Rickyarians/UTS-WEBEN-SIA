<?php
include('Layout/Header.php');
include('Layout/Menu.php');
?>








    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Mahasiswa
                <small>Tabel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <br>
        <!-- Button trigger modal -->
        <div class="container">
            <a  href="<?= site_url('mahasiswa/tambahmahasiswa'); ?>" class="btn btn-success">
                <i class="fa fa-plus mr-2"></i>  Tambah
            </a>
        </div>

        <br>
        <!-- /.content -->

        <div class="container-fluid">
            <table id="tabel-data" class="table table-striped table-bordered container" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                <?php $urut=1; foreach( $hasil as $mhs) : ?>

                <tr>
                    <td><?= $urut; ?></td>
                    <td><?= $mhs['Nim']; ?></td>
                    <td><?= $mhs['Nama_Mhs'];?></td>
                    <td><?= $mhs['Tgl_Lahir']; ?></td>
                    <td><?= $mhs['Alamat']; ?></td>
                    <td><?= $mhs['Jenis_Kelamin']; ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= site_url('mahasiswa/edit_data/'.$mhs['Nim']) ?>"> Edit</a>
                        <a class="btn btn-danger" href="<?= site_url('mahasiswa/hapus/'.$mhs['Nim']) ?>">Delete</a>
                    </td>

                </tr>

                <?php $urut++; endforeach; ?>



                </tbody>
            </table>
        </div>
        <br>
    </div>
    <!-- /.content-wrapper -->

    <!-- -->


    <!-- -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>


    <div class="control-sidebar-bg"></div>




<!-- ./wrapper -->




<?php
include('Layout/Footer.php');
?>