<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">--}}

</head>
<body class="app">
{{--    <div id='loader'>--}}
{{--        <div class="spinner"></div>--}}
{{--    </div>--}}

    <div id="app">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
{{--    <script src="{{ asset('js/loader.js') }}"></script>--}}
    @yield('javascript')
</body>
</html>
