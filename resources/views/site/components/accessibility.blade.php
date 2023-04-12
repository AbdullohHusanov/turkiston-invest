<div class="accessibility-window" id="accessibility-window">
    <div class="accessibility-bg" id="accessibility-bg">

    </div>

    <div class="accessibility-modal" id="accessibility-modal">
        <div class="accessibility-header">
            <div class="accessibility-header-title fill-text-color">
                <p>Maxsus imkoniyatlar</p>
            </div>
            <div class="accessibility-header-close" id="accessibility-window-close">
                <img class="block dark:hidden" src="{{Vite::asset('resources/images/icons/icons-light/close-light.svg')}}"
                     alt="close">
                <img class="hidden dark:block" src="{{Vite::asset('resources/images/icons/icons-dark/close-dark.svg')}}"
                     alt="close">
            </div>
        </div>

        <div class="accessibility-body">
            <div class="flex justify-between items-center">
                <img class="block dark:hidden"
                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-light-light.svg')}}" alt="light icon"
                     width="35">
                <img class="hidden dark:block"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-light-dark.svg')}}" alt="dark icon"
                     width="35">
                <label class="switch">
                    <input type="checkbox" id="toggleTheme">
                    <span class="slider round"></span>
                </label>
                <img class="block dark:hidden"
                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-dark-light.svg')}}" alt="light icon"
                     width="35">
                <img class="hidden dark:block"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-dark-dark.svg')}}" alt="dark icon"
                     width="35">
            </div>

            <div class="flex justify-between items-center my-7">
                <img id="primaryTheme" class="block dark:hidden cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-light/accessability-off-light.svg')}}"
                     alt="light icon" width="35">
                <img id="primaryTheme" class="hidden dark:block cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/accessability-off-dark.svg')}}"
                     alt="dark icon" width="35">

                <img id="grayscaleTheme" class="block dark:hidden cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-light/grayscale-light.svg')}}" alt="light icon"
                     width="35">
                <img id="grayscaleTheme" class="hidden dark:block cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/grayscale-dark.svg')}}" alt="dark icon"
                     width="35">

                <img id="invertTheme" class="block dark:hidden cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-light/invert-light.svg')}}" alt="light icon"
                     width="35">
                <img id="invertTheme" class="hidden dark:block cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/invert-dark.svg')}}" alt="dark icon"
                     width="35">

            </div>

            <div class="flex justify-between items-center my-7">
                <img class="block dark:hidden cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-light/UZ-light.svg')}}" alt="light icon"
                     width="35">
                <img class="hidden dark:block cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/UZ-dark.svg')}}" alt="dark icon"
                     width="35">

                <img class="block dark:hidden cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-light/RU-light.svg')}}" alt="light icon"
                     width="35">
                <img class="hidden dark:block cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/RU-dark.svg')}}" alt="dark icon"
                     width="35">

                <img class="block dark:hidden cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-light/EN-light.svg')}}" alt="light icon"
                     width="35">
                <img class="hidden dark:block cursor-pointer"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/EN-dark.svg')}}" alt="dark icon"
                     width="35">
            </div>

            <div class="flex justify-between items-center">
                <img class="block dark:hidden"
                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-mute-light.svg')}}" alt="light icon"
                     width="35">
                <img class="hidden dark:block"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-mute-dark.svg')}}" alt="dark icon"
                     width="35">
                <label class="switch">
                    <input type="checkbox" id="mute">
                    <span class="slider round"></span>
                </label>
                <img class="block dark:hidden"
                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-volume-light.svg')}}"
                     alt="light icon" width="35">
                <img class="hidden dark:block"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-volume-dark.svg')}}" alt="dark icon"
                     width="35">
            </div>

            <div class="flex justify-between items-center  my-7">
                <img class="block dark:hidden"
                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-font-size-light.svg')}}"
                     alt="light icon" width="35">
                <img class="hidden dark:block"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-font-size-dark.svg')}}" alt="dark icon"
                     width="35">
                <input class="w-3/4" type="range" min="1" max="4" value="1" id="slider"/>
            </div>

            <div class="flex justify-between items-center my-7">
                <img class="block dark:hidden"
                     src="{{Vite::asset('resources/images/icons/accessability-light/icon-mobile-light.svg')}}"
                     alt="light icon" width="35">
                <img class="hidden dark:block"
                     src="{{Vite::asset('resources/images/icons/accessability-dark/icon-mobile-dark.svg')}}" alt="dark icon"
                     width="35">
                <button id="mobile">Mobil versiyaga o‘tish</button>
            </div>

        </div>
    </div>
</div>

