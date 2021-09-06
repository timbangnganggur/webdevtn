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
        <a href="{{ route('admin.dashboard.index') }}" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
    </div>
    </div>

    <!-- Sidebar Menu -->   
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('admin.dashboard.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Dashboard</p>
            </a>
        </li>
        @if (Auth::guard('admin')->user()->role == 'loker' || Auth::guard('admin')->user()->role == 'superadmin')
        <li class="nav-item">
            <a href="{{ route('admin.info-loker.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Info Loker</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.perusahaan.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Perusahaan</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.daerah.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Daerah</p>
            </a>
        </li>
        @endif
        @if (Auth::guard('admin')->user()->role == 'artikel' || Auth::guard('admin')->user()->role == 'superadmin')
        <li class="nav-item">
            <a href="{{ route('admin.artikel.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Artikel</p>
            </a>
        </li>
        @endif
        @if (Auth::guard('admin')->user()->role == 'superadmin')
        <li class="nav-item">
            <a href="{{ route('admin.role.index') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Role Admin</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.password.edit') }}" class="nav-link">
                <i class="fas fa-briefcase nav-icon"></i>
                <p>Change Password</p>
            </a>
        </li>
        @endif
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-warning nav-link w-100 text-left">
                    <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Log Out</p>
                </button>
            </form>
        </li>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>