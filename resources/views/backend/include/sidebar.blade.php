<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin/dashboard') }}" class="brand-link">
        <img src="{{ URL::asset('frontend/img/logo.png') }}" alt="Admin vietTour"
            class="brand-image img-circle elevation-3" style="opacity: .8;">
        <span class="brand-text font-weight-light">VieTour</span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <a href="#" class="nav-link nav-link-logo">
                <div class="image">
                    <img src="{{ asset(auth('admin')->user()->avatar_image_path) }}" class="img-circle elevation-2"
                        alt="User Image">
                </div>
                <div class="info text">
                    <a href="#" class="d-block">{{ auth('admin')->user()->name }}</a>
                </div>
            </a>
        </div> --}}

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline mt-2">
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
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <!-- slider -->
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-collapse-hide-child"
                data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <li class="nav-item">
                        <a href="javascript::void()" class="nav-link nav-link-logo">
                            <div class="image">
                                <img src="{{ asset(auth('admin')->user()->avatar_image_path) }}"
                                    class="img-circle elevation-2" alt="User Image"
                                    onerror="this.onerror=null;this.src='{{ asset('/images/blank-profile-picture-215x215.png') }}'">
                            </div>
                            <div class="info text">
                                {{ auth('admin')->user()->name }}
                            </div>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('/admin/account') }}" class="nav-link">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <p>My Profile</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/change-password') }}" class="nav-link">
                                    <i class="fas fa-sign-in-alt"></i>
                                    <p>Change password</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/logout') }}" class="nav-link">
                                    <i class="fas fa-sign-out-alt"></i>
                                    <p>Logout</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </div>

                <!-- start -->
                <li class="nav-item">
                    <a href="{{ url('/admin/dashboard') }}" id="link-dashboard" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase">Services</li>

                <li class="nav-item">
                    <a href="javascript::void()" id="link-tour" class="nav-link">
                        <i class="nav-icon fas fa-globe-asia"></i>
                        <p>
                            Tour
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.tour.add') }}" id="link-add-tour" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Tour</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tour.index') }}" id="link-tour-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tour Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript::void()" id="link-booking" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            Booking
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.booking.add') }}" id="link-add-booking" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.booking.index') }}" id="link-booking-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.booking.request.index') }}" id="link-booking-request"
                                class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking Request</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.transaction.index') }}" id="link-transaction" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Transaction</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.report.index') }}" id="link-report" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice-dollar"></i>
                        <p>Report</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase">Categories</li>

                <li class="nav-item">
                    <a href="{{ route('admin.tag.index') }}" id="link-tag" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Tag</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.vehicle.index') }}" id="link-vehicle" class="nav-link">
                        <i class="nav-icon fas fa-car-side"></i>
                        <p>Vehicle</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.payment.index') }}" id="link-payment" class="nav-link">
                        <i class="nav-icon fas fa-money-check-alt"></i>
                        <p>Payment</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript::void()" id="link-slider" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>
                            Slider
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.slider.add') }}" id="link-add-slider" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.slider.index') }}" id="link-slider-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript::void()" id="link-article" class="nav-link">
                        <i class="nav-icon fas fa-blog"></i>
                        <p>
                            Blog
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.article.add') }}" id="link-add-article" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Article</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.article.index') }}" id="link-article-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Article Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript::void()" id="link-area-location" class="nav-link">
                        <i class="nav-icon fas fa-map-marked-alt"></i>
                        <p>
                            Area & Location
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.area.index') }}" id="link-area" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Area</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.location.index') }}" id="link-location" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Location</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="javascript::void()" id="link-promotion" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            Promotion
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.promotion.add') }}" id="link-add-promotion" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Promotion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.promotion.index') }}" id="link-promotion-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Promotion Management</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.contact.index') }}" id="link-contact" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>Contact</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.about.index') }}" id="link-about" class="nav-link">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>About Us</p>
                    </a>
                </li>

                <li class="nav-header text-uppercase">Account</li>

                <li class="nav-item">
                    <a href="{{ route('admin.user.index') }}" id="link-user" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.user.add') }}" id="link-add-user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.user.index') }}" id="link-user-manage" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User Management</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.manage.index') }}" id="link-admin" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>
                            Admin
                            {{-- <i class="right fas fa-angle-left"></i> --}}
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.manage.add') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.manage.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Admin Manage</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>

        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
