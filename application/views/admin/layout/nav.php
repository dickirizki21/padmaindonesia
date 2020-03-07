 <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU UTAMA</li>
        <li>
          <a href="<?php echo base_url('backend/dasbor') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('backend/produk') ?>"><i class="fa fa-circle-o"></i> Tambah</a></li>
            <li><a href="<?php echo base_url('backend/kategori_produk') ?>"><i class="fa fa-circle-o"></i> Tambah Kategori</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Artikel & Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('backend/artikel') ?>"><i class="fa fa-circle-o"></i> Tambah </a></li>
            <li><a href="<?php echo base_url('backend/kategori_artikel') ?>"><i class="fa fa-circle-o"></i> Tambah Kategori</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url('backend/pengguna') ?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('backend/toko_kami') ?>">
            <i class="fa fa-institution"></i> <span>Cabang Toko</span>
          </a>
        </li>
        <li class="header">KONFIGURASI WEBSITE</li>
        <li><a href="<?php echo base_url('backend/konfigurasi') ?>"><i class="fa fa-circle-o text-red"></i> <span>Tentang Perusahaan</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Halaman Produk</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-blue"></i> <span>Logo Website</span></a></li>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">

<?php
//notifikasi
if($this->session->flashdata('sukses'))
  {
    echo '<p class="alert alert-success"><i class="fa fa-check"></i> ';
    echo $this->session->flashdata('sukses');
    echo '</p>';
  }
?>