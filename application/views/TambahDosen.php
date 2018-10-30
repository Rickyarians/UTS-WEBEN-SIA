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
                <small>Tambah Mahasiswa</small>
            </h1>

        </section>
        <br>
        <div class="container-fluid card">
            <form action="<?= site_url('dosen/tambah'); ?>" method="post">
                <label for="">Kode Dosen</label>
                <input type="text" name='kode_nip' class="form-control" value="" required>
                <label for="">Nama Dosen</label>
                <input type="text" name="nama_dosen" class="form-control" value="" required>
                <br>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </form>
        </div>

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