<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ asset('assets/img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">UMKM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/img/user.png') }}" class="img-circle elevation-2" alt="Admin">
            </div>
            <div class="info">
                <a href="#" class="text-white">{{ Auth::user()->name }}</a>
                <p class="text-white">{{ Auth::user()->email }}</p>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-header">DASHBOARD UMKM</li>
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            DASHBOARD UMKM 
                        </p>
                    </a>
                </li>

                <li class="nav-header">UMKM</li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-solid fa-sitemap"></i>
                        <p>
                            Direktory UMKM
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/kategori') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-list"></i>
                                <p>Kategori UMKM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/pembina') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-user"></i>
                                <p>Pembina</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/provinsi') }}" class="nav-link">
                                <i class="nav-icon fas bi bi-geo-alt-fill"></i>
                                <p>Provinsi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/kabkota') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-city"></i>
                                <p>Kabkota</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/umkm') }}" class="nav-link">
                                <i class="nav-icon fas fa-solid fa-store"></i>
                                <p>UMKM</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
