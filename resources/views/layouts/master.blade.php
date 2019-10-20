<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield("title")</title>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{asset('img/logos/logo-shortcut.png')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/rev-settings.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/switcher.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}" id="colors">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    @yield("externalStyleSheets")
</head>

<body>

    <!-- preloader start -->
    @include('components.preloader')

    <!-- top header -->
    <div id="top-bar" class="hidden-sm-down">

        @include('includes.top_header')

    </div>

    <!-- navigation -->
    <header id="nav-transparent">

        @include('includes.header')

    </header>

    @yield("content")

    <footer>
        @include('includes.footer')
    </footer> 


    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.js')}}"></script>
    <script src="{{asset('js/navigation.js')}}"></script>
    <script src="{{asset('js/navigation.fixed.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/tabs.min.js')}}"></script>
    <script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('js/switcher.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    <script src="{{asset('js/map.js')}}"></script>
    <script src="{{asset('js/Chart.bundle.js')}}"></script>
    <script src="{{asset('js/utils.js')}}"></script>
    <script src="{{asset('js/revolution/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('js/revolution/jquery.themepunch.revolution.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.migration-2.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('js/revolution/revolution.extension.video.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    @yield("externalScripts")
</body>

</html>