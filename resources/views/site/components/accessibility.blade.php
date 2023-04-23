<div class="accessibility-window " id="accessibility-window">
    <div class="accessibility-bg" id="accessibility-bg">

    </div>

    <div class="accessibility-modal overflow-auto" id="accessibility-modal">
        <div class="accessibility-header">
            <div class="accessibility-header-title fill-text-color">
                <p>Maxsus imkoniyatlar</p>
            </div>
            <div class="accessibility-header-close" id="accessibility-window-close">
                <span class="icon-close-icon"></span>
                {{--                <img class="block dark:hidden" src="{{Vite::asset('resources/images/icons/icons-light/close-light.svg')}}"--}}
                {{--                     alt="close">--}}
                {{--                <img class="hidden dark:block" src="{{Vite::asset('resources/images/icons/icons-dark/close-dark.svg')}}"--}}
                {{--                     alt="close">--}}
            </div>
        </div>

        <div class="accessibility-body">
            <div style="height: 40px" class="flex justify-between items-center my-4">
                <span class="accessibility-icon icon-light-icon"></span>
                {{--                <img class="block dark:hidden"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-light-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img class="hidden dark:block"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-light-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
                <label class="switch">
                    <input type="checkbox" id="toggleTheme">
                    <span class="slider round"></span>
                </label>
                <span class="accessibility-icon icon-dark-icon"></span>
                {{--                <img class="block dark:hidden"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-dark-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img class="hidden dark:block"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-dark-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
            </div>

            <div style="height: 40px" class="flex justify-between items-center my-4">
                <p id="primaryTheme" class="theme-icon primary text-2xl font-extrabold">A</p>
                <p id="grayscaleTheme" class="theme-icon grayscale text-2xl font-extrabold">A</p>
                <p id="invertTheme" class="theme-icon invert text-2xl font-extrabold">A</p>
                {{--                <img id="primaryTheme" class="block dark:hidden cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/accessability-off-light.svg')}}"--}}
                {{--                     alt="light icon" width="35">--}}
                {{--                <img id="primaryTheme" class="hidden dark:block cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/accessability-off-dark.svg')}}"--}}
                {{--                     alt="dark icon" width="35">--}}
                {{--                <img id="grayscaleTheme" class="block dark:hidden cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/grayscale-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img id="grayscaleTheme" class="hidden dark:block cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/grayscale-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
                {{--                <img id="invertTheme" class="block dark:hidden cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/invert-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img id="invertTheme" class="hidden dark:block cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/invert-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
            </div>

            <div style="height: 40px" class="lang-list flex justify-between items-center my-4">
                <a href="/locale/uz">
                    <p class="lang-icon text-2xl {{(app()->getLocale() === 'uz') ? 'active' : ''}}">UZ</p>
                </a>
                <a href="/locale/ru">
                    <p class="lang-icon text-2xl {{(app()->getLocale() === 'ru') ? 'active': ''}}">RU</p>
                </a>
                <a href="/locale/en">
                    <p class="lang-icon text-2xl {{(app()->getLocale() === 'en') ? 'active': ''}}">EN</p>
                </a>
                {{--                <img class="block dark:hidden cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/UZ-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img class="hidden dark:block cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/UZ-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}

                {{--                <img class="block dark:hidden cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/RU-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img class="hidden dark:block cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/RU-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}

                {{--                <img class="block dark:hidden cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/EN-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img class="hidden dark:block cursor-pointer"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/EN-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
            </div>

            <div style="height: 40px" class="flex justify-between items-center my-4">
                <span class="accessibility-icon icon-mute-icon"></span>
                {{--                <img class="block dark:hidden"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-mute-light.svg')}}" alt="light icon"--}}
                {{--                     width="35">--}}
                {{--                <img class="hidden dark:block"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-mute-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
                <label class="switch">
                    <input type="checkbox" id="mute">
                    <span class="slider round"></span>
                </label>
                <span class="accessibility-icon icon-volume-icon"></span>

                {{--                <img class="block dark:hidden"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-volume-light.svg')}}"--}}
                {{--                     alt="light icon" width="35">--}}
                {{--                <img class="hidden dark:block"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-volume-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
            </div>

            <div style="height: 40px" class="flex justify-between items-center my-4">
                <span class="accessibility-icon icon-font-size-icon"></span>
                {{--                <img class="block dark:hidden"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-font-size-light.svg')}}"--}}
                {{--                     alt="light icon" width="35">--}}
                {{--                <img class="hidden dark:block"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-font-size-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
                <input class="w-3/4" type="range" min="1" max="4" value="1" id="slider"/>
            </div>

            <div style="height: 40px" class="hidden md:flex justify-between items-center my-4">
                <span class="accessibility-icon icon-mobile-icon"></span>
                {{--                <img class="block dark:hidden"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-mobile-light.svg')}}"--}}
                {{--                     alt="light icon" width="35">--}}
                {{--                <img class="hidden dark:block"--}}
                {{--                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-mobile-dark.svg')}}" alt="dark icon"--}}
                {{--                     width="35">--}}
                <button id="mobile">Mobil versiyaga o‘tish</button>
            </div>

        </div>
    </div>
</div>

