@extends('site.layouts.main')
@section('title', __('Home page'))

@section('content')
    <div class="home-bg">
        <img src="{{Vite::asset('resources/images/icons/background/Fon.svg')}}" alt="">
        <div class="container p-3 flex items-center">
            <p class="size9 md:w-1/2 text-white leading-9">
                Bugun investitsiya qiling va millionga sayohatingizni boshlang
            </p>
        </div>
    </div>

    <section class="specification">
        <div class="container px-3">
            <div class="section-title w-full md:w-1/2">
                KO’RSATKICHLAR
            </div>
            <div class="specification-list flex-col md:flex-row justify-center sm:justify-between ">

                <div class="specification-item">
                    <div class="icon-specification-1 flex justify-center mb-5"></div>
                    <p class="specification-text">15+</p>
                    <p class="specification-text">yillik tajriba</p>
                </div>

                <div class="specification-item">
                    <div class="icon-specification-2 flex justify-center mb-5"></div>
                    <p class="specification-text">2000+</p>
                    <p class="specification-text">aksionerlar</p>
                </div>

                <div class="specification-item">
                    <div class="icon-specification-3 flex justify-center mb-5"></div>
                    <p class="specification-text">15000+ </p>
                    <p class="specification-text">abligatsiyalar</p>
                </div>

            </div>
        </div>
    </section>

    <section class="team">
        <div class="section-title w-full md:w-1/2">JAMOA</div>
        <div id="app" class="container transition-all duration-500 ease-linear">
            <div class="relative">
                <div
                    class="slides-container h-72 flex snap-x snap-mandatory overflow-hidden overflow-x-auto space-x-2 rounded scroll-smooth before:w-[45vw] before:shrink-0 after:w-[45vw] after:shrink-0 md:before:w-0 md:after:w-0">
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team1.png')}}" alt="">
                            <p class="size4 mt-2">IVETTIK ALEKSAN</p>
                            <p class="size2 text-note">MOLIYA DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team2.png')}}" alt="">
                            <p class="size4 mt-2">ALI CHOKLI</p>
                            <p class="text-note size2">TEXNIK DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team1.png')}}" alt="">
                            <p class="size4 mt-2">IVETTIK ALEKSAN</p>
                            <p class="text-note size2">MOLIYA DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team3.png')}}" alt="">
                            <p class="size4 mt-2">AISHA FERIDE</p>
                            <p class="text-note size2">BOSH DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team1.png')}}" alt="">
                            <p class="size4 mt-2">IVETTIK ALEKSAN</p>
                            <p class="text-note size2">MOLIYA DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team1.png')}}" alt="">
                            <p class="size4 mt-2">IVETTIK ALEKSAN</p>
                            <p class="text-note size2">MOLIYA DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team3.png')}}" alt="">
                            <p class="size4 mt-2">SASHA SUNAME</p>
                            <p class="text-note size2">YURDIK DIREKTOR</p>
                        </div>
                    </div>
                    <div class="slide aspect-[4/6] h-full flex-shrink-0 snap-center rounded overflow-hidden">
                        <div class="w-full h-full object-cover flex flex-col justify-center items-center">
                            <img src="{{Vite::asset('resources/images/icons/team1.png')}}" alt="">
                            <p class="size4 mt-2">IVETTIK ALEKSAN</p>
                            <p class="text-note size2">MOLIYA DIREKTOR</p>
                        </div>
                    </div>
                </div>

                <div class="absolute top-0 -left-4 h-full items-center hidden md:flex">
                    <button role="button" class="prev px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                            aria-label="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="w-5 h-5 group-active:-translate-x-2 transition-all duration-200 ease-linear">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                        </svg>

                    </button>
                </div>
                <div class="absolute top-0 -right-4 h-full items-center hidden md:flex">
                    <button role="button" class="next px-2 py-2 rounded-full bg-neutral-100 text-neutral-900 group"
                            aria-label="next">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor"
                             class="w-5 h-5 group-active:translate-x-2 transition-all duration-200 ease-linear">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

    </section>

    <section class="mission">
        <div class="container px-3">

            <div class="section-title w-full md:w-1/2">MAQSAD</div>

            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <div class="mb-5 mx-auto md:mb-0 md:mx-0">
                    <img class="inline-block dark:hidden" src="{{Vite::asset('resources/logos/logo-big-light.svg')}}"
                         alt="Logo" width="282">
                    <img class="hidden dark:block" src="{{Vite::asset('resources/logos/logo-big-dark.svg')}}" alt="Logo"
                         width="282">
                </div>
                <div class="size3 text-note">
                    Lorem ipsum dolor sit amet consectetur. Sed ac facilisi velit nisi. Mauris cum in integer commodo
                    mattis. Cursus nulla in at ultricies posuere cursus id. At donec volutpat enim morbi donec et a nunc
                    urna. Rhoncus arcu euismod pellentesque mauris. Amet sit egestas eleifend odio. Odio nunc viverra
                    risus eget aliquam in.Cursus nulla in at ultricies posuere cursus id. At donec volutpat enim morbi
                    donec et a nunc urna. Rhoncus arcu euismod pellentesque mauris. Amet sit egestas eleifend odio. Odio
                    nunc viverra risus eget aliquam in.
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container px-3">
            <div class="section-title w-full md:w-1/2">JAMIYAT HAQIDA</div>
            <div class="mx-auto">
                <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt="" width="100%">
            </div>
        </div>
    </section>

    <section class="contactUs  relative z-0 mt-20">
        <div class="container px-3">
            <div class="section-title w-full md:w-1/2">BIZ BILAN BOG'LANISH</div>
        </div>
        <div class="container-fluid" style="height: 500px; position: relative">
            <div class="flex flex-col md:flex-row">
{{--                <div class="w-full h-48  md:h-96" style="width: 100%; height: 500px" id="googleMap"></div>--}}
                <div id="map" style="width: 100%; height: 500px;"></div>
            </div>

            <div class="contactUs-map-contact-bg"></div>
            <div class="contactUs-map-contact-text">
                <div class="container">
                    <div class="text-layer">
                        <p class="size5 font-bold mb-10">Biz bilan bog'lanish</p>
                        <div class="flex items-center my-2">
                            <span class="icon-phone-icon"></span>
                            <p class="ml-2 size2">+99899 999 99 99</p>
                        </div>

                        <div class="flex items-center my-2">
                            <span class="icon-email-icon"></span>
                            <p class="ml-2 size2">turkiston.invest@mail.ru</p>
                        </div>

                        <div class="flex items-center my-2">
                            <span class="icon-map-icon"></span>
                            <p class="ml-2 size2">28 Hawthorn Lane, Braidwood, AUSTRALIA</p>
                        </div>

                        <div class="flex items-center my-2">
                            <span class="icon-map-icon"></span>
                            <p class="ml-2 size2">28 Hawthorn Lane, Braidwood, AUSTRALIA</p>
                        </div>
                        <div class="flex items-center my-2">
                            <span class="icon-map-icon"></span>
                            <p class="ml-2 size2">28 Hawthorn Lane, Braidwood, AUSTRALIA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-3">
            <div class="size6 section-title w-full md:w-1/2">QAYTA ALOQA</div>
            <div class="contact-form md:flex justify-start items-center mb-10">
                <div class="call-back text-note text-center md:text-left size3 w-full md:w-1/3 call-back">
                    <div class="call-back-title">
                        Bizning telefon raqamlarimizga bo’lana olmasangiz noqulayliklar uchun uzur so’raymiz ush formani
                        to’ldirin va jo’nating biz sizga qayta aloqaga chiqamiz. Dam olish kunlari va bayram kunlaridan
                        tashqari mutaxassislarimiz siz bilan tez orada bog’lanishadi !
                    </div>
                </div>

                <div class="w-full md:w-1/2">
                    <div class="flex flex-col my-3">
                        <label class="size2" for="">Ism:</label>
                        <input type="text">
                    </div>

                    <div class="flex flex-col my-3">
                        <label class="size2" for="">Familya:</label>
                        <input type="text">
                    </div>

                    <div class="flex flex-col my-3">
                        <label class="size2" for="">Elektron pochta: </label>
                        <input type="text">
                    </div>

                    <div class="flex flex-col my-3">
                        <label class="size2" for="">Telefon raqam:</label>
                        <input type="text">
                    </div>

                    <div class="flex flex-col my-3">
                        <label class="size2" for="">Mavzu:</label>
                        <input type="text">
                    </div>

                    <button class="w-full button">Yuborish</button>
                </div>

            </div>
        </div>
    </section>

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

    <section class="news">
        <div class="container px-3">
            <div class="section-title w-full md:w-1/2">YANGILIKLAR</div>
            <div class="news-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container px-3">
            <div class="section-title w-full md:w-1/2">ENG KO’P KO’RILGANLARI</div>
            <div class="news-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container px-3">
            <div class="section-title w-full md:w-1/2">BLOG</div>
            <div class="news-list grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5">
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
                <div class="news-item">
                    <img src="{{Vite::asset("resources/images/icons/background/video-back.svg")}}" alt="">
                    <p class="news-title">
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        Endi “Tukiston invest”yangiliklarini turkistoninvest.uz sayti orqali
                        kuzating !
                    </p>
                    <p class="news-text">
                        Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                        consectetur.Lorem ipsum dolor sit amet consectetur.Lorem ipsum dolor sit amet consectetur.
                    </p>
                    <a class="read-more" href="#"><span>Read more</span></a>
                    <div class="flex">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="text-note ml-1 size2">Admin Admin</p>
                        </div>
                        <div class="flex mx-5">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="text-note ml-1 size2">01-01-2021</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="text-note ml-1 size2">1200</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script src="https://api-maps.yandex.ru/2.1/?apikey=21af990e-8fb4-47ce-be00-45508c871884&lang=ru_RU"></script>
    <script>
        ymaps.ready(init)

        function init() {
            let map = new ymaps.Map('map', {
                zoom: 18,
                center: [41.267586786380264, 69.18045942512036],
                controls: [],
            })
        }
    </script>
    <script>
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

{{--    <script>--}}
{{--        var initMap = function () {--}}
{{--            var options = {--}}
{{--                zoom: 18,--}}
{{--                center: {lat: 41.267586786380264, lng: 69.18045942512036}--}}
{{--            }--}}
{{--            var map = new google.maps.Map(document.getElementById('googleMap'), options);--}}
{{--            var marker = new google.maps.Marker({--}}
{{--                position: {lat: 41.26787306286429, lng: 69.18286699979},--}}
{{--                map: map--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}
{{--    <script--}}
{{--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiIRV4Lkcqz-GxYGkFUZ-wHhrJXXdHj4I&callback=initMap"></script>--}}
@endsection
