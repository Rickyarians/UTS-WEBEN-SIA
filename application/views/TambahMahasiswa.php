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
            <form action="<?= site_url('mahasiswa/tambah'); ?>" method="post">
                <label for="">Kode Mahasiswa</label>
                <input type="text" name='kode_mhs' class="form-control" value="" required>
                <label for="">Nama Mahasiswa</label>
                <input type="text" name="nama_mhs" class="form-control" value="" required>
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tgl_mhs" class="form-control" value="" required>
                <label for="">Alamat</label>
                <textarea class="form-control" name="alamat_mhs" id="" cols="30" rows="3" required></textarea>
                <label for="">Jenis Kelamin</label>
                <select class="form-control" name="jk" id="" required>
                    <option value="Laki-Laki">Laki - Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
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