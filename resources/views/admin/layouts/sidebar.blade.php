<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset('logo/logo.png') }}" alt="logo"></span>
            <span class="logo-sm"><img src="{{ asset('logo/logo.png') }}" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset('logo/logo.png') }}" alt="dark logo"></span>
            <span class="logo-sm"><img src="{{ asset('logo/logo.png') }}" alt="small logo"></span>
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button class="button-sm-hover">
        <i class="ri-circle-line align-middle"></i>
    </button>

    <!-- Sidebar Menu Toggle Button -->
    <button class="sidenav-toggle-button">
        <i class="ri-menu-5-line fs-20"></i>
    </button>

    <!-- Full Sidebar Menu Close Button -->
    <button class="button-close-fullsidebar">
        <i class="ti ti-x align-middle"></i>
    </button>

    <div data-simplebar>
        <!--- Sidenav Menu -->
        <ul class="side-nav">
            <li class="side-nav-item">
                <a href="{{route('admin.index')}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('roles.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-user-square-rounded"></i></span>
                    <span class="menu-text">Role</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{ route('alumnis.index') }}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-briefcase"></i></span>
                    <span class="menu-text">Alumnis</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a href="{{route('admin.logout')}}"  class="side-nav-link">
                    <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                    <span class="align-middle">Sign Out</span>
                </a>
            </li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
