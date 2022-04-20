<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ashenafe Mastika </title>
    <meta
        content="Ashenafe Mestika is an Ethiopian fine artist and photographer, an alumni of Entoto Poly Technique College and Addis Ababa University Alle School of Fine Arts. His works primarily focus on modern and contemporary expressions."
        name="description">
    <meta
        content="Ashenafe, Mestika, Ashenafe Mestika, artist, ethiopia, addis ababa, artist in ethiopia, dawit abebe, christie, painting, sacchi"
        name="keywords">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('css/guest/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/guest/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/guest/app.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: MyResume - v4.7.0
    * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    @include('guest.inc.navbar')

    @include('guest.inc.message')

    @yield('content')

    @include('guest.inc.footer')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('css/guest/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('css/guest/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/guest/main.js') }}"></script>
</body>

</html>
