<?php
$getUser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<!-- Sidebar -->
<!--untuk membuat menu navigasi yang terletak pada bagian header website-->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<!--untuk membuat menu pemilik website-->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15"> <!--untuk menambahkan ikon pada sidebar-->
        <i class="fas fa-laugh-wink"></i> <!--merupakan ikon yang akan ditampilkan-->
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div> <!--untuk memberikan nama-->
</a>

<!-- Divider -->
<!--digunakan untuk memisahkan konten atau paragraf satu dengan lainnya berdasarkan pengelompokkan tema-->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item"> 
    <a class="nav-link" href="index.html"> <!--wadah dari link yang akan men direct kita ke halaman lain-->
        <i class="fas fa-fw fa-tachometer-alt"></i> <!--merupakan ikon yang akan ditampilkan-->
        <span>Dashboard</span></a> <!--untuk memberikan judul pada menu-->
</li>

<!-- Divider -->
<!--digunakan untuk memisahkan konten atau paragraf satu dengan lainnya berdasarkan pengelompokkan tema-->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading"> <!--membuat sebuah judul untuk beberapa menu pada bagian atas-->
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<!-- Nav Item - Pages Collapse Menu -->
<?php 
      if($getGrup == 1){
      echo '
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" disabled="true">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Master Data:</h6>
            <a class="collapse-item" href="'.base_url('Mahasiswa/user').'">Master User</a>
            <a class="collapse-item" href="'.base_url('Grup').'">Master Grup</a>
          </div>
        </div>
      </li>
      ';}?>


<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <!--untuk membuat tabel yang berisi menu yang akan men direct kita ke halaman lain-->
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i> <!--merupakan ikon yang akan ditampilkan-->
        <span>Utilities</span> <!--untuk memberikan judul pada menu-->
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
        data-parent="#accordionSidebar"> <!--untuk membuat tabel yang berisi menu-->
        <div class="bg-white py-2 collapse-inner rounded"> <!--untuk memberi warna pada tabel berisi menu-->
            <h6 class="collapse-header">Custom Utilities:</h6> <!--membuat sebuah judul untuk beberapa menu-->
            <!--wadah dari link yang akan men direct kita ke halaman lain-->
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
        </div>
    </div>
</li>

<!-- Divider -->
<!--digunakan untuk memisahkan konten atau paragraf satu dengan lainnya berdasarkan pengelompokkan tema-->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading"> <!--membuat sebuah judul untuk beberapa menu pada bagian atas-->
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item active">
    <!--untuk membuat tabel yang berisi menu yang akan men direct kita ke halaman lain-->
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i> <!--merupakan ikon yang akan ditampilkan-->
        <span>Pages</span> <!--untuk memberikan judul pada menu-->
    </a>
    <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
        data-parent="#accordionSidebar"> <!--untuk membuat tabel yang berisi menu-->
        <div class="bg-white py-2 collapse-inner rounded"> <!--untuk memberi warna pada tabel berisi menu-->
            <h6 class="collapse-header">Login Screens:</h6> <!--membuat sebuah judul untuk beberapa menu-->
            <!--wadah dari link yang akan men direct kita ke halaman lain-->
            <a class="collapse-item" href="login.php">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6> <!--membuat sebuah judul untuk beberapa menu-->
            <!--wadah dari link yang akan men direct kita ke halaman lain-->
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="charts.html"> <!--wadah dari link yang akan men direct kita ke halaman lain-->
        <i class="fas fa-fw fa-chart-area"></i> <!--merupakan ikon yang akan ditampilkan-->
        <span>Charts</span></a> <!--untuk memberikan judul pada menu-->
</li>

<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="tables.html"> <!--wadah dari link yang akan men direct kita ke halaman lain-->
        <i class="fas fa-fw fa-table"></i> <!--merupakan ikon yang akan ditampilkan-->
        <span>Tables</span></a> <!--untuk memberikan judul pada menu-->
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline"> <!--untuk memposisikan button berada ditengah-->
    <button class="rounded-circle border-0" id="sidebarToggle"></button> <!--digunakan untuk membuat button-->
</div>

</ul>
<!-- End of Sidebar -->