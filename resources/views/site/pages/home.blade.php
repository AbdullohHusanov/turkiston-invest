@extends('site.layouts.main')

@section('title', __('Home page'))

@section('content')
    <h1>Home content</h1>

@endsection

@section('custom_js')
    <script>
        console.log("Site main page")
        function onClick(e) {
            e.preventDefault();
            grecaptcha.ready(function() {
                grecaptcha.execute('6LeAYGolAAAAALbPJMsvw_6CFV8Ql3GFnTf2vAim', {action: 'submit'}).then(function(token) {
                    // Add your logic to submit to your backend server here.
                    console.log(token)
                });
            });
        }
    </script>
@endsection
