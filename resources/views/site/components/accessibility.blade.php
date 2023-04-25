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
                <label class="switch">
                    <input type="checkbox" id="toggleTheme">
                    <span class="slider round"></span>
                </label>
                <span class="accessibility-icon icon-dark-icon"></span>
            </div>

            <div style="height: 40px" class="flex justify-between items-center my-4">
                <p id="primaryTheme" class="theme-icon primary text-2xl font-extrabold">A</p>
                <p id="grayscaleTheme" class="theme-icon grayscale text-2xl font-extrabold">A</p>
                <p id="invertTheme" class="theme-icon invert text-2xl font-extrabold">A</p>
            </div>

{{--            <div style="height: 40px" class="lang-list flex justify-between items-center my-4">--}}
{{--                <a href="/locale/uz">--}}
{{--                    <p class="lang-icon text-2xl {{(app()->getLocale() === 'uz') ? 'active' : ''}}">UZ</p>--}}
{{--                </a>--}}
{{--                <a href="/locale/ru">--}}
{{--                    <p class="lang-icon text-2xl {{(app()->getLocale() === 'ru') ? 'active': ''}}">RU</p>--}}
{{--                </a>--}}
{{--                <a href="/locale/en">--}}
{{--                    <p class="lang-icon text-2xl {{(app()->getLocale() === 'en') ? 'active': ''}}">EN</p>--}}
{{--                </a>--}}
{{--            </div>--}}

            <div style="height: 40px" class="flex justify-between items-center my-4">
                <span class="accessibility-icon icon-mute-icon"></span>
                <label class="switch">
                    <input type="checkbox" id="mute">
                    <span class="slider round"></span>
                </label>
                <span class="accessibility-icon icon-volume-icon"></span>
            </div>

            <div style="height: 40px" class="flex justify-between items-center my-4">
                <span class="accessibility-icon icon-font-size-icon"></span>
                <input class="w-3/4" type="range" min="1" max="4" value="1" id="slider"/>
            </div>

            <div style="height: 40px" class="hidden md:flex justify-between items-center my-4">
                <span class="accessibility-icon icon-mobile-icon"></span>
                <button id="mobile">Mobil versiyaga o‘tish</button>
            </div>

        </div>
    </div>
</div>

