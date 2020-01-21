<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">
      <div class="sidebar-brand-icon rotate-n-15">
        <img src="" alt="">
      </div>
      <div class="sidebar-brand-text mx-3"> Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
      <a class="nav-link" href="{{ route('travel-package.index') }}">
        <i class="fas fa-fw fa-hotel"></i>
        <span>Paket Data</span></a>
    </li>
    
     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
      <a class="nav-link" href="{{ route('gallery.index') }}">
        <i class="fas fa-fw fa-images"></i>
        <span>Galeri Data</span></a>
    </li>

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
      <a class="nav-link" href="{{ route('transaction.index') }}">
        <i class="fas fa-fw fa-dollar-sign"></i>
        <span>Transaksi</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

   
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>