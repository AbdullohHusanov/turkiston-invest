@extends('site.layouts.main')
@section('title', __('Forum page'))

@section('content')
    <div class="container mt-10">
        <p class="size5 font-bold">{{ $forum->title_question }}</p>
        <br>
        <p class="size4 ml-3">{{ $forum->description_question }}</p>
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
                <span class="icon-news-eye flex"></span>
                <p class="size1 text-mute ml-1">{{ $forum->view }}</p>
            </div>
        </div>

        <div class="comments">
            <div class="flex justify-between">
                <p>{{ count($forum->comments) }} ответы</p>
            </div>
        </div>

        @if(auth()->check())
            <form action="{{ route('forum-comment') }}" method="POST">
                @csrf
                <div class="flex mt-5">
                    <div class="avatar"><span>{{ strtoupper(auth()->user()->name[0]) }}</span></div>
                    <textarea class="w-full" name="message" placeholder="Присоединиться к обсуждению..."></textarea>
                </div>
                <div class="flex justify-between float-right mt-3">
                    <button type="submit" class="comment-btn">Comment</button>
                </div>
            </form>
        @else
            <div style="text-align: center; padding: 15px;">
                <h3>
                    Iltimos avval <a href="/register">ro'yxatdan o'ting</a> yoki <a href="/login">kiring</a>

                </h3>

            </div>
            <hr style="border-bottom: 2px solid #DCBF85">
        @endif


        <div class="comments-list">
            @if(count($forum->comments))
                @foreach($forum->comments as $comment)
                    @if($comment->parent_id === null)
                        <div class="comment-item">
                            <div class="avatar"><span>{{ strtoupper($comment->user->name[0]) }}</span></div>
                            <div class="comment-info">
                                <p class="comment-name">{{ $comment->user->name }}</p>
                                <p class="size1">{{ substr($comment->created_at, 0,10) }}</p>
                                <p>{{ $comment->message }}</p>

                                <div class="flex">
                                    <form action="{{ route('forum-comment-like') }}" method="POST">
                                        @csrf
                                        <span class="voting">
                                         <input class="hidden" name="_id" value="{{ $comment->id }}">
                                        <svg class="like-button" width="18" height="18" viewBox="0 0 1792 1792"
                                             xmlns="http://www.w3.org/2000/svg"><path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                                        <p>{{ $comment->like ?? 20 }}</p>
                                    </span>
                                    </form>
                                    <form action="{{ route('forum-comment-dislike') }}" method="POST">
                                        @csrf
                                        <span class="voting">
                                        <svg class="dislike-button" width="18" height="18" viewBox="0 0 1792 1792"
                                             xmlns="http://www.w3.org/2000/svg"><path
                                                d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                                        <p>{{ $comment->dislike ?? 18 }}</p>
                                    </span>
                                    </form>
                                    {{--                                <p>Ответить</p>--}}

                                    @if(auth()->check())
                                        <form action="{{ route('forum-comment-to-comment') }}" method="POST">
                                            @csrf
                                            <div class="flex mt-5 ml-3 ">
                                                <input class="hidden" name="_id" value="{{$comment->id}}">
                                                <textarea class="w-1/2" name="message"
                                                          placeholder="Присоединиться к обсуждению..."></textarea>
                                                <button type="submit" class="comment-btn">Ответить</button>
                                            </div>
                                        </form>
                                    @else
                                        <div style="text-align: center; padding: 15px;">
                                            <h5>
                                                Iltimos avval <a href="/register">ro'yxatdan o'ting</a> yoki <a
                                                    href="/login">kiring</a>

                                            </h5>

                                        </div>
                                        <hr style="border-bottom: 2px solid #DCBF85">
                                    @endif

                                    @if(count($comment->children()))
                                        @foreach($comment->children() as $child)
                                            <div class="comment-item">
                                                <div class="avatar"><span>{{ strtoupper($child->user->name[0]) }}</span>
                                                </div>
                                                <div class="comment-info">
                                                    <p class="comment-name">{{ $child->user->name }}</p>
                                                    <p class="size1">{{ substr($child->created_at, 0,10) }}</p>
                                                    <p>{{ $child->message }}</p>

                                                    <div class="flex">
                                                <span class="voting">
                                                    <svg class="like-button" width="18" height="18"
                                                         viewBox="0 0 1792 1792"
                                                         xmlns="http://www.w3.org/2000/svg"><path
                                                            d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                                                    <p>{{ $child->like ?? 20 }}</p>
                                                </span>
                                                        <span class="voting">
                                                    <svg class="dislike-button" width="18" height="18"
                                                         viewBox="0 0 1792 1792"
                                                         xmlns="http://www.w3.org/2000/svg"><path
                                                            d="M320 1344q0-26-19-45t-45-19q-27 0-45.5 19t-18.5 45q0 27 18.5 45.5t45.5 18.5q26 0 45-18.5t19-45.5zm160-512v640q0 26-19 45t-45 19h-288q-26 0-45-19t-19-45v-640q0-26 19-45t45-19h288q26 0 45 19t19 45zm1184 0q0 86-55 149 15 44 15 76 3 76-43 137 17 56 0 117-15 57-54 94 9 112-49 181-64 76-197 78h-129q-66 0-144-15.5t-121.5-29-120.5-39.5q-123-43-158-44-26-1-45-19.5t-19-44.5v-641q0-25 18-43.5t43-20.5q24-2 76-59t101-121q68-87 101-120 18-18 31-48t17.5-48.5 13.5-60.5q7-39 12.5-61t19.5-52 34-50q19-19 45-19 46 0 82.5 10.5t60 26 40 40.5 24 45 12 50 5 45 .5 39q0 38-9.5 76t-19 60-27.5 56q-3 6-10 18t-11 22-8 24h277q78 0 135 57t57 135z"/></svg>
                                                    <p>{{ $child->dislike ?? 18 }}</p>
                                                </span>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    @else

                                    @endif

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @else
                <p>
                    Comment Not Found
                </p>
            @endif
            <div class="flex justify-center mt-10">
                @include('site.components.pagination')
            </div>
        </div>
    </div>
@endsection
