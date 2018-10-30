<div class="wrapper">

<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>U</b>TS</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>SIA</b>WEBEN</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

        </div>
    </nav>
</header>




<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu mt-3" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Master Data</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?= site_url('mahasiswa'); ?>"><i class="fa fa-user"></i>Master Mahasiswa</a></li>
                    <li><a href="<?= site_url('matakuliah'); ?>"><i class="fa fa-file"></i>Master Matakuliah</a></li>
                    <li><a href="<?= site_url('dosen'); ?>"> <i class="fa fa-user-secret"></i>Master Dosen</a></li>

                </ul>
            </li>
            <li><a href="<?= site_url('jadwal') ?>"><i class="fa fa-book"></i> <span>Jadwal Kuliah</span></a></li>
            <li class="header">Ricky Ariansyah - 41815110134</li>
            <li class="header">Asep Moh Ridwan - 41815120007</li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>