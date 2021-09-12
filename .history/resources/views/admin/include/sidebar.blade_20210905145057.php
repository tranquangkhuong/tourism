<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="{{ URL::asset('frontend/img/logo.png') }}" alt="Admin vietTour"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">VieTour</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset(auth('admin')->user()->avatar_image_path) }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Master User</a>
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
            <div class="sidebar-search-results">
                <div class="list-group"><a href="#" class="list-group-item">
                        <div class="search-title"><strong class="text-light"></strong>N<strong
                                class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                class="text-light"></strong></div>
                        <div class="search-path"></div>
                    </a></div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashbroard
                        </p>
                    </a>
                </li>
            </ul>

            <!-- slider -->

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" nav-icon far fa-images"></i>
                        <p>
                            Slider
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Slider</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Area & Location -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-map-marked-alt"></i>
                        <p>
                            Area & Location
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Location</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Location</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- tour order -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-mountain"></i>
                        <p>
                            Tour
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Tour</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Tour</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Promotion -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-ad"></i>
                        <p>
                            Promotion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Promotion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Promotion</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Payment -->

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill-alt"></i>
                        <p>
                            Payment
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../../index.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index2.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Payment</p>
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
