<?php
include('Layout/Header.php');
include('Layout/MenuJadwal.php');
?>








    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Mahasiswa
                <small>Edit Mahasiswa</small>
            </h1>

        </section>
        <br>
        <div class="row container-fluid">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">

                            <label for="">Kode Mahasiswa</label>
                            <input type="text" name='' class="form-control" value="<?= $datamhs['0']['Nim']; ?>" disabled>
                            <input type="hidden" name='' class="form-control" value="<?= $datamhs['0']['Nim'];?>">
                            <label for="">Nama Mahasiswa</label>
                            <input type="text" name="" class="form-control" value="<?= $datamhs['0']['Nama_Mhs']; ?>" disabled>
                            <label for="">Tanggal Lahir</label>
                            <input type="date" name="" class="form-control" value="<?= $datamhs['0']['Tgl_Lahir']; ?>" disabled>
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="" id="" cols="30" rows="3" disabled><?= htmlspecialchars($datamhs['0']['Alamat']); ?></textarea>
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control" name="" id="" disabled>
                                <option value="" disabled><?= $datamhs['0']['Jenis_Kelamin']; ?></option>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <br>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->

            <div class="col-sm-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <div class="container-fluid card">
                            <br>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                <i class="fa fa-plus"></i>  Tambah Matakuliah
                            </button>
                            <br>
                            <br>
                            <table id="tabel-data" class="table table-striped table-bordered container" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode & Matakuliah</th>
                                    <th>Hari</th>
                                    <th>Dosen</th>
                                    <th>Ruangan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Kode & Matakuliah</th>
                                    <th>Hari</th>
                                    <th>Dosen</th>
                                    <th>Ruangan</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php $urut=1; foreach ($datajadwal as $jwl) : ?>
                                <tr>
                                    <td><?= $urut;?></td>
                                    <td><?= $jwl->Matkuliah; ?></td>
                                    <td><?= $jwl->Hari; ?></td>
                                    <td><?= $jwl->Dosen; ?></td>
                                    <td><?= $jwl->Ruangan; ?></td>
                                    <td>
                                        <a class="btn btn-danger" href="<?= site_url('perkuliahan/hapusjadwal/'.$jwl->Id_perkuliahan); ?>">Delete</a>

                                    </td>

                                </tr>
                                <?php $urut++; endforeach; ?>


                                </tbody>
                            </table>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->


        </div>





    </div>
    <!-- /.content-wrapper -->

    <!-- -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Tambah Mata Kuliah</h4>
                </div>
                <div class="modal-body">
                    <form action="<?= site_url('perkuliahan/tambah'); ?>" method="post">
                        <input type="hidden" name='kode_mhs' class="form-control" value="<?= $datamhs['0']['Nim']; ?>">
                        <label for="">Pilih Mata Kuliah</label>
                        <select class="form-control" name="pilmk">
                            <?php

                            foreach($datamk as $mkpil)
                            {
                                echo '<option value="'.$mkpil->Kode_MK.'-'.$mkpil->Nama_MK.'">'.$mkpil->Kode_MK.' - '.$mkpil->Nama_MK.'</option>';
                            }
                            ?>
                        </select>
                        <label for="">Pilihan Hari</label>
                        <select class="form-control" name="hari">
                            <option value="Senin - 07:00">Senin - 07:00</option>
                            <option value="Selasa - 07:00">Selasa - 07:00</option>
                            <option value="Rabu - 07:00">Rabu - 07:00</option>
                            <option value="Kamis - 07:00">Kamis - 07:00</option>
                            <option value="Jumat - 07:00">Jumat - 07:00</option>
                            <option value="Sabtu - 07:00">Sabtu - 07:00</option>
                            <option value="Minggu - 07:00">Minggu - 07:00</option>
                        </select>
                        <label for="">Dosen</label>
                        <select class="form-control" name="dosen">
                            <?php

                            foreach($datadosen as $dosenpil)
                            {
                                echo '<option value="'.$dosenpil->Nip.' - '.$dosenpil->Nama_Dosen.'">'.$dosenpil->Nip.'-'.$dosenpil->Nama_Dosen.'</option>';
                            }
                            ?>
                        </select>
                        <label for="">Pilihan Ruangan</label>
                        <select class="form-control" name="ruangan">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                        </select>
                        <br>
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

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