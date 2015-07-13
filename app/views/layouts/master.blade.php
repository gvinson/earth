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
            @font-face{font-family:populairemedium;src:url(/fonts/populaire-webfont.eot);src:url(/fonts/populaire-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/populaire-webfont.woff2) format('woff2'),url(/fonts/populaire-webfont.woff) format('woff'),url(/fonts/populaire-webfont.ttf) format('truetype'),url(/fonts/populaire-webfont.svg#populairemedium) format('svg');font-weight:400;font-style:normal}@font-face{font-family:proxima_nova_rgbold_italic;src:url(/fonts/proxima_nova_bold_it-webfont.eot);src:url(/fonts/proxima_nova_bold_it-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/proxima_nova_bold_it-webfont.woff2) format('woff2'),url(/fonts/proxima_nova_bold_it-webfont.woff) format('woff'),url(/fonts/proxima_nova_bold_it-webfont.ttf) format('truetype'),url(/fonts/proxima_nova_bold_it-webfont.svg#proxima_nova_rgbold_italic) format('svg');font-weight:400;font-style:normal}@font-face{font-family:proxima_nova_rgbold;src:url(/fonts/proxima_nova_bold-webfont.eot);src:url(/fonts/proxima_nova_bold-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/proxima_nova_bold-webfont.woff2) format('woff2'),url(/fonts/proxima_nova_bold-webfont.woff) format('woff'),url(/fonts/proxima_nova_bold-webfont.ttf) format('truetype'),url(/fonts/proxima_nova_bold-webfont.svg#proxima_nova_rgbold) format('svg');font-weight:400;font-style:normal}@font-face{font-family:proxima_nova_rgregular;src:url(/fonts/proxima_nova_reg-webfont.eot);src:url(/fonts/proxima_nova_reg-webfont.eot?#iefix) format('embedded-opentype'),url(/fonts/proxima_nova_reg-webfont.woff2) format('woff2'),url(/fonts/proxima_nova_reg-webfont.woff) format('woff'),url(/fonts/proxima_nova_reg-webfont.ttf) format('truetype'),url(/fonts/proxima_nova_reg-webfont.svg#proxima_nova_rgregular) format('svg');font-weight:400;font-style:normal}@font-face{font-family:icomoon;src:url(/fonts/icomoon.eot?-yzzafu);src:url(/fonts/icomoon.eot?#iefix-yzzafu) format('embedded-opentype'),url(/fonts/icomoon.ttf?-yzzafu) format('truetype'),url(/fonts/icomoon.woff?-yzzafu) format('woff'),url(/fonts/icomoon.svg?-yzzafu#icomoon) format('svg');font-weight:400;font-style:normal}[class*=" icon-"],[class^=icon-]{font-family:icomoon;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-leaf:before{content:"\e600"}.icon-facebook:before{content:"\ea8c";}
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
                Mon - Fri  |  8am - 8pm
                Sat  |  9am - 8pm
                Sun  |  10am - 5pm
            </p>
        </div>

    </aside>

    <a href="#" id="hamburger" class="mobile_only close">
        <div class="hamburger_piece" id="top_bun"></div>
        <div class="hamburger_piece" id="meat"></div>
        <div class="hamburger_piece" id="bottom_bun"></div>
    </a>
    
    <section class="primary-content">
        @section('content')
        @show
    </section>

</body>
@section('scripts')
    <!--[if lte IE 9]>
        <script src="/js/vendor/html5-3.6-respond-1.1.0.min.js"></script> 
    <![endif]-->
    <link rel="stylesheet" href="/css/layout.css">
    <script src="/js/vendor/modernizr.js"></script>
    <script src="/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="/js/vendor/picturefill.min.js"></script>
    <script src="/js/build.min.js"></script>
@show
</html>