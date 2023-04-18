<nav class="navbar">
    <div class="container px-3 md:px-0 flex flex-row justify-content-between items-start">
        <div class="navbar-logo">
            <a href="#">
                <img class="block dark:hidden"  src="{{ Vite::asset('resources/logos/logo-big-light.svg') }}" alt="navbar-logo">
                <img class="hidden dark:block"  src="{{ Vite::asset('resources/logos/logo-big-dark.svg') }}" alt="navbar-logo">
            </a>
        </div>
        <div class="hidden md:flex">
          @include('site.components.navbar.navbar-menu')
        </div>



        <div class="navbar-icons ml-auto">
            <div class="end-burger">
                <button class="burger block" id="burger">
                    <span class="burger-line top-line"></span>
                    <span class="burger-line mid-line"></span>
                    <span class="burger-line bottom-line"></span>
                </button>
            </div>

            <div class="right-icons flex">
                <div class="icon-box">
                    <button class="search" id="search">
                        <span class="icon-search cursor-pointer"></span>
{{--                        <img class="search-icon block dark:hidden" src="{{Vite::asset("resources/images/icons/icons-light/search-light.svg")}}" alt="search">--}}
{{--                        <img class="search-icon hidden dark:block" src="{{Vite::asset("resources/images/icons/icons-dark/search-dark.svg")}}" alt="search">--}}
                        <span class="search-line first-line"></span>
                        <span class="search-line second-line"></span>
                    </button>
                </div>
                <div class="icon-box">
                    <button class="accessibility" id="accessibility">
                       <span class="icon-accessability-icon cursor-pointer"></span>
{{--                        <img class="accessibility-icon block dark:hidden" src="{{Vite::asset("resources/images/icons/accessability-light/accessibility-light.svg")}}" alt="accessibility">--}}
{{--                        <img class="accessibility-icon hidden dark:block" src="{{Vite::asset("resources/images/icons/accessability-dark/accessibility-dark.svg")}}" alt="accessibility">--}}
                        <span class="accessibility-line first-line"></span>
                        <span class="accessibility-line second-line"></span>
                    </button>
                </div>
                <div class="icon-box">
                    <div style="display: flex;justify-content: center;align-items: center">
                            <a class=" leading-none" href="/login"><span class="icon-user-logo-icon"></span></a>
{{--                            <img class="icon cursor-pointer block dark:hidden" src="{{Vite::asset("resources/images/icons/icons-light/user-logo-light.svg")}}" alt="user">--}}
{{--                        <img class="icon cursor-pointer hidden dark:block" src="{{Vite::asset("resources/images/icons/icons-dark/user-logo-dark.svg")}}" alt="user">--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@include('site.components.search')
@include('site.components.accessibility')
@include('site.components.navbar.navbar-full-menu')
