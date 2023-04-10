<nav class="navbar">
    <div class="container flex flex-row justify-content-between items-start">
        <div class="navbar-logo">
            <a href="#">
                <img src="{{ Vite::asset('resources/logos/logo-light.svg') }}" alt="navbar-logo">
            </a>
        </div>

        <div class="navbar-menu">
            <ul class="navbar-menu-ul">
                <li class="navbar-menu-li">
                    <a class="navbar-menu-link size1" href="#">
                        Jamiyat haqida
                    </a>
                </li>

                <li class="navbar-menu-li">
                    <a class="navbar-menu-link size1" href="#">
                        Biz bila aloqa
                    </a>

                    <div class="submenu">
                        <div class="container">
                            <div class="submenu-menu">
                                <div class="submenu-row">
                                    <div class="submenu-col">
                                        <ul class="submenu-ul">
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu-col">
                                        <ul class="submenu-ul">
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu-col">
                                        <ul class="submenu-ul">
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="submenu-col">
                                        <ul class="submenu-ul">
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                            <li class="submenu-li">
                                                <a class="submenu-link" href="">test</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="navbar-menu-li">
                    <a class="navbar-menu-link size1" href="#">
                        Kunlik teg'ilishlar rejasi
                    </a>

                </li>
            </ul>
        </div>

        <div class="end-burger">
            <button class="burger block " id="burger">
                <span class="burger-line top-line"></span>
                <span class="burger-line mid-line"></span>
                <span class="burger-line bottom-line"></span>
            </button>
        </div>

        <div class="navbar-icons ml-auto">
            <div class="right-icons flex">
                <div class="icon-box">
                    <button class="search" id="search">
                        <img class="search-icon" src="{{Vite::asset("resources/images/search-light.svg")}}" alt="search">
                        <span class="search-line first-line"></span>
                        <span class="search-line second-line"></span>
                    </button>
                </div>
                <div class="icon-box">
                    <a href="/login">
                        <img class="icon cursor-pointer" src="{{Vite::asset("resources/images/user-logo-light.svg")}}" alt="user">
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

@include('site.components.search')
