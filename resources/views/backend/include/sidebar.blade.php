<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('backend')}}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('backend')}}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
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
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('notice-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-play"></i>
                        <p>
                            Notice
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('news-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            News
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('member-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                           Member List
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('executive-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-save"></i>
                        <p>
                            Executive Cuncil List
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('gallery-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('photo-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Photo
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{route('category-manage')}}" class="nav-link active">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                           Photo Category
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
