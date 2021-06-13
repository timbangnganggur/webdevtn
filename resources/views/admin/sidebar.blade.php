<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="/" class="brand-link">
    <img src="{{ asset('img/Logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Timbangnganggur</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('img/Logo.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Administrator</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <!-- <li class="nav-item has-treeview">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
            Dashboard
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="./index3.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard</p>
            </a>
            </li>
        </ul>
        </li> -->
        <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('info-loker.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Info Loker</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('perusahaan.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Perusahaan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('daerah.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Daerah</p>
            </a>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>