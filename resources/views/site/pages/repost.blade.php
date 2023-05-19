@extends('site.layouts.main')
@section('title', __('Repost page'))


@section('content')
    <section>
        <div class="bg-img">
            <img src="{{Vite::asset('resources/images/icons/background/78.jpg')}}" alt="">
            <div class="bg-layer"></div>
            <div class="container px-3 flex justify-center items-center h-full">
                <p class="size8 w-full  text-center text-white">
                    @if($currentPage !== null)
                        {{ $currentPage['title_'.app()->getLocale()] }}
                    @else

                    @endif
                </p>
            </div>
        </div>

        <div class="container flex justify-between px-3 py-10">

            <div class="menu border-r pr-5">
                <div class="logo mb-8"></div>

                <p class="size3 font-medium text-center my-5">{{__("HISOBOT DAVRINI TANLANG")}}</p>
                <form action="{{ route('repost') }}" method="POST">
                    @csrf
                    <div class="flex items-center gap-2">
                        <select name="year">
                            <option value="2022-01-01 00:00:00">2022</option>
                            <option value="2021-01-01 00:00:00">2021</option>
                            <option value="2020-01-01 00:00:00">2020</option>
                        </select>
                        <button class="button py-2">{{__("TANLASH")}}</button>
                    </div>
                </form>
                @if($allPages)
                    @foreach($allPages as $page)
                        <div class="my-5">
                            <p class="size3">{!! $page['title_'.app()->getLocale()] !!}</p>
                            <a href="{{'/repost/'.$page->slug}}"
                               class="size3 text-link">{{ substr($page->created_at,0,10) }}</a>
                        </div>
                    @endforeach
                @else
                    <div class="my-5">
                        <p>
                            {{__("Pages Not Found")}}
                        </p>
                    </div>
                @endif
            </div>

            <div class="content pl-5">
                @if($currentPage !== null)
                    <div class="size5 mb-2">
                        {{ $currentPage['title_'.app()->getLocale()] }}
                    </div>

                    <div class="flex justify-between w-fit">
                        <div class="flex">
                            <span class="icon-news-user flex items-center"></span>
                            <p class="size2 text-mute ml-1">{{ $currentPage->createdBy->name }}</p>
                        </div>
                        <div class="flex mx-3">
                            <span class="icon-news-calendar flex items-center"></span>
                            <p class="size2 text-mute ml-1">{{ substr($currentPage->created_at, 0, 10) }}</p>
                        </div>
                        <div class="flex">
                            <span class="icon-news-eye flex items-center"></span>
                            <p class="size2 text-mute ml-1">{{ $currentPage->view }}</p>
                        </div>
                    </div>

                    <p class="size4 mt-10">
                        {!! $currentPage['content_'.app()->getLocale()] !!}
                    </p>
                @else
                    <p>
                        {{__("Content Not Selected")}}
                    </p>
                @endif
            </div>

        </div>
    </section>
@endsection
