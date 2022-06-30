<body class="">
  <div class="wrapper ">
    <!-- Sidebar -->
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="<?php echo base_url() ?>assets/img/logo-small.png">
          </div>
        </a>
        <a href="#" class="simple-text logo-normal">
          <sp><?= $user['Username'] ?></sp>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <!-- Menu -->
        <ul class="nav">
          <li <?= $this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>>
            <a href="<?= base_url('Dashboard') ?>">
              <i class="nc-icon nc-app"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li <?= $this->uri->segment(1) == 'DataAset' ? 'class="active"' : '' ?>>
            <a href="<?= base_url('DataAset') ?>">
              <i class="nc-icon nc-bank"></i>
              <span>Data Aset</span>
            </a>
          </li>
        </ul>
        <!-- End Menu -->
      </div>
    </div>
    <!-- End Sidebar -->
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;"><?= $title; ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="nc-icon nc-single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block"><?= $user['Username'] ?></span>
                </p>
              </a>
              <form class="user" method="post" action="<?= base_url('auth/logout') ?>">
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <button type="submit" class="dropdown-item" href="#" data-target="#logoutModal" data-toggle="modal">Log Out</button>
                </div>
              </form>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->