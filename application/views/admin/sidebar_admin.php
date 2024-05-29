<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-grin-stars"></i> <!-- Ganti ikon sesuai keinginan -->
      </div>
      <div class="sidebar-brand-text mx-3">PPPK</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('admin') ?>">
        <i class="fas fa-fw fa-home"></i> <!-- Ganti ikon sesuai keinginan -->
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Master Data -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-folder-open"></i> <!-- Ganti ikon sesuai keinginan -->
        <span>Master Data</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="<?= base_url('karyawan'); ?>">Data Karyawan</a>
          <a class="collapse-item" href="<?= base_url('perangkat'); ?>">Data Perangkat</a>
          <a class="collapse-item" href="cards.html">Data Perangkat Rusak</a>
          <a class="collapse-item" href="cards.html">Data Suku Cadang</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Manajemen Data -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-tools"></i> <!-- Ganti ikon sesuai keinginan -->
        <span>Manajemen Data</span>
      </a>
      <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="utilities-color.html">Perbaikan Komputer</a>
          <a class="collapse-item" href="utilities-border.html">Jadwal Pengecekan</a>
          <a class="collapse-item" href="utilities-animation.html">Perpindahan Lokasi</a>
          <a class="collapse-item" href="utilities-other.html">Pengajuan Pengadaan</a>
          <a class="collapse-item" href="utilities-other.html">Pemusanahan Komputer</a>
        </div>
      </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Laporan -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-chart-bar"></i> <!-- Ganti ikon sesuai keinginan -->
        <span>Laporan</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Laporan Data Master</h6>
          <a class="collapse-item" href="<?php echo base_url('karyawan/print_karyawan'); ?>">Data Karyawan</a>
          <a class="collapse-item" href="<?php echo base_url('perangkat/print_perangkat'); ?>">Data Perangkat</a>
          <a class="collapse-item" href="<?php echo base_url(''); ?>">Data Perangkat Rusak</a>
          <a class="collapse-item" href="cards.html">Data Suku Cadang</a>
          <div class="collapse-divider"></div>
          <h6 class="collapse-header">Laporan Data Manajemen</h6>
          <a class="collapse-item" href="utilities-color.html">Perbaikan Komputer</a>
          <a class="collapse-item" href="utilities-border.html">Jadwal Pengecekan</a>
          <a class="collapse-item" href="utilities-animation.html">Perpindahan Lokasi</a>
          <a class="collapse-item" href="utilities-other.html">Pengajuan Pengadaan</a>
          <a class="collapse-item" href="utilities-other.html">Pemusanahan Komputer</a>
        </div>
      </div>

    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('profile_admin') ?>">
        <i class="fas fa-fw fa-user-circle"></i> <!-- Ganti ikon sesuai keinginan -->
        <span>My Profile</span>
      </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i> <!-- Ganti ikon sesuai keinginan -->
        <span>Logout</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>