<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>TAVMOBIL</title>
        
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/animate.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap-submenu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{ asset('style/css/leaflet.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('style/css/map.css')}}" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/font-awesome/css/font-awesome.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{ asset('style/fonts/bootstrap-icons/bootstrap-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/fonts/linearicons/style.css')}}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/jquery.mCustomScrollbar.css')}}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/dropzone.css')}}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/lightbox.min.css')}}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/jnoty.css')}}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('style/css/slick.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>

        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/initial.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('style/css/style.css')}}">
        <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('style/css/skins/midnight-blue.css')}}">

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{asset('style/img/logo-tav.png')}}" type="image/x-icon" >

        <!-- Google fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=OSans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/ie10-viewport-bug-workaround.css')}}">
        

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script  src="{{asset('style/js/ie-emulation-modes-warning.js')}}"></script>
        <!-- <script src="https://unpkg.com/vue@3"></script>
        <script src="https://unpkg.com/vue-router@4"></script> -->
        <script src="https://unpkg.com/@ivanv/vue-collapse-transition"></script>
        <script src="https://unpkg.com/vue-slick-carousel"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        

        

    </head>
    <body>
        
        <div id="app">
                <header-component></header-component>
                <transition 
                    mode="out-in"
                    enter-active-class="animate__animated animate__fadeIn"
                    leave-active-class="animate__animated animate__fadeOut">
                    <router-view></router-view>
                </transition>
                <!-- <fullpagesearch-component></fullpagesearch-component> -->
                <sidenav-component></sidenav-component>
                <loginmodal-component></loginmodal-component>
                <merkmodal-component></merkmodal-component>
                <carmodal-component></carmodal-component>
                <footer-component></footer-component>
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="{{asset('style/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('style/js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('style/js/bootstrap.bundle.min.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/bootstrap-submenu.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/rangeslider.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.mb.YTPlayer.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/bootstrap-select.min.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.easing.1.3.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.scrollUp.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/leaflet.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/leaflet-providers.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/leaflet.markercluster.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/dropzone.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/slick.min.js')}}"></script>     
        <script  type="text/javascript" src="{{asset('style/js/jquery.filterizr.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.magnific-popup.min.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.countdown.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jquery.mousewheel.min.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/lightgallery-all.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/jnoty.js')}}"></script>
        <script  type="text/javascript"  src="{{asset('style/js/maps.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/sidebar.js')}}"></script>
        <script  type="text/javascript" src="{{asset('style/js/app.js')}}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script  src="{{asset('style/js/ie10-viewport-bug-workaround.js')}}"></script>
    <!-- Custom javascript -->
    <script  src="{{asset('style/js/ie10-viewport-bug-workaround.js')}}"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
    
    </body>
</html>