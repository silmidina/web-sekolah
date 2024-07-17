<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
        <!-- /input-group -->
      </li>
      <li>
        <a href="<?= base_url('admin') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
      </li>
      <li>
        <a href="<?= base_url('mapel') ?>"><i class="fa fa-book fa-fw"></i> Mata Pelajaran</a>

        <!-- /.nav-second-level -->
      </li>
      <li>
        <a href="<?= base_url('guru') ?>"><i class="fa fa-users fa-fw"></i> Guru</a>
      </li>
      <li>
        <a href="<?= base_url('siswa') ?>"><i class="fa fa-fw fa-graduation-cap"></i> Siswa</a>
      </li>
      <li>
        <a href="#"><i class="fa fa-info-circle fa-fw"></i> Info<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="<?= base_url('pengumuman') ?>"><i class="fa fa-fw fa-bullhorn"></i> Pengumuman</a>
          </li>
          <li>
            <a href="<?= base_url('berita') ?>"><i class="fa fa-fw fa-newspaper-o"></i> Berita</a>
          </li>
          <li>
            <a href="<?= base_url('gallery') ?>"><i class="fa fa-fw fa-picture-o"></i> Gallery</a>
          </li>
          <li>
            <a href="<?= base_url('download') ?>"><i class="fa fa-fw fa-download"></i> Download</a>
          </li>
          <li>
            <a href="icons.html"> Icons</a>
          </li>
          <li>
            <a href="grid.html">Grid</a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a href="#">Second Level Item</a>
          </li>
          <li>
            <a href="#">Third Level <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
              <li>
                <a href="#">Third Level Item</a>
              </li>
            </ul>
            <!-- /.nav-third-level -->
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li class="active">
        <a href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>


        <!-- /.nav-second-level -->
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="page-header"><?= $title2 ?></h2>