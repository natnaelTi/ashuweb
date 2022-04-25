<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Portal | Ashenafe Mestika') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/cms/cms.js') }}" defer></script>

    <!-- Fonts and Icons -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!-- <link href="{{ asset('css/cms/pe-icon-7-stroke.css') }}" rel="stylesheet" /> -->

    <!-- Styles -->
    <link href="{{ asset('css/cms/cms.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/cms/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('css/cms/animate.min.css') }}" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('css/cms/light-bootstrap-dashboard.css?v=1.4.0') }}" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project  -->
    <link href="{{ asset('css/cms/demo.css') }}" rel="stylesheet" />
</head>

<body>
    <div id="app">
        <div class="wrapper">
            @auth
                <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

                    <!--

                            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                            Tip 2: you can also add an image using data-image tag

                        -->
                    <div class="sidebar-wrapper">
                        <div class="logo">
                            <a href="https://www.earaldtradinget.com" class="simple-text">
                                CMS Portal
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="active">
                                <a href="{{ route('dashboard') }}">
                                    <i class="pe-7s-graph"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cms_profile') }}">
                                    <i class="pe-7s-user"></i>
                                    <p>User Profile</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cms_artwork') }}">
                                    <i class="pe-7s-note2"></i>
                                    <p>Art Works</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cms_photography') }}">
                                    <i class="pe-7s-news-paper"></i>
                                    <p>Photography</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cms_videoart') }}">
                                    <i class="pe-7s-science"></i>
                                    <p>Videoart</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="pe-7s-door-lock"></i>
                                    <p>Logout</p>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endauth

            <div class="main-panel">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="{{ asset('js/cms/jquery.3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/cms/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{{ asset('js/cms/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('js/cms/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('js/cms/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('js/cms/demo.js') }}"></script>

{{-- <script type="text/javascript">
    $(document).ready(function() {

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Welcome to <b>CMS Portal</b> for <a href='https://www.ashenafemestika.com'>Ashenafe Mestika</a> - powered by <b><a href='https://www.earaldtradinget.com'>Earald Trading and ICT Technologies PLC.</a></b> - an easy-to-use website management portal for your website."

        }, {
            type: 'info',
            timer: 4000
        });

    });
</script> --}}

</html>
