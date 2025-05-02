<div class="sidenav-menu">

    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="logo">
        <span class="logo-light">
            <span class="logo-lg"><img src="{{ asset('logo/logo1.jpeg') }}" alt="logo"></span>
            <span class="logo-sm"><img src="{{asset('favicon-v.png')}}" alt="small logo"></span>
        </span>

        <span class="logo-dark">
            <span class="logo-lg"><img src="{{ asset('logo/logo1.jpeg') }}" alt="dark logo"></span>
            <span class="logo-sm"><img src="{{asset('favicon-v.png')}}" alt="small logo"></span>
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
                <a href="{{route('alumni.index')}}" class="side-nav-link">
                    <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                    <span class="menu-text"> Dashboard </span>
                </a>
            </li>
        <div class="clearfix"></div>
    </div>
</div>
