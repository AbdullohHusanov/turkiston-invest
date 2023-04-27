<!doctype html>
<html lang="{{ app()->getLocale() }}" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turkiston Invest | @yield('title')</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
{{--    <link rel="manifest" href="/site.webmanifest">--}}
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
{{--    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">--}}
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    {{--    <script src="https://www.google.com/recaptcha/api.js?render=6LeAYGolAAAAALbPJMsvw_6CFV8Ql3GFnTf2vAim"></script>--}}
    @vite('resources/sass/site/app.scss')
    @yield('custom_styles')
</head>
<body class="main light medium" id="body">
<div id="app">

</div>
<div id="loader" class="lds-roller">
    <img class="loader-logo" src="{{Vite::asset('resources/logos/icon-mini.svg')}}">
</div>
@include('site.components.navbar.navbar')
@yield('content')
<a href="#" class="to-top"><span class="icon-arrow-top"></span></a>
<span id="btnSpeak" class="icon-speaker-icon cursor-pointer absolute hidden"></span>
<span class="icon-accessability-icon cursor-pointer" id="accessibility"></span>

@include('site.components.footer')

@vite('resources/js/site/app.js')

@yield('custom_js')

<script>
    window.lightLogoPath = "{{Vite::asset('resources/logos/logo-big-light.svg')}}";
    window.darkLogoPath = "{{Vite::asset('resources/logos/logo-big-dark.svg')}}";
</script>
</body>
</html>
