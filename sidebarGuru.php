    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Penyelaras</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php if($page=="teacherview.php"){echo "active";} ?>">
        <a class="nav-link" href="teacherview.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Carian
      </div>


      <!-- Nav Item - Charts -->
      <li id="mennu" class="nav-item <?php if($page=="cariRekodLama.php"){echo "active";} ?>">
        <a class="nav-link" href="cariRekodLama.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Rekod Lama</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li id="mennu" class="nav-item <?php if($page==".php"){echo "active";} ?>">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Pelajar</span></a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
