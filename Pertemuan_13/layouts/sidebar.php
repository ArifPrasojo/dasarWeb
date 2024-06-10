<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <style>
    .Btn {
  --black: #000000;
  --ch-black: #141414;
  --eer-black: #1b1b1b;
  --night-rider: #2e2e2e;
  --white: #ffffff;
  --af-white: #f3f3f3;
  --ch-white: #e1e1e1;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: var(--af-white);
}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 17px;
}

.sign svg path {
  fill: var(--night-rider);
}
/* text */
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: var(--night-rider);
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.Btn:hover {
  width: 125px;
  border-radius: 5px;
  transition-duration: .3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.Btn:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.Btn:active {
  transform: translate(2px ,2px);
}
  </style>
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="dist/img/polinema.png" alt="PolinemaLogo" class="brand-image img-circle elevation-3">
    <span class="brand-text font-weight-light">Survey Polinema</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block" style="font-size:20px"><?php echo $_SESSION['username'] ?></a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link <?php echo ($menu == 'index') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="survey.php" class="nav-link <?php echo ($menu == 'survey') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Survey
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="bank_soal.php" class="nav-link <?php echo ($menu == 'bank_soal') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Bank Soal
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="data_user.php" class="nav-link <?php echo ($menu == 'data_user') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Pengguna
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="kategori.php" class="nav-link <?php echo ($menu == 'kategori') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Kategori Soal
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Responden
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="t_responden_dosen.php" class="nav-link <?php echo ($menu == 't_responden_dosen') ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Dosen</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="t_responden_mahasiswa.php" class="nav-link <?php echo ($menu == 't_responden_mahasiswa') ? 'active' : '' ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Mahasiswa</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../layout/boxed.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>TenagaPendidik</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../layout/fixed-sidebar.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Orang Tua</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Alumni</small></p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../layout/fixed-topnav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>industri</p>
              </a>
            </li>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>