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
                    <p class="font-bold text-xl">{{__('Popular Articles')}}</p>
                    @foreach($topPosts as $topPost)
                        <div class="article-item">
                            <a href="blog/{{ $topPost->slug }}">
                                {{ $topPost['title_' . $lang] }}
                                <div class="flex justify-between w-fit">
                                    <div class="flex items-center">
                                        <span class="icon-news-user flex items-center"></span>
                                        <p class="size2 text-mute ml-1"> {{ $topPost->createdBy->name }}</p>
                                    </div>
                                    <div class="flex items-center mx-3">
                                        <span class="icon-news-calendar flex"></span>
                                        <p class="size2 text-mute ml-1">{{ $topPost->created_at }}</p>
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
                                <img src="{{ '/storage/'.$post->img ?? Vite::asset('resources/images/icons/background/video-back.svg')}}"
                                     alt=""
                                     width="200">
                                <div class="post-content">
                                    <p class="post-title">
                                        {{ $post['title_'.$lang] }}
                                    </p>
                                    <p class="hidden md:block">
                                        {!! $post['description_'.$lang] !!}
                                    </p>
                                    <a href="/blog/{{ $post['slug'] }}"><span>{{__('Read more')}}</span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="flex justify-center mt-10">
                        <div class="pagination">
                            <a href="{{$posts->previousPageUrl()}}{{$posts->previousPageUrl() ? '&': '?'}}category={{$selected_category}}">&laquo;</a>
                            @for($i = 1; $i <= $posts->lastPage(); $i++)
                                <a href="?category={{$selected_category}}&page={{ $i }}" class="{{$posts->currentPage() === $i ? 'active': ''}}">{{ $i }}</a>
                            @endfor
                            <a href="{{$posts->nextPageUrl()}}{{$posts->nextPageUrl() ? '&': '?'}}category={{$selected_category}}">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
