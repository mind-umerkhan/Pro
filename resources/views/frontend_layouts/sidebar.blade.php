<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: black;">
    <!-- Brand Logo -->
    <a href="index3.html" style="text-decoration: none;" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">New Website</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" style="text-decoration: none;" class="d-block">{{ auth()->user()->name ?? 'N/A' }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                @if(auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a href="{{ route('admin.users') }}" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>Users</p>
                    </a>
                </li>
                @else
                @endif


                @if(auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a href="{{ route('company.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Company</p>
                    </a>
                </li>
                @else
                @endif

                @if(auth()->check())
                @if(auth()->user()->role_id == 1)
                <li class="nav-item">
                    <a href="{{ route('job.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Job</p>
                    </a>
                </li>
                @elseif(auth()->user()->role_id == 2)
                <li class="nav-item">
                    <a href="{{ route('company.job.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>Job</p>
                    </a>
                </li>
                @else
                @endif
                @else
                @endif

                <li class="nav-item">
                    {{-- <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Charts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/charts/chartjs.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ChartJS</p>
                            </a>
                        </li> --}}
                <li class="nav-item">
                    <a href="{{ route('logout1') }}" class="nav-link py-3 px-0 px-lg-3 text-white rounded">Log Out</a>
                </li>
            </ul>
            </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
