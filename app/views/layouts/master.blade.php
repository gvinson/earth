<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>
        @section('title')
            The Earth Cafe | 
        @show
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @section('stylesheets')
        <link rel="icon" href="/favicon.ico?v=2" type="image/x-icon"> 
        <link rel="shortcut icon" href="/favicon.ico?v=2" type="image/x-icon">
        <style>
            @font-face{font-family:populairemedium;src:url(/fonts/populaire-webfont.eot);src:url(/fonts/populaire-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/populaire-webfont.woff2) format('woff2'),url(/fonts/populaire-webfont.woff) format('woff'),url(/fonts/populaire-webfont.ttf) format('truetype'),url(/fonts/populaire-webfont.svg#populairemedium) format('svg');font-weight:400;font-style:normal;}@font-face{font-family:proxima-nova;src:url(/fonts/proxima_nova_bold_it-webfont.eot);src:url(/fonts/proxima_nova_bold_it-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/proxima_nova_bold_it-webfont.woff2) format('woff2'),url(/fonts/proxima_nova_bold_it-webfont.woff) format('woff'),url(/fonts/proxima_nova_bold_it-webfont.ttf) format('truetype'),url(/fonts/proxima_nova_bold_it-webfont.svg#proxima_nova_rgbold_italic) format('svg');font-weight:bold;font-style:italic;}@font-face{font-family:proxima-nova;src:url(/fonts/proxima_nova_bold-webfont.eot);src:url(/fonts/proxima_nova_bold-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/proxima_nova_bold-webfont.woff2) format('woff2'),url(/fonts/proxima_nova_bold-webfont.woff) format('woff'),url(/fonts/proxima_nova_bold-webfont.ttf) format('truetype'),url(/fonts/proxima_nova_bold-webfont.svg#proxima_nova_rgbold) format('svg');font-weight:bold;font-style:normal;}@font-face{font-family:proxima-nova;src:url(/fonts/proxima_nova_reg-webfont.eot);src:url(/fonts/proxima_nova_reg-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/proxima_nova_reg-webfont.woff2) format('woff2'),url(/fonts/proxima_nova_reg-webfont.woff) format('woff'),url(/fonts/proxima_nova_reg-webfont.ttf) format('truetype'),url(/fonts/proxima_nova_reg-webfont.svg#proxima_nova_rgregular) format('svg');font-weight:400;font-style:normal}@font-face{font-family:icomoon;src:url(/fonts/icomoon.eot?-yzzafu);src:url(/fonts/icomoon.eot?#iefix-yzzafu) format('embedded-opentype'),url(/fonts/icomoon.ttf?-yzzafu) format('truetype'),url(/fonts/icomoon.woff?-yzzafu) format('woff'),url(/fonts/icomoon.svg?-yzzafu#icomoon) format('svg');font-weight:400;font-style:normal}[class*=" icon-"],[class^=icon-]{font-family:icomoon;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-leaf:before{content:"\e600"}.icon-facebook:before{content:"\ea8c";}
        </style>
    @show
    <!--[if lt IE 9]>
        <script src="/js/vendor/html5shiv.min.js"></script>
    <![endif]-->
</head>

@if (isset($body_classes))
    <body class="{{{ $body_classes }}}">
@else
    <body>
@endif

<!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<svg version="1.1" id="underline_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
     viewBox="0 0 267.5 17.5" enable-background="new 0 0 267.5 17.5" xml:space="preserve" style="display:none;">
     <symbol id="underline">
        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M266.4,2.1c-0.1-0.4-0.4-0.6-0.9-0.7c-0.2,0-0.4,0-0.6,0
            c-5,0.2-10.1,0.4-15.1,0.8c-2.9,0.2-5.7,0.4-8.6,0.5c-2.5,0-4.9,0.1-7.4,0.2c-0.6,0-1.2-0.1-1.8-0.2c-0.7,0.1-1.4,0.3-2,0.4
            c-3.2,0.3-6.3,0.5-9.5,0.7c-2.7,0.2-5.3,0.5-8,0.6c-5.1,0.3-10.3,0.6-15.4,0.8c-8.2,0.5-16.4,1-24.6,1.4c-5.2,0.2-10.5,0.3-15.7,0.6
            c-6.2,0.4-12.5,0.6-18.7,1.1c-4.9,0.4-9.9,0.3-14.8,0.8c-4.8,0.4-9.7,0.4-14.5,0.5c-7.3,0.2-14.7,0.5-22,0.6
            c-6.5,0.1-13.1,0.6-19.6,0.9c-5,0.2-10.1,0.6-15.1,0.9c-1.7,0.1-3.4,0.1-5,0.3c-2.7,0.3-5.3,0.4-8,0.3c-2.5-0.1-5-0.4-7.4-0.3
            c-3.4,0.2-6.7,0.1-10.1-0.1C15.5,12,9.5,12.2,3.6,12.6c-0.4,0-0.8,0.1-1.2,0.1c-0.7,0.1-1.1,0.7-0.9,1.3c0.2,0.6,0.6,1,1.3,1
            c0.2,0,0.4,0,0.6-0.1c4.2-1.1,8.4-1,12.7-1c3.1,0,6.1,0.3,9.2,0.3c4.9,0.1,9.7,0.1,14.6,0.1c2.4,0,4.8,0,7.1-0.4
            c0.5-0.1,1-0.1,1.5-0.1c5.1,0,10.1-0.3,15.1-0.7c2.2-0.2,4.3-0.4,6.5-0.5c8.8-0.4,17.6-0.8,26.4-1c6.4-0.2,12.9-0.5,19.3-0.4
            c0.4,0,0.8,0,1.2,0c3.9-0.2,7.9-0.6,11.8-0.7c8-0.2,16-0.7,24-1.4c2-0.2,4-0.2,5.9-0.3c5.2-0.3,10.5-0.6,15.7-0.9
            c4.6-0.2,9.3-0.3,14-0.5c6.4-0.3,12.9-0.6,19.3-0.9c2.6-0.1,5.2-0.3,7.7-0.6c4.3-0.5,8.7-1,13-1.1c0.9-0.6,1.9-0.5,2.9-0.5
            c7.7-0.2,15.4,0,23.1-0.5c3.3-0.2,6.7-0.1,10.1-0.1c0.5,0,1,0,1.4-0.4C266.4,3.1,266.6,2.6,266.4,2.1z"/>
     </symbol>
</svg>

<div class="body-wrapper">

    <aside class="main-sidebar">

        <a href="/" class="logo">
            <img src="/img/icon-nav-logo.png" srcset="/img/icon-nav-logo.png 1x, /img/icon-nav-logo@2x.png 2x" alt="Logo">
            <p>
                THE EARTH<br>
                <span>CAFE &amp; DELI</span>
            </p>
        </a>

        <nav class="main-nav">
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/menu">MENU</a></li>
                <li><a href="/mission">MISSION</a></li>
                <li><a href="/grocery">GROCERY</a></li>
                <li><a href="/contact">CONTACT</a></li>
            </ul>
            <div class="social-discover">
                <a href="" target="_blank">
                    <i class="icon-facebook"></i>
                    DISCOVER THE EARTH
                </a>
            </div>
        </nav>

        <div class="contact-info">
            <p>405.364.3551</p>
            <p>309 S Flood Ave,<br>
            Norman, OK 73069</p>
            <p>
                Mon - Fri  |  8am - 8pm<br>
                Sat  |  9am - 8pm<br>
                Sun  |  10am - 5pm<br>
            </p>
        </div>
    </aside>

    <a href="#" id="hamburger" class="mobile-only close">
        <div class="hamburger_piece" id="top-bun"></div>
        <div class="hamburger_piece" id="meat"></div>
        <div class="hamburger_piece" id="bottom-bun"></div>
    </a>

   <div id="mobile-nav-wrapper">
   </div>
    
    <section class="primary-content">
        @section('content')
        @show
    </section>
    
</div>

</body>
@section('scripts')
    <!--[if lte IE 9]>
        <script src="/js/vendor/html5-3.6-respond-1.1.0.min.js"></script> 
    <![endif]-->
    <link rel="stylesheet" href="/css/layout.css">
    <script src="/js/vendor/modernizr.js"></script>
    <script src="/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="/js/build.min.js"></script>
    <script>
    $(document).on('ready', function() {
        $(".main-nav a[href='" + window.location.pathname + "']").addClass('active');
        console.dir($('.main-nav a[href="' + window.location.pathname + '"]'));
    });
    </script>
@show
</html>