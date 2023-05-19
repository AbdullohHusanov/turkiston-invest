@extends('site.layouts.main')
@section('title', __('Home page'))

@section('content')
    <div class="home-bg">
        <img src="{{Vite::asset('resources/images/icons/background/78.jpg')}}" alt="">
        <div class="bg-layer"></div>
        <div class="container p-3 flex items-center">
            <p class="size9 md:w-1/2 text-white leading-9">
                {{__('Bugun investitsiya qiling va millionga sayohatingizni boshlang')}}
            </p>
        </div>
    </div>
    @if($contents['news_enable'] === "true")
        <section class="news">
            <div class="container px-3">
                <div class="section-title w-full md:w-1/2">{{__('YANGILIKLAR')}}</div>
                <div class="news-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                    @foreach($news as $post)
                        <div class="news-item">
                            <img
                                src="{{ 'storage/'.$post->img ?? Vite::asset("resources/images/icons/background/video-back.svg")}}"
                                alt="">
                            <p class="news-title">
                                {{ $post['title_' . app()->getLocale()] }}
                            </p>
                            <p class="news-text">
                                {{ $post['description_' . app()->getLocale()] }}
                            </p>
                            <a class="read-more" href="{{ 'blog/'.$post->slug }}"><span>{{__('Read more')}}</span></a>
                            <div class="flex">
                                <div class="flex">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ $post->createdBy->name }}</p>
                                </div>
                                <div class="flex mx-5">
                                    <span class="icon-news-calendar flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ substr($post->created_at, 0, 10) }}</p>
                                </div>
                                <div class="flex">
                                    <span class="icon-news-eye flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ $post->view }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else

    @endif
    @if($contents['most_viewed_enable'] === "true")
        <section class="news">
            <div class="container px-3">
                <div class="section-title w-full md:w-1/2">{{__("ENG KO’P KO’RILGANLARI")}}</div>
                <div class="news-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                    @foreach($mostViewed as $post)
                        <div class="news-item">
                            <img
                                src="{{ 'storage/'.$post->img ?? Vite::asset("resources/images/icons/background/video-back.svg")}}"
                                alt="">
                            <p class="news-title">
                                {{ $post['title_' . app()->getLocale()] }}
                            </p>
                            <p class="news-text">
                                {{ $post['description_' . app()->getLocale()] }}
                            </p>
                            <a class="read-more" href="{{ 'blog/'.$post->slug }}"><span>{{__("Read more")}}</span></a>
                            <div class="flex">
                                <div class="flex">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ $post->createdBy->name }}</p>
                                </div>
                                <div class="flex mx-5">
                                    <span class="icon-news-calendar flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ substr($post->created_at, 0, 10) }}</p>
                                </div>
                                <div class="flex">
                                    <span class="icon-news-eye flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ $post->view }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else

    @endif
    @if($contents['blog_enable'] === "true")
        <section class="news">
            <div class="container px-3">
                <div class="section-title w-full md:w-1/2">{{__('BLOG')}}</div>
                <div class="news-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                    @foreach($blog as $post)
                        <div class="news-item">
                            <img
                                src="{{ 'storage/'.$post->img ?? Vite::asset("resources/images/icons/background/video-back.svg")}}"
                                alt="">
                            <p class="news-title">
                                {{ $post['title_' . app()->getLocale()] }}
                            </p>
                            <p class="news-text">
                                {{ $post['description_' . app()->getLocale()] }}
                            </p>
                            <a class="read-more" href="{{ 'blog/'.$post->slug }}"><span>{{__("Read more")}}</span></a>
                            <div class="flex">
                                <div class="flex">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ $post->createdBy->name }}</p>
                                </div>
                                <div class="flex mx-5">
                                    <span class="icon-news-calendar flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ substr($post->created_at, 0, 10) }}</p>
                                </div>
                                <div class="flex">
                                    <span class="icon-news-eye flex items-center"></span>
                                    <p class="text-note ml-1 size2">{{ $post->view }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else

    @endif
    @if($contents['contact_us_enable'] === "true")
        <section class="contactUs  relative z-0 mt-20">
            <div class="container px-3">
                <div class="section-title w-full md:w-1/2">{{__("BIZ BILAN BOG'LANISH")}}</div>
            </div>
            <div class="container-fluid" style="height: 500px; position: relative">
                <div class="map" id="map"></div>
                <div class="contactUs-map-contact-bg"></div>
                <div class="contactUs-map-btn">
                    <button id="map-btn">{{__("Открыть в Яндекс карту")}}</button>
                </div>
                <div class="contactUs-map-contact-text">
                    <div class="container">
                        <div class="text-layer">
                            <p class="size5 font-bold mb-10">{{__("Biz bilan bog'lanish")}}</p>
                            <div class="flex items-center my-2">
                                <span class="icon-phone-icon"></span>
                                <p class="ml-2 size2">{{ $contents['call_back_phone'] }}</p>
                            </div>

                            <div class="flex items-center my-2">
                                <span class="icon-email-icon"></span>
                                <p class="ml-2 size2">{{ $contents['call_back_email'] }}</p>
                            </div>

                            <div class="flex items-center my-2">
                                <span class="icon-map-icon"></span>
                                <p class="ml-2 size2">{{ $contents['call_back_location'] }}</p>
                            </div>

                            <div class="flex items-center my-2">
                                <span class="icon-map-icon"></span>
                                <p class="ml-2 size2">{{ $contents['call_back_location'] }}</p>
                            </div>
                            <div class="flex items-center my-2">
                                <span class="icon-map-icon"></span>
                                <p class="ml-2 size2">{{ $contents['call_back_location'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if($contents['call_back_enable'] === "true") @endif
            <div class="container px-3">
                <div class="size6 section-title w-full md:w-1/2">{{__("QAYTA ALOQA")}}</div>
                <div class="contact-form md:flex justify-start items-center mb-10">
                    <div class="call-back text-note text-center md:text-left size3 w-full md:w-1/3 call-back">
                        <div class="call-back-title">
                            Bizning telefon raqamlarimizga bo’lana olmasangiz noqulayliklar uchun uzur so’raymiz ush
                            formani
                            to’ldirin va jo’nating biz sizga qayta aloqaga chiqamiz. Dam olish kunlari va bayram
                            kunlaridan
                            tashqari mutaxassislarimiz siz bilan tez orada bog’lanishadi !
                        </div>
                    </div>

                    <div class="w-full md:w-1/2">
                        <div class="flex flex-col my-3">
                            <label class="size2" for="">{{__("Ism")}}:</label>
                            <input type="text">
                        </div>

                        <div class="flex flex-col my-3">
                            <label class="size2" for="">{{__("Familya")}}:</label>
                            <input type="text">
                        </div>

                        <div class="flex flex-col my-3">
                            <label class="size2" for="">{{__("Elektron pochta")}}: </label>
                            <input type="text">
                        </div>

                        <div class="flex flex-col my-3">
                            <label class="size2" for="">{{__("Telefon raqam")}}:</label>
                            <input type="text">
                        </div>

                        <div class="flex flex-col my-3">
                            <label class="size2" for="">{{__("Mavzu")}}:</label>
                            <input type="text">
                        </div>

                        <button class="w-full button">{{__("Yuborish")}}</button>
                    </div>

                </div>
            </div>
        </section>
    @else

    @endif
    @if($contents['mission_enable'] === "true")
        <section class="mission">
            <div class="container px-3">

                <div class="section-title w-full md:w-1/2">{{__("MAQSAD")}}</div>

                <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                    <div class="mb-5 mx-auto md:mb-0 md:mx-0">
                        <img class="inline-block dark:hidden"
                             src="{{ $contents['mission_img_light'] ?? Vite::asset('resources/logos/logo-big-light.svg')}}"
                             alt="Logo" width="282">
                        <img class="hidden dark:block"
                             src="{{ $contents['mission_img_dark'] ?? Vite::asset('resources/logos/logo-big-dark.svg')}}"
                             alt="Logo"
                             width="282">
                    </div>
                    <div class="size3 text-note">
                        {{ $contents['mission_text'] }}
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if($contents['about_us_enable'] === "true")
        <section class="about">
            <div class="container px-3">
                <div class="section-title w-full md:w-1/2">{{__("JAMIYAT HAQIDA")}}</div>
                <div class="mx-auto">
                    <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt="" width="100%">
                </div>
            </div>
        </section>
    @endif
    @if($contents['results_enable'] === "true")
        <section class="specification">
            <div class="container px-3">
                <div class="section-title w-full md:w-1/2">
                    {{__('KO’RSATKICHLAR')}}
                </div>
                <div class="specification-list flex-col md:flex-row justify-center sm:justify-between ">

                    <div class="specification-item">
                        <div class="icon-specification-1 flex justify-center mb-5"></div>
                        <p class="specification-text">{{ $contents['result_year_experience'] }}+</p>
                        <p class="specification-text">{{__("yillik tajriba")}}</p>
                    </div>

                    <div class="specification-item">
                        <div class="icon-specification-2 flex justify-center mb-5"></div>
                        <p class="specification-text">{{ $contents['result_shareholders'] }}+</p>
                        <p class="specification-text">{{__("aksionerlar")}}</p>
                    </div>

                    <div class="specification-item">
                        <div class="icon-specification-3 flex justify-center mb-5"></div>
                        <p class="specification-text">{{ $contents['result_bonds'] }}+ </p>
                        <p class="specification-text">{{__('abligatsiyalar')}}</p>
                    </div>

                </div>
            </div>
        </section>
    @endif
    @if($contents['team_enable'] === "true")
        <section class="team">
            <div class="section-title w-full md:w-1/2">{{__("JAMOA")}}</div>
            <div id="app" class="container transition-all duration-500 ease-linear">
                <div class="relative">
                    <div
                        class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">

                        @foreach($team as $worker)

                            <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                                <div class="object-cover flex flex-col justify-center items-center mr-5">
                                    <img class="w"
                                         src="{{'/storage/'. $worker->icon ?? Vite::asset('resources/images/icons/team1.png')}}"
                                         alt="">
                                    <p class="size4 mt-2">{{ $worker->full_name }}</p>
                                    <p class="size2 text-center text-note">{{ $worker->position }}</p>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    @if(count($team) > 5)
                        <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                            <button role="button"
                                    class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                                    aria-label="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor"
                                     class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 19.5L8.25 12l7.5-7.5"/>
                                </svg>

                            </button>
                        </div>
                        <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                            <button role="button"
                                    class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                                    aria-label="next">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5"
                                     stroke="currentColor"
                                     class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                                </svg>
                            </button>
                        </div>
                    @else

                    @endif
                </div>
            </div>
        </section>
    @else
    @endif

    <section class="heroes mt-20">
        <div class="container px-3">
            <div class="grid grid-cols-1 md:grid-cols-2 text-center md:text-left ">
                <div class="hero mx-auto">
                    <p class="size7 font-bold">
                        We’re a global stakeholder relations and consultancy.
                    </p>
                    <p class="text-gray my-5 size3">
                        Comprehensive solutions with the ability to get a potential income higher than on the
                        deposit.
                        Save time and effort in achieving financial goals. Your investments are managed by
                        professionals
                    </p>

                    <div>
                        <p class="hero-item icon-Union"> Praesent feugiat sem</p>
                        <p class="hero-item icon-Union"> A wonderful serenity</p>
                        <p class="hero-item icon-Union"> Premium services for you</p>
                        <p class="hero-item icon-Union"> Set a link back to photo</p>
                    </div>

                    <p class="size3 mt-5 text-gray">
                        Call to ask any question 540-325-1523
                    </p>
                </div>

                <div class="hero mx-auto md:mr-0">
                    <img src="{{Vite::asset("resources/images/icons/background/hero1.svg")}}" alt="Hero">
                    <p class="size5 font-bold text-center">24 Years of Experience</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 text-center md:text-left  mt-28">

                <div class="hidden md:block hero">
                    <img src="{{Vite::asset("resources/images/icons/background/hero2.svg")}}" alt="Hero">
                </div>

                <div class="hero  mx-auto md:mx-0">
                    <p class="size7 font-bold">
                        Make a free consultation with our expert team to solve your prolems.
                    </p>
                    <p class="text-gray my-5 size3">
                        For any inquiries relating to my Retail and Leadership Programs
                    </p>
                </div>

                <div class="block md:hidden hero mx-auto">
                    <img src="{{Vite::asset("resources/images/icons/background/hero2.svg")}}" alt="Hero">
                </div>

            </div>
        </div>
    </section>

@endsection

@section('custom_js')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=21af990e-8fb4-47ce-be00-45508c871884&lang=ru_RU"></script>
    <script>
        ymaps.ready(init)
        let yandexURL = 'https://yandex.uz/maps/10335/tashkent/stops/1543141649/?ll=69.182982%2C41.267897&tab=overview&z=19.72'

        function init() {
            let map = new ymaps.Map('map', {
                zoom: 18,
                center: [41.267586786380264, 69.18045942512036],
                controls: [],
            })
        }

        const mapBtn = document.getElementById('map-btn');
        const map = document.getElementById('map');

        mapBtn.addEventListener('click', (e) => {
            window.open(yandexURL, '_blank')
        })

        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('6LeAYGolAAAAALbPJMsvw_6CFV8Ql3GFnTf2vAim', {action: 'submit'}).then(function (token) {
                    // Add your logic to submit to your backend server here.
                    console.log(token)
                });
            });
        }

        const slidesContainer = document.querySelector(".slides-container");
        const slideWidth = slidesContainer.querySelector(".slide").clientWidth;
        const prevButton = document.querySelector(".prev");
        const nextButton = document.querySelector(".next");
        nextButton.addEventListener("click", () => {
            slidesContainer.scrollLeft += slideWidth;
        });
        prevButton.addEventListener("click", () => {
            slidesContainer.scrollLeft -= slideWidth;
        });

    </script>
@endsection
