<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- JQuery -->
    <link rel="stylesheet" href="{{ url('/js/jquery-ui-1.13.2/jquery-ui.min.css') }}">
    <script src="{{ url('/js/jquery-ui-1.13.2/external/jquery/jquery.js') }}"></script>
    <script src="{{ url('/js/jquery-ui-1.13.2/jquery-ui.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.cdnfonts.com/css/qardoos-personal-use" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    @include('includes.header')

        @yield('content')

    @include('includes.footer')
</body>
</html>
