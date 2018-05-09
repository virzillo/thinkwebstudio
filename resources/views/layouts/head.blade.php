<head>
    <meta charset="utf-8">

    <!-- Making sure the web-site will scale fine on mobiles-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
    <!-- Trying to force IE to perform at its best-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    @stack('meta')

    <!--link(rel='stylesheet', href='./libs/materialize/materialize.min.css')-->
    <!--link(rel='stylesheet', href='./libs/owl/owl.carousel.css')-->
    <!--link(rel='stylesheet', href='./assets/css/linea.css')-->
    <!--link(rel='stylesheet', href='./assets/css/react.css')-->
    <!-- build.min.css includes all of the commented styles above-->

        <!-- Styles -->
       
        <link rel="shortcut icon" href="{{asset('/favicon.ico')}}">


    <link rel="stylesheet" href="{{ asset('assets/build/build.min.css?v=1.7') }}">

    <!-- Font awesome icons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <!-- Favicons generated by http://realfavicongenerator.net-->
<!--     <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/') }}/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('/') }}/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/') }}/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/') }}/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/') }}/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/') }}/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/') }}/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/') }}/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="{{ asset('/') }}/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('/') }}/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('/') }}/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('/') }}/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="{{ asset('/') }}/favicons/manifest.json">
    <link rel="mask-icon" href="{{ asset('/') }}/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="{{ asset('/') }}/favicon.ico">


    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{ asset('/') }}/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="{{ asset('/') }}/favicons/browserconfig.xml"> -->
    <meta name="theme-color" content="#ffffff">


    <title>@yield('title')</title>
</head>