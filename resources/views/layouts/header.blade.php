<header class="header v__5  header__sticky">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="{{route('index')}}" class="header__logo--link">
                            <img src="{{ asset('logo/logo1.jpeg') }}" alt="unipix">
                        </a>
                    </div>
                    <div class="header__menu">
                        <div class="navigation">
                            <nav class="navigation__menu">
                                <ul>
                                    <li class="navigation__menu--item ">
                                        <a href="{{route('index')}}" class="navigation__menu--item__link">Home</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{route('about')}}" class="navigation__menu--item__link">About us</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{route('contact')}}" class="navigation__menu--item__link">Contact</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{route('alumni.register')}}" class="navigation__menu--item__link">Register</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                            <a href="{{route('login')}}" class="rts-theme-btn btn-arrow d-xl-block d-lg-block d-none">Login
                                <span><i class="fa-regular fa-arrow-right"></i></span>
                            </a>
                            <div id="menu-btn" class="menu__trigger d-xl-none d-lg-none d-block">
                                <img src="assets/images/icon/menu__bar-2.svg" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
