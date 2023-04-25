<nav class="navbar">
    <div class="container px-3 md:px-0 flex flex-row justify-content-between items-start">
        <div class="navbar-logo">
            <a href="/">
                <img class="block" src="{{ Vite::asset('resources/logos/logo-big-light.svg') }}" alt="navbar-logo"
                     id="logo">
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
                        <span class="search-line first-line"></span>
                        <span class="search-line second-line"></span>
                    </button>
                </div>
                {{--                <div class="icon-box">--}}
                {{--                    <button class="accessibility" id="accessibility">--}}
                {{--                        <span class="icon-accessability-icon cursor-pointer"></span>--}}
                {{--                        <span class="accessibility-line first-line"></span>--}}
                {{--                        <span class="accessibility-line second-line"></span>--}}
                {{--                    </button>--}}
                {{--                </div>--}}
                <select
                    class="bg-transparent text-gray-900  rounded-lg focus:ring-0 focus:border-gray-400 block w-full p-1 dark:bg-gray-700  dark:placeholder-gray-400 dark:text-white">
                    <option value="uz">O'zbekcha</option>
                    <option value="ru">Русский</option>
                    <option value="en">English</option>
                </select>
                <div class="icon-box">
                    <div style="display: flex;justify-content: center;align-items: center">
                        <a class=" leading-none" href="/login"><span class="icon-user-logo-icon"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

@include('site.components.search')
@include('site.components.accessibility')
@include('site.components.navbar.navbar-full-menu')
