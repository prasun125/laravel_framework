<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.head')
</head>
<body class="pos-relative">
    @yield('internal-css')
    <div id="app">
        <div class="grey-overlay min-width-100 width-100 max-width-100 pos-absolute display-none"></div>
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js') }}" type="text/javascript" rel="script"></script>
    <script src="{{ asset('assets/js/script.js') }}" type="text/javascript" rel="script"></script>
    @yield('internal-js')
</body>
</html>
