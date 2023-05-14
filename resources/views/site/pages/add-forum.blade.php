@extends('site.layouts.main')
@section('title', __('Forum page'))

@section('content')
    <div class="container p-3 mt-10">
        <p class="size6 font-bold">Ask a public question</p>

        <div class="w-full md:w-2/4">
            <div class="flex flex-col mt-4">
                <label class="size2" for="">Title</label>
                <input type="text">
            </div>
            <div class="flex flex-col mt-4">
                <label class="size2" for="">Description</label>
                <textarea></textarea>
            </div>

            <div class="flex flex-col mt-4">
                <label class="size2" for="">Tags</label>
                <select
                    style="background-color: var(--bg-color); border:1px solid var(--border-color-9); border-radius: 5px"
                    id="small" class="block w-full p-2 mb-6 text-sm">
                    <option value="US">Stocks</option>
                    <option value="CA">Investing</option>
                    <option value="FR">Crypto</option>
                    <option value="DE">Other</option>
                </select>
            </div>
            <button class="comment-btn">Publish question</button>
        </div>
    </div>
@endsection
