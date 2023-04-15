<div class="search-window" id="search-window">

    <div class="container">

        <div class="search-window-header">

            <div class="ml-auto cursor-pointer inline-block" id="search-window-close">
                <span class="icon-close-icon"></span>
{{--                <img class="inline-block dark:hidden" src="{{Vite::asset('resources/images/icons/icons-light/close-light.svg')}}" alt="close">--}}
{{--                <img class="hidden dark:block" src="{{Vite::asset('resources/images/icons/icons-dark/close-dark.svg')}}" alt="close">--}}
            </div>

        </div>

        <div class="search-form" id="search-form">
            <div class="container">
                <form action="/" method="get" class="w-full md:w-1/2 mx-auto" style="position: relative">
                    <div>
                        <input class="w-full dark:placeholder-white" placeholder="Saytdan qidirish" type="text"
                               name="search"
                               style="border-color: #BABABA;border-radius: 5px;background-color: var(--bg-color); color: var(--text-color)">
                    </div>
                    <div
                        style="position: absolute; top: 0; right: 0; height: 42px; width: 42px; display: flex; justify-content: center; align-items: center">
                        <button type="submit">
                            <span class="icon-search"></span>
{{--                            <img class="inline-block dark:hidden" src="{{Vite::asset("resources/images/icons/icons-light/search-light.svg")}}" alt="search">--}}
{{--                            <img class="hidden dark:block" src="{{Vite::asset("resources/images/icons/icons-dark/search-dark.svg")}}" alt="search">--}}
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="result-windows" id="result">

        </div>


    </div>

</div>
