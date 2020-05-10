<meta charset="UTF-8">
<meta name="author" content="Prasun Paul Chowdhury">
<meta name="description" content="Laravel + Vue">
<meta name="keywords" content="Laravel + Vue">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
{{--<meta http-equiv="refresh" content="8">--}}
<meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--CSRF Token--}}
<meta name="csrf-token" content="{{ csrf_token() }}">

<!--Title-->
<title>@yield('title'){{ config('app.name', 'Laravel + Vue') }}</title>

<!--Favicon-->
<link href="{{ asset('assets/photos/favicon.png') }}" rel="shortcut icon" type="image/x-icon"/>

<!--Font-->
<link href="{{ asset('assets/fonts/font-roboto.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/fonts/font-material-icon.css') }}" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

<!--Vendor-->
<link href="{{ asset('assets/vendor/owlcarousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendor/owlcarousel/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.default.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.green.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/vendor/owlcarousel/css/owl.theme.green.min.css') }}" rel="stylesheet" type="text/css"/>

<!--Styles-->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/color.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/header.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet" type="text/css"/>
@yield('head-link')
