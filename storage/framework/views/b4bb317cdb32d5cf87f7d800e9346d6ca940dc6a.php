<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo e(($title == 'Dashboard' ? 'img/logo.png' : $title == 'Detail Berita' || $title == 'Tambah Berita') ? '../../img/logo.png' : '../../../img/logo.png'); ?>"
            alt="RSIA Livasya Logo" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-light">RSIA Livasya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(auth()->user()->name); ?></a>
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
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link <?php echo e(Request::is('dashboard') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard/posts" class="nav-link <?php echo e(Request::is('dashboard/posts*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Posts
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard/kategori"
                        class="nav-link <?php echo e(Request::is('dashboard/kategori*') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            Kategori Berita
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/dashboard/fasilitas"
                        class="nav-link <?php echo e(Request::is('dashboard/fasilitas') ? 'active' : ''); ?>">
                        <i class="nav-icon fas fa-clipboard-list"></i>
                        <p>
                            Fasilitas Unggulan
                        </p>
                    </a>
                </li>

                <li class="nav-item mb-3 <?php echo e(request::is('dashboard/jumbotron') ? 'menu-is-opening menu-open' : ''); ?>">
                    <a href="javascript:void(0)" class="nav-link">
                        <i class="nav-icon fas fa-pager"></i>
                        <p>
                            Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/dashboard/jumbotron"
                                class="nav-link <?php echo e(request::is('dashboard/jumbotron') ? 'active' : ''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jumbotron</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/pelayanan"
                                class="nav-link <?php echo e(request::is('dashboard/pelayanan') ? 'active' : ''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pelayanan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/about"
                                class="nav-link <?php echo e(request::is('dashboard/about') ? 'active' : ''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Identitas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/dokter"
                                class="nav-link <?php echo e(request::is('dashboard/dokter') ? 'active' : ''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Dokter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/dashboard/review"
                                class="nav-link <?php echo e(request::is('dashboard/review') ? 'active' : ''); ?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Review</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <hr class="dropdown-divider w-75 m-auto" style="opacity: .3">

                <li class="nav-item mt-3">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home Page
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<?php /**PATH D:\Laravel\rsia-livasya\resources\views/dashboard/partials/sidebar.blade.php ENDPATH**/ ?>