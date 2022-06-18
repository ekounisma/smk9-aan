<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src=<?php echo base_url() . "/aset/dist/img/AdminLTELogo.png"; ?> alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">simPT</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->


    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
          <a href="#" class="nav-link">
            <!-- <i class="nav-icon fas fa-user-alt"></i> -->
            <p>
              Profile
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href=<?php echo base_url() . "/mahasiswa"; ?> class="nav-link active">
                <i class="nav-icon fas fa-user-alt"></i>
                <p>Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href=<?php echo base_url() . "/mahasiswa/update"; ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>update</p>
              </a>
            </li>
            <li class="nav-item">
              <a href=<?php echo base_url() . "/dftrmhs"; ?> class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>daftar mahasiswa</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-address-card"></i>
            <p>
              Kartu Rencana Studi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
              Kartu Hasil Setudi
              <span class="badge badge-info right"></span>
            </p>
          </a>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-coins"></i>
            <p>
              Keuangan
            </p>
          </a>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-lock"></i>
            <p>
              Ganti Password
            </p>
          </a>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-running"></i>
            <p>
              Logout
            </p>
          </a>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>