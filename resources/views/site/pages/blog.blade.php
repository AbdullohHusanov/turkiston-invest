@extends('site.layouts.main')
@section('title', __('Blog page'))
<?php $lang = app()->getLocale() ?>

@section('content')
    <section class="mt-10">
        <div class="container px-3 md:px-0">
            <div class="flex justify-between">
                <div class="articles hidden md:block w-1/3">
                    <div class="tab">
                        @foreach($categories as $category)
                            <a href="/blog?category={{strtolower($category['name_'.$lang])}}">
                                <button class="tablinks active" id="defaultOpen"
                                        onclick="openCity(event, '{{ $category['name_'.$lang] }}')">
                                    {{ $category['name_'.$lang] }}</button>
                            </a>
                        @endforeach
                    </div>
                    <p class="font-bold text-xl">Popular Articles</p>
                    @foreach($posts as $post)
                        <div class="article-item">
                            <a href="{{ $post->slug }}">
                                {{ $post['title_' . $lang] }}
                                <div class="flex justify-between w-fit">
                                    <div class="flex items-center">
                                        <span class="icon-news-user flex items-center"></span>
                                        <p class="size2 text-mute ml-1"> {{ $post->createdBy->name }}</p>
                                    </div>
                                    <div class="flex items-center mx-3">
                                        <span class="icon-news-calendar flex"></span>
                                        <p class="size2 text-mute ml-1">{{ $post->created_at }}{{--01-01-2021--}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="posts-list pl-0 md:pl-5">
                    @foreach($posts as $post)
                        <div id="{{ $category['name_'.$lang] }}" class="tab-content">
                            <div class="post-item">
                                <img src="{{ '/storage'.$post->img ?? Vite::asset('resources/images/icons/background/video-back.svg')}}"
                                     alt=""
                                     width="200">
                                <div class="post-content">
                                    <p class="post-title">
                                        {{ $post['title_'.$lang] }}
                                    </p>
                                    <p class="hidden md:block">
                                        {!! $post['description_'.$lang] !!}
                                    </p>
                                    <a href="/blog/{{ $post['slug'] }}"><span>Read more</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex justify-center mt-10">
                        @include('site.components.pagination', ['pagesCount' => $pagesCount])
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('custom_js')
{{--    <script>--}}
{{--        function openCity(evt, cityName) {--}}
{{--            let i, tabcontent, tablinks;--}}
{{--            tabcontent = document.getElementsByClassName("tabcontent");--}}
{{--            for (i = 0; i < tabcontent.length; i++) {--}}
{{--                tabcontent[i].style.display = "none";--}}
{{--            }--}}
{{--            tablinks = document.getElementsByClassName("tablinks");--}}
{{--            for (i = 0; i < tablinks.length; i++) {--}}
{{--                tablinks[i].className = tablinks[i].className.replace(" active", "");--}}
{{--            }--}}
{{--            document.getElementById(cityName).style.display = "block";--}}
{{--            evt.currentTarget.className += " active";--}}
{{--        }--}}

{{--        document.getElementById("defaultOpen").click();--}}
{{--    </script>--}}
@endsection
