<div class="search-window" id="search-window">

    <div class="container">

        <div class="search-window-header">

            <div class="ml-auto cursor-pointer inline-block" id="search-window-close">
                <img src="{{Vite::asset('resources/images/close-light.svg')}}" alt="close">
            </div>

        </div>

        <div class="search-form" id="search-form">
            <div class="container">
                <form action="/" method="get" class="w-full md:w-1/2 mx-auto" style="position: relative">
                    <div>
                        <input class="w-full" placeholder="Saytdan qidirish" type="text"
                               name="search"
                               style="border-color: #BABABA !important;border-radius: 5px !important;">
                    </div>
                    <div
                        style="position: absolute; top: 0; right: 0; height: 42px; width: 42px; display: flex; justify-content: center; align-items: center">
                        <button type="submit">
                            <img src="{{Vite::asset("resources/images/search-light.svg")}}" alt="search">
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="result-windows" id="result">

        </div>


    </div>

</div>
