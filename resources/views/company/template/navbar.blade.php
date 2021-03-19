<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: black; height: fit-content;">
        <div class="navbar-header">
            <a class="navbar-brand" href="">PT. Teknologi Solusindo</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="#"><i class="fa fa-home fa-fw"></i> Beranda</a></li>
        </ul>

        <ul class="nav navbar-right navbar-top-links">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> ts@mail.com <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li class="divider"></li>
                    <li><a href="/"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

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
                    <div class="kotak-logo">
                    <img src="{{asset('umum-asset/assets/img/logo/magangin-logo-horizontal.png')}}" width="200px">
                    </div>
                    
                    </li>
                    <li>
                        <a href="{{route('perusahaan.dashboard')}}"><i class="fa fa-home fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-university fa-fw"></i> Profil<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('perusahaan.profil')}}"><i class="fa fa-eye fa-fw"></i> Lihat Profil Perusahaan</a>
                            </li>
                            <li>
                                <a href="{{route('perusahaan.profil.edit')}}"><i class="fa fa-pencil fa-fw"></i> Edit Profil Perusahaan</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> lowongan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('perusahaan.lowongan')}}"><i class="fa fa-eye fa-fw"></i> Lihat Lowongan Magang</a>
                            </li>
                            <li>
                                <a href="{{route('perusahaan.lowongan.riwayat')}}"><i class="fa fa-archive fa-fw"></i> Riwayat Lowongan Magang</a>
                            </li>
                            <li>
                                <a href="{{route('perusahaan.lowongan.create')}}"><i class="fa fa-plus fa-fw"></i> Buka Lowongan Magang</a>
                            </li>
                            
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>