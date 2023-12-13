<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Base Template Laravel 10 &amp; UI Framework</title>

    <meta name="description" content="Base Template Laravel 10 &amp; UI Framework created by pixelcave">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Base Template Laravel 10 &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Base Template Laravel 10 &amp; UI Framework created by pixelcave">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Codebase framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/codebase.min.css') }}">

</head>

<body>
    <!-- Page Container -->

    <div id="page-container" class="page-header-fixed page-header-glass main-content-boxed">

        <!-- Header -->
        @include('layout.components.header')
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            @yield('content')


            <!-- Footer -->
            @include('layout.components.footer')
            <!-- END Footer -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->


    <script src="{{ asset('assets/js/codebase.app.min.js') }}"></script>
</body>

</html>
