<!DOCTYPE html>
<html lang="{{ Lang::getLocale() }}">
<head>
    <title>@yield('head_title', getcong('sitetitle'))</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('head_description', getcong('sitemetadesc'))" />

    <meta property="og:type" content="article" />
    <meta property="og:title" content="@yield('head_title',  getcong('sitetitle'))" />
    <meta property="og:description" content="@yield('head_description', getcong('sitemetadesc'))" />
    
    <meta property="og:image" content="@yield('head_image', url('/assets/img/flogo.png'))" />
    <meta property="og:url" content="@yield('head_url', url())" />

    <meta name="twitter:image" content="@yield('head_image', url('/assets/img/logo.png'))" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="@yield('head_url', url())">
    <meta name="twitter:title" content="@yield('head_title',  getcong('sitetitle'))">
    <meta name="twitter:description" content="@yield('head_description', getcong('sitemetadesc'))">
    
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href="{{ url('/assets/img/favicon.png') }}" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="newsfeed/css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="newsfeed/css/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="newsfeed/css/superfish.css" media="all">
    <link rel="stylesheet" href="newsfeed/css/owl.carousel.css" media="all">
    <link rel="stylesheet" href="newsfeed/css/owl.theme.css" media="all">
    <link rel="stylesheet" href="newsfeed/css/jquery.navgoco.css">
    <link rel="stylesheet" href="newsfeed/css/flexslider.css">
    <link rel="stylesheet" href="newsfeed/css/color-options.css" media="all">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="demo.css">
    <link rel="stylesheet" href="newsfeed/css/responsive.css">
    
    <!-- Color Switch -->
    <link rel="stylesheet" href="css/skin/red.css" type="text/css" id="colors">

    <link rel="stylesheet" href="/assets/css/plugins.css">
    <link rel="stylesheet" href="/assets/css/application.css">
    <link rel="stylesheet" href="/assets/css/test.css">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Google Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700,600" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,300italic,300,400italic,700,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">
        .imgLiquid img {
            visibility: hidden
        }
    </style>
    
    <style type="text/css">
        body {
            font-family: 'Roboto Condensed', sans-serif;
        }
    </style>

    {!! getcong('headcode') !!}

    @yield("header")

</head>

<body class="punica-home-1">
<div id="theme-option" style="left: -275px;">
    <div class="theme-opt-wrapper">
        <p>
            <em>You can use Unlimited Colors</em>
        </p>
        <ul class="choose-color">
            <li>
                <a href="#" class="color red active">&nbsp;</a>
            </li>
            <li>
                <a href="#" class="color blue">&nbsp;</a>
            </li>
            <li>
                <a href="#" class="color cyan">&nbsp;</a>
            </li>
            <li>
                <a href="#" class="color pink">&nbsp;</a>
            </li>
            <li>
                <a href="#" class="color green">&nbsp;</a>
            </li>
            <li>
                <a href="#" class="color oran">&nbsp;</a>
            </li>
            <li>
                <a href="#" class="color purple">&nbsp;</a>
            </li>
        </ul>
        <div class="text-center">
            <a href="#" class="reset" onclick="return punica_theme_option_reset_CLICK();">Reset</a>
        </div>
    </div>
    <!--end:theme-opt-wrapper-->
    <a href="#" class="fa fa-cog open-close-button"> </a>
    <!--open-close-button-->
</div>
<?php $DB_USER_LANG = isset($DB_USER_LANG) ? $DB_USER_LANG : '' ?>
@include("_particles.header")

@yield("content")

@include("_particles.footer")

<script src="newsfeed/js/jquery-1.11.1.min.js"></script>
<script src="newsfeed/js/bootstrap.min.js"></script>
<script src="newsfeed/js/colorswitch.js"></script>
<script src="newsfeed/js/custom.js" charset="utf-8"></script>
<script src="newsfeed/js/superfish.js"></script>
<script src="newsfeed/js/jquery.navgoco.js"></script>
<script src="newsfeed/js/owl.carousel.js"></script>
<script src="newsfeed/js/jquery.flexslider-min.js"></script>
<script src="newsfeed/js/uisearch.js"></script>
<script src="newsfeed/js/classie.js"></script>
<script src="newsfeed/js/jflickrfeed.js"></script>
<script src="newsfeed/js/imgliquid.js"></script>
<script src="newsfeed/js/waypoints.js"></script>
<script src="newsfeed/js/waypoints-sticky.js"></script>
<script src="newsfeed/js/modernizr.custom.js"></script>

<script src="/assets/js/plugins.js"></script>
<script src="/assets/js/app.min.js"></script>

<script>
    $( document ).ready(function() {
        App.init();
    });
</script>

@yield("footer")
@include('.errors.swalerror')

<div id="auth-modal" class="modal auth-modal"></div>

<div class="hide">
    <input name="_requesttoken" id="requesttoken" type="hidden" value="{{ csrf_token() }}" />
</div>

{!!  getcong('footercode')  !!}

</body>
</html>