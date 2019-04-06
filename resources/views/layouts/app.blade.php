<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'Laravel') }} | @yield('titlePage')</title>
    <meta name="google-site-verification" content="{{ env('GOOGLE_VALIDATE') }}" />
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Software de Gestão Empresarial Completo, na nuvem e flexível para levar sua empresa para um novo patamar. Ajudamos mais de 2.000 empresas a potencializarem seus resultados. Vamos alavancar seu negócio?." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />
    <!-- Favicon icon -->
    <link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('assets/pages/waves/css/waves.min.css') }}" type="text/css" media="all">
    <!-- sweet alert framework -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/sweetalert/css/sweetalert.css') }}">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/feather/css/feather.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/notification/notification.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/animate.css/css/animate.css') }}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/component.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/widget.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/pages.css') }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('stylesheets')
    <style>
        .select2-selection--single{
            font-size: 14px !important;
            border-radius: 2px !important;
            border: 1px solid #ccc !important;
            border-top: none !important;
            border-right: none !important;
            border-left: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            height: 45px !important;
        }
        .select2-selection__rendered {
            background-color: #ffffff !important;
        }
    </style>
</head>
<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-bar"></div>
</div>
<!-- [ Pre-loader ] end -->
@includeIf(false, 'layouts.chat')
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('layouts.header')
        @include('layouts.navigation')
        <main class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <div class="pcoded-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header card">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <i class="@yield('icon') bg-c-blue"></i>
                                    <div class="d-inline">
                                        <h5>@yield('titlePage')</h5>
                                        <span>@yield('descPage')</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class=" breadcrumb breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="{{ url('/admin/dashboard') }}"><i class="feather icon-home"></i></a>
                                        </li>
                                        @isset($pages)
                                            @foreach($pages as $p)
                                                <li class="breadcrumb-item">
                                                    @isset($p['value'])
                                                        <a href="{{ route($p['route'], $p['value']) }}">{{ $p['name'] }}</a>
                                                    @else
                                                        <a href="{{ route($p['route']) }}">{{ $p['name'] }}</a>
                                                    @endisset
                                                </li>
                                            @endforeach
                                        @endisset
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="pcoded-inner-content col-md-@yield('sz-view') mx-auto">
                        <div class="main-body">
                            <div class="page-wrapper">
                                <div class="page-body">
                                    <!-- [ page content ] start -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5>@yield('titlePage')</h5>
                                                    <div class="card-header-right">
                                                        <ul class="list-unstyled card-option">
                                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                            <li><i class="feather icon-maximize full-card"></i></li>
                                                            <li><i class="feather icon-minus minimize-card"></i></li>
                                                            <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                            <li><i class="feather icon-trash close-card"></i></li>
                                                            <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="card-block">
                                                    @yield('content')
                                                </div>
                                            </div>
                                        </div>
                                        @stack('add-content')
                                    </div>
                                    <!-- [ page content ] end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ style Customizer ] start -->
                <div id="styleSelector">
                </div>
                <!-- [ style Customizer ] end -->
            </div>
        </main>
    </div>
    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade
            <br/>to any of the following web browsers to access this website.
        </p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="{{ asset('assets/images/browser/chrome.png') }}" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="{{ asset('assets/images/browser/firefox.png') }}" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="{{ asset('assets/images/browser/opera.png') }}" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="{{ asset('assets/images/browser/safari.png') }}" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="{{ asset('assets/images/browser/ie.png') }}" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
</div>
<script type="text/javascript">
    var _token = '{!! Session::token() !!}';
    var _url = '{!! url("/") !!}';
</script>
@stack("pre-javascript")
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- waves js -->
<script src="{{ asset('assets/pages/waves/js/waves.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('assets/js/vertical/vertical-layout.min.js') }}"></script>
<!-- notification js -->
<script type="text/javascript" src="{{ asset('assets/js/bootstrap-growl.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/pages/notification/notification.js') }}"></script>
<!-- sweet alert js -->
<script type="text/javascript" src="{{ asset('bower_components/sweetalert/js/sweetalert.min.js') }}"></script>
{{--<script type="text/javascript" src="{{ asset('assets/js/modal.js') }}"></script>--}}
<!-- Masking js -->
<script src="{{ asset('bower_components/jquery-mask/jquery.mask.min.js') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/js/script.min.js') }}"></script>
@stack("javascript")
@include('partials.errors')
@include('partials.message')
</body>
</html>
