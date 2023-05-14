@extends('site.layouts.main')
@section('title', __('Forum page'))

@section('content')
    <div class="forum-wrapper mt-10">
        <div class="container">
            <div class="articles hidden md:block">
                <p class="font-bold text-xl">Popular Articles</p>
                @foreach($topForums as $forum)
                    <div class="article-item">
                        <a class="size3" href="/forum/{{ $forum->slug }}">
                            {{ $forum->title_question }}
                            <div class="flex justify-between w-fit">
                                <div class="flex items-center">
                                    <span class="icon-news-user flex items-center"></span>
                                    <p class="size1 text-mute ml-1">{{ $forum->user->name }}</p>
                                </div>
                                <div class="flex items-center mx-3">
                                    <span class="icon-news-calendar flex"></span>
                                    <p class="size1 text-mute ml-1">{{ $forum->created_at }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="forums-list pl-0 md:pl-5">
                @if($forums !== null)
                    @foreach($forums as $forum)
                        <div class="forum-item">
                            <a href="/forum/{{ $forum->slug }}">
                                <div class="avatar"><span>{{ strtoupper($forum->user->name[0]) }}</span></div>
                                <div class="forum-content">
                                    <p class="forum-title">
                                        {{ $forum->title_question }}
                                    </p>
                                    <p class="hidden md:block forum-text">
                                        {{ $forum->description_question }}
                                    </p>
                                    <div class="flex justify-between w-fit">
                                        <div class="flex items-center">
                                            <span class="icon-news-user flex items-center"></span>
                                            <p class="size1 text-mute ml-1">{{ $forum->user->name }}</p>
                                        </div>
                                        <div class="flex items-center mx-3">
                                            <span class="icon-news-calendar flex"></span>
                                            <p class="size1 text-mute ml-1">{{ $forum->created_at }}</p>
                                        </div>
                                        <div class="flex items-center mx-3">
                                            <span class="icon-comment flex"></span>
                                            <p class="size1 text-mute ml-1">{{ count($forum->comments) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <div>
                        <p>🖕</p>
                    </div>
                @endif

                <div class="flex justify-center mt-10">
                    @include('site.components.pagination', ['pageCount' => $pageCount])
                </div>
            </div>
        </div>
    </div>
@endsection

