@extends('site.layouts.main')

@section('title', __('Home page'))

@section('content')
    <div class="home-bg">
        <div class="container p-3 flex items-center h-full">
            <p class="size9 md:w-1/2 text-white leading-9">
                Bugun investitsiya qiling va millionga sayohatingizni boshlang
            </p>
        </div>
    </div>
@endsection

@section('custom_js')
{{--    <script>--}}
{{--        function onClick(e) {--}}
{{--            e.preventDefault();--}}
{{--            grecaptcha.ready(function() {--}}
{{--                grecaptcha.execute('6LeAYGolAAAAALbPJMsvw_6CFV8Ql3GFnTf2vAim', {action: 'submit'}).then(function(token) {--}}
{{--                    // Add your logic to submit to your backend server here.--}}
{{--                    console.log(token)--}}
{{--                });--}}
{{--            });--}}
{{--        }--}}
{{--    </script>--}}
@endsection
