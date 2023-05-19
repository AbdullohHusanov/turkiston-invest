@extends('site.layouts.main')
@section('title', __('Forum page'))

@section('content')
    <div class="container p-3 mt-10">
        <p class="size6 font-bold">{{__('Ask a public question')}}</p>
        <form action="{{ route('add-forum')}}" method="POST">
            @csrf
            <div class="w-full md:w-2/4">
                <div class="flex flex-col mt-4">
                    <label class="size2" for="">{{__('Title')}}</label>
                    <input type="text" name="title">
                </div>
                <div class="flex flex-col mt-4">
                    <label class="size2" for="">{{__('Description')}}</label>
                    <textarea name="description"></textarea>
                </div>

                <div class="flex flex-col mt-4">
                    <label class="size2" for="">{{__('Tags')}}</label>
                    <select
                        style="background-color: var(--bg-color); border:1px solid var(--border-color-9); border-radius: 5px"
                        id="small" class="block w-full p-2 mb-6 text-sm"
                        name="tag">
                        <option value="US">Stocks</option>
                        <option value="CA">Investing</option>
                        <option value="FR">Crypto</option>
                        <option value="DE">Other</option>
                    </select>
                </div>
                <button class="comment-btn">{{__('Publish question')}}</button>
            </div>
        </form>
    </div>
@endsection
