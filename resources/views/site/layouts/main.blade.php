<!doctype html>
<html lang="{{ app()->getLocale() }}" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turkiston Invest | @yield('title')</title>

{{--    <script src="https://www.google.com/recaptcha/api.js?render=6LeAYGolAAAAALbPJMsvw_6CFV8Ql3GFnTf2vAim"></script>--}}
    @vite('resources/sass/site/app.scss')
    @yield('custom_styles')
</head>
<body class="main" id="body">
    <div id="app">

    </div>

    @include('site.components.navbar.navbar')

    @yield('content')
    <a href="#" class="to-top">
        <img src="{{Vite::asset('resources/images/icons/scrol-top.svg')}}" alt="">
    </a>
    <img id="btnSpeak" class="cursor-pointer absolute hidden" style="z-index: 99999999;"
         src="{{Vite::asset('resources/images/icons/volume.svg')}}" alt="" width="20">
    @include('site.components.footer')


    @vite('resources/js/site/app.js')

    @yield('custom_js')
</body>
</html>
