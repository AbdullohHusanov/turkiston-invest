@extends('site.layouts.main')
@section('title', __('Blog page'))

@section('content')
    <section class="mt-10">
        <div class="container px-3">
            <div class="tab">
                <button class="tablinks active" id="defaultOpen" onclick="openCity(event, 'All')">All</button>
                <button class="tablinks" onclick="openCity(event, 'Invest')">Invest</button>
                <button class="tablinks" onclick="openCity(event, 'News')">News</button>
            </div>
            <div class="flex justify-between px-3 py-10">
                <div class="articles hidden md:block w-1/3">
                    <p class="font-bold text-xl">Popular Articles</p>
                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="article-item">
                        <a href="#">
                            A small river named Duden flows by their place and supplies it with the necessary
                            regelialia.
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size2 text-mute ml-1">Admin Admin</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size2 text-mute ml-1">01-01-2021</p>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                <div class="posts-list">
                    <div id="All" class="tabcontent">
                        <div class="post-item">
                            <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt=""
                                 width="200">
                            <div class="post-content">
                                <p class="post-title font-bold text-lg">A small river named Duden flows by their
                                    place
                                    and supplies it with the necessary
                                    regelialia.</p>
                                <p class="hidden md:block">
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                </p>
                                <a href="#"><span>Read more</span></a>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt=""
                                 width="200">
                            <div class="post-content">
                                <p class="post-title font-bold text-lg">A small river named Duden flows by their
                                    place
                                    and supplies it with the necessary
                                    regelialia.</p>
                                <p class="hidden md:block">
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                </p>
                                <a href="#"><span>Read more</span></a>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt=""
                                 width="200">
                            <div class="post-content">
                                <p class="post-title font-bold text-lg">A small river named Duden flows by their
                                    place
                                    and supplies it with the necessary
                                    regelialia.</p>
                                <p class="hidden md:block">
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                </p>
                                <a href="#"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>

                    <div id="Invest" class="tabcontent">
                        <div class="post-item">
                            <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt=""
                                 width="200">
                            <div class="post-content">
                                <p class="post-title font-bold text-lg">A small river named Duden flows by their
                                    place
                                    and supplies it with the necessary
                                    regelialia.</p>
                                <p>
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                </p>
                                <a href="#"><span>Read more</span></a>
                            </div>
                        </div>
                        <div class="post-item">
                            <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt=""
                                 width="200">
                            <div class="post-content">
                                <p class="post-title font-bold text-lg">A small river named Duden flows by their
                                    place
                                    and supplies it with the necessary
                                    regelialia.</p>
                                <p>
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                </p>
                                <a href="#"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>

                    <div id="News" class="tabcontent">
                        <div class="post-item">
                            <img src="{{Vite::asset('resources/images/icons/background/video-back.svg')}}" alt=""
                                 width="200">
                            <div class="post-content">
                                <p class="post-title font-bold text-lg">A small river named Duden flows by their
                                    place
                                    and supplies it with the necessary
                                    regelialia.</p>
                                <p>
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                    A small river named Duden flows by their place and supplies it with the
                                    necessary
                                    regelialia.
                                </p>
                                <a href="#"><span>Read more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
    <script>
        function openCity(evt, cityName) {
            let i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        document.getElementById("defaultOpen").click();
    </script>
@endsection
